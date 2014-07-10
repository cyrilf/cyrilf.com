<?php
	$referrer = $_SERVER['HTTP_REFERER'];
	$person = null;
	if (preg_match("/kenium.at/",$referrer)) {
		$person='kevin';
	}
	else if(preg_match("/kenium.tk/", $referrer)) {
		$person='kevin';
	}
	else if(preg_match("/kevingermain.fr/", $referrer)) {
		$person='kevin';
	}
	else if(preg_match("/neilrosenstech.com/", $referrer)) {
		$person = 'neil';
	}
?>

<!DOCTYPE HTML>
<html lang="fr">
   <head>
       <title>Accueil - Cyril Francesconi</title>
	   <meta charset="UTF-8">
	   <meta name="google-site-verification" content="KP57BpZEznIYu8Q8mPfLb7GkntURtqD8NyhnKgCBWDo" />
	   <meta name="keywords" content="Cyril, Francesconi, cyrilf, 95225, Supinfo, Rouen, 76000, CV, site personnel">
	   <meta name="description" content="Cyril Francesconi est un site personnel où vous trouverez pleins d'informations me concernant telles que mon CV, vous pouvez aussi me contacter.">
	   <?php include("head.php"); ?>    
   </head>
   <body>	
		<div id="conteneur">
			<div id="fleche" class="fleche">
				<img alt="fleche" src="images/fleche.png"/>
			</div>
			<?php include("menu.php");?>
			<div id="page">
				<div id="content">

					<div class="right" id="img1" alt="accueil"></div>
					
					<?php if(isset($person) && $person != null)
						{
							if($person == 'kevin')
								echo '> Bonjour, grâce à <a href="http://www.kevingermain.fr" id="green">Kévin Germain</a> vous voilà ici ! Alors<br /><br /><br />';
							else if($person == 'neil')
								echo '> Bonjour, grâce à <a href="http://www.neilrosenstech.com" id="green">Neil Rosenstech</a> vous voilà ici ! Alors<br /><br /><br />';
							
							echo '<input type="hidden" id="bottomArrow" value="-47"></input>';
						}
						else
							echo '<input type="hidden" id="bottomArrow" value="-98"></input>';?>
							
					<h1>Bienvenue sur mon site personnel !</h1><br />

					<h2>Qui suis-je ?</h2>
					<p>
						Je m'appelle <strong>Cyril Francesconi.</strong><br />
						Je suis actuellement étudiant en deuxième année à <strong>Supinfo Caen</strong> dans le but d'obtenir un <strong>Master en informatique et systèmes d'information</strong>.<br /><br />
						J'ai créé ce site pour vous montrer mes <strong>connaissances</strong> et <strong>compétences</strong> au travers de mon <a href="cv.php" >CV</a>.<br /><br />
					</p>

					<h2>Le site</h2>
					<p>
						Il vient tout <strong>juste d'être mis en ligne</strong>, mais j'éspere qu'au fil du temps je pourrai le compléter de mes diverses <strong>expériences professionnelles</strong>.<br/>
						Si vous souhaitez suivre son <strong>évolution</strong> n'hésitez pas à <strong>revenir</strong> de temps en temps.<br /><br />
						Vous pouvez me <strong>contacter</strong> grâce au <a href="contact.php">formulaire</a> pour me donner un <strong>avis</strong> sur ce site ou me laisser un <strong>message</strong>.<br /><br />
					</p>

					<h2 id="green">Proposition !</h2>
					<p>
						<strong>Vous souhaitez créer un site web pour votre entreprise ou tout simplement pour vous-même ?<br />
						Je vous propose mes services pour réaliser vos souhaits. Je peux créer votre site, obtenir votre nom de domaine et gérer son hébergement.<br />
						Si vous êtes intéressés ou si vous souhaitez plus d'informations, n'hésitez pas à me <a href="contact.php">contacter</a> !</strong><br /><br />
					</p>

					<h2>En ce moment</h2>
					<p>
						Je suis actuellement en deuxième année d'étude à <strong>Supinfo Caen</strong>.<br />
						Je développe une application en C# permettant d'envoyer des mails avec un faux epéditeur. 
						Je m'occupe aussi en codant un back-office pour la gestion des messages reçus ainsi que pour gérer une future (?) section Réalisation.<br />
						
						En parallèle, pour les projets de groupe de fin d'année nous devons développer un jeu de type <a href="http://www.gamepoetry.com/blog/4k-flash-rampart/">remparts</a> ainsi qu'un système
						de gestion complet des stocks et des prêts en php.<br /><br />

						Voilà, les présentations sont finies.<br />
						<strong>Bonne visite</strong>,<br /><br />

						<strong>Cordialement</strong>.
					</p>
				</div>
			</div>
		</div>
		<br />
		<?php include("footer.php"); ?>
		<script type="text/javascript">
			$(document).ready(function(){
			  $('#conteneur .fleche')
				.delay(2500)
				.queue(function() {
				$(this).animate({
				  top : $('#bottomArrow').val() + 'px'
				},{
					duration : 2500
				  , easing   : 'easeOutBounce'
				  , queue    : false
				});
				});
				;
			
				$('#fleche').click(function(){
				  $('#conteneur div.fleche')
					.animate({
					  top : '-700px'
					},{
						duration : 2000
					  , easing   : 'easeInBack'
					  , queue    : false
					});
				});
			});
		</script>
   </body>
</html>