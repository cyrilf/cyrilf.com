<?php	require 'config.php';	try	{		$conn = new PDO('mysql:host='.DB_HOST .';dbname='.DB_BDD .'', ''.DB_LOGIN .'', ''.DB_PASS .'');	}			catch(Exception $e)	{		die('Erreur : ' .$e->getMessage());	}	$sql = $conn->query('SELECT * FROM news ORDER BY id DESC LIMIT 0,10');?><!DOCTYPE HTML><html lang="fr">
   <head>
       <title>Tutoriels</title>
	   <meta charset="UTF-8">
	   <meta name="google-site-verification" content="-CBq6SUEiAu6cE3qTAIybrBVxjZgbgeU0EgUf7Lte3c" />
	   <meta name="keywords" content="Cyril, Francesconi, 95225, Supinfo, Grand Quevilly, Grand-Quevilly, CV, site personnel, Tutoriels">
	   <meta name="description" content="Vous êtes dans la séction tutoriels. Ici vous trouverez des exemples pour vous faciliter la vie si vous êtes programmeurs. Des tutoriels pour les débutants seront aussi à prévoir. N'hésitez pas à revenir de temps en temps.">
	   <?php include("head.php"); ?>
   </head>
   <body>
		<?php include("menu.php"); ?>
		<div id="page">
			<div id="content">
				<img class ="right" height="163" width="160" src="images/contact (1).jpg" alt="lettre"></img>
				<?php					while($data = $sql->fetch())					{						echo "<h1 class='title'>{$data["title"]}</h1>";						echo "<p class='content'>{$data["content"]}</p>";						echo "<p align='right'>".date("j/m/Y G:i", strtotime($data["date"]))."</p>";					}					?>
			</div>
		</div>
		<?php include("footer.php"); ?>
   </body>
</html>