﻿<?php session_start(); ?><!DOCTYPE HTML><html lang="fr">   <head>       <title>Administration - Messages</title>		<meta charset="UTF-8">		<meta name="google-site-verification" content="KP57BpZEznIYu8Q8mPfLb7GkntURtqD8NyhnKgCBWDo" />	   <meta name="keywords" content="Cyril, Francesconi, 95225, Supinfo, Grand Quevilly, Grand-Quevilly, CV, site personnel, Tutoriels">	   <meta name="description" content="Vous êtes dans la section administrative. ">	   <?php include("head.php"); ?>   </head>   <body>		<?php include("menu.php"); ?>	<div id="content2">				<!--Formulaire caché pour envoyer l'id de la ligne cliquée-->		<form id="redirection" method="post" action="a_message.php" style="display:none;">			<input type="hidden" id="ident" name="ident" value="" />			<input type="hidden" id="choice" name="choice" value="" />		</form>				<script type="text/javascript"> 			//Si le bouton de coloration est cliqué on envoit l'id de la ligne à colorer.			function color(id) 			{ 										document.getElementById('ident').value = id;				document.getElementById('choice').value = 'false';				document.getElementById('redirection').submit();			}						//Si le bouton de suppression est cliqué on envoit l'id de la ligne à supprimer, aprés confirmation.			function ask(id)			{				if (confirm("Etes vous sûr de vouloir supprimer cette ligne ?"))				{					document.getElementById('ident').value = id;					document.getElementById('choice').value = 'true';					document.getElementById('redirection').submit();				}			}		</script> 				<?php 				require 'config.php';			//On vérifie que la session est crée			if(isset($_SESSION['login']) AND isset($_SESSION['password']))			{				//On vérifie encore l'authentification pour éviter le cas ou quelqu'un ne crée une session anonyme				if( $_SESSION['login'] == 'cyril' AND $_SESSION['password'] == DB_PASS1)				{					//On se connecte à la base					try					{
						$conn = new PDO('mysql:host='.DB_HOST .';dbname='.DB_BDD .'', ''.DB_LOGIN .'', ''.DB_PASS .'');					}											catch(Exception $e)					{						die('Erreur : ' .$e->getMessage());					}										//On regarde s'il a cliqué sur surligner ou supprimer une ligne					if( isset($_POST['choice']))					{						$choi = $_POST['choice'];												//S'il a cliqué sur supprimer, on supprime la ligne correspondante.						if($choi == 'true')						{							if( isset($_POST['ident']))							{								$ident = $_POST['ident'];																		$sql = $conn->prepare('DELETE FROM contact WHERE id=:id');								$sql->execute(array('id' => $ident));							}						}												//Sinon on surligne, la ligne correspondante.						else						{							if( isset($_POST['ident']))							{								$ident = $_POST['ident'];																			$sql = $conn->prepare('SELECT surligne FROM contact WHERE id=:id');								$sql->execute(array('id' => $ident));																while ($data = $sql->fetch())								{									$resultat = $data['surligne'];								}								if($resultat == '0')								{									$sql = $conn->prepare('UPDATE contact SET surligne = 1 WHERE id=:id');									$sql->execute(array('id' => $ident));								}								//Si la ligne est déjà surlignée, on la repasse en blanc.								else 								{									$sql = $conn->prepare('UPDATE contact SET surligne = 0 WHERE id=:id');									$sql->execute(array('id' => $ident));								}							}						}					}										//On affiche un lien de retour a la page d'admin.					?>						<div style="margin-left : 5px; margin-top:-10px;">							<a href="a_index.php"><img src="images/fleche_left.png" alt="fleche"></img></a><br />						</div>					<?php										//On affiche, le nombre total de messages.					$sql = $conn->query('SELECT COUNT(id) AS nbr FROM contact');					while($data = $sql->fetch())					{						if($data['nbr'] == 0)							echo '<div style="margin:0; padding:0"><ul><li> Aucun message reçu.</li></ul></div>';						else if ($data['nbr'] == 1)							echo '<div style="margin:0; padding:0"><ul><li> Un message reçu.</li></ul></div>';						else							echo '<div style="margin:0; padding:0"><ul><li>' . $data['nbr'] . ' messages reçus.</li></ul></div>';					}																	//Ensuite, on crée le tableau avec tout nos messages					$sql = $conn->query('SELECT id, date, nom, email, sujet, message, surligne FROM contact ORDER BY id DESC');					?>					<table id="tblMail" class="tblMail">					<tr>						<th>Commandes</th><th style="width:200px;">Date</th><th>Nom</th><th>Mail</th><th width="270px">Sujet</th><th width="500px;">Message</th>					</tr>					<?php												$i = 0;					$id = "row";										while($data = $sql->fetch())					{							$id = "row" . $i;						echo '<tr class="surligne'. $data['surligne'] . '">'.								'<td class="tblMail">'.									'<button type="button" onclick="ask('.$data['id'] .')"><img height="10px" width="10px" src="images/wrong.png"></button>'.									'<button type="button" onclick="color('.$data['id'] .')"> <img height="10px" width="10px" src="images/greenFlag.png"></button>'.								'</td>'.								'<td class="tblMail">'.htmlspecialchars(stripslashes(date("d-m-Y H:i",strtotime($data['date'])))).'</td>'.								'<td class="tblMail">'.htmlspecialchars(stripslashes($data['nom'])) . '</td>'.								'<td class="tblMail">'.htmlspecialchars(stripslashes($data['email'])) . '</td>'.								'<td class="tblMail">'.htmlspecialchars(stripslashes($data['sujet'])) . '</td>'.								'<td class="tblMail">' .htmlspecialchars(stripslashes($data['message'])) . '</td>'.							'</tr>';						$i++;					}					echo '</table>';					$sql->closeCursor();				}			}			//Sinon, si le login et le mdp ne sont pas rentrés, on affiche le formulaire de connexion par défaut.			else				echo "<script type='text/javascript'>document.location.replace('a_index.php');</script>";?>					</div>	<?php include("footer.php"); ?>	   </body></html>