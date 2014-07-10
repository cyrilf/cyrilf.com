<?php

	//Calculate the age
	$age = (date("Y") - 1991);
	if(date("m") < 9 || (date("m") == 9 && date("d") < 4))
		$age--;

	$trad = array();

	$trad += array(
				'__LANG' => 'fr'
			);

	//Sidebar_________________________________________
	$trad += array(
				'__EMAIL' => 'EMAIL',
				'__SOCIAL' => 'SOCIAL',
			);

	//Menu____________________________________________
	$trad += array(
				'__HOME' 	=> 'Accueil',
				'__CV' 		=> 'CV',
				'__INFOS'	=> 'Infos',
				'__CONTACT'	=> 'Contact'
			);

	//Home____________________________________________
		$trad += array(
				'__ITStudent' 			=> 'Etudiant en informatique',
				'__WebDeveloper' 		=> 'Développeur Web et Logiciel',
				'__AutoEntrepreneur'	=> 'Auto-entrepreneur'
			);

	//CV_____________________________________________
		$trad += array(
				'__Download'			=> 'Télecharger',
				'__Print'				=> 'Imprimer',

				'__MeDrivingLicense' 	=> 'Permis B, voiture personnelle.',
				'__MeInfos'				=> $age . ' ans, auto-entrepreneur et nationalité française.',
				'__Formation'			=> 'Formation',
				'__YearStudies'			=> 'Quatrième année d\'ingénierie informatique préparant à un Master (Bac +5)',
				'__BacDegree'			=> 'Baccalauréat Scientifique (spécialité Mathématiques) avec Mention Bien.',
				'__ComputerSkills'		=> 'Compétences en informatique',

				'__Development'			=> 'Développement',
				'__Software'			=> 'Logiciel',
				'__Web'					=> 'Web',
				'__Databases'			=> 'Base de données',
				'__Systems'				=> 'Systèmes',
				'__Graphics'			=> 'Graphismes',
				'__Others'				=> 'Autres',

				'__ProfessionalExperience'	=> 'Expériences Professionelles',

				'__42Stores3_1Desc'		=> 'Intégration de LESS sur l\'ensemble des sites marchants. Mise en place d\'un nouvel éditeur basé sur CodeMirror dans le back-office. Développement d\'outils permettant aux clients de personnaliser l\'apparence de leur boutique.',

				'__February'			=> 'Février',
				'__November'			=> 'Novembre',
				'__42Stores2_1Desc'		=> 'Ajout et améliorations de nombreuses fonctionnalités sur la plateforme, afin de continuer son évolution. De nouveaux plugins sont développés ainsi que des développements spécifiques. Découverte et utilisation de GIT.',

				'__July'				=> 'Juillet',
				'__September'			=>'Septembre',

				'__42Stores1_1Desc'		=> 'Développement d\'un tableau de bord contenant les statistiques de la plateforme (nombre de visiteurs, chiffre d\'affaire, panier moyen..)',
				'__42Stores1_2Desc'		=> 'Refonte de la fiche produit, en la simplifiant pour les novices et en ajoutant de nouvelles fonctionalités, comme la dégressivité des prix, pour les experts. Amélioration de l\'ergonomie.',

				'__October'				=> 'Octobre',
				'__Logsys1Desc'			=> 'Développement de rapports en SQL avec Visual Studio concernant les résultats financiers ou l\'état des stocks.',
				'__Logsys2Desc'			=> 'Développement d\'une application en C#, ASP.net et SQL permettant la gestion des employés avec mise en place d\'une solution de publipostage pour imprimer l\'ensemble des contrats.',
				'__Logsys3Desc'			=> 'Développement d\'une application en C#, XML et SQL basé sur Windows CE(Embedded) permettant la mise à jour de l\'ensemble des scanners(LXE MX5) de la société, ainsi qu\'une gestion d\'inventaire et de stocks.',


				'__CVLanguages'			=> 'Langues',
				'__French'				=> 'Francais',
				'__FrenchDesc'			=> 'Langue maternelle',
				'__English'				=> 'Anglais',
				'__EnglishDesc'			=> 'Bon niveau (lu, écrit et parlé).',
				'__Spanish'				=> 'Espagnol',
				'__SpanishDesc'			=> 'Niveau scolaire (lu, écrit et parlé).',
				'__Trips'				=> 'Voyages (France, Canada, Irelande, Angleterra, Italie, Espagne et Egypte).',

				'__Hobbies'				=> 'Activités et Centres d\'interêts',
				'__Sports'				=> 'Sports : échecs, tir à l\'arc, badminton et VTT.',
				'__HobbiesDesc'			=> 'Centres d\'interêts : Guitare, Cinéma, Concerts, Google, Sensations fortes et Voyages (couchsurfing).'
			);


	//Infos___________________________________________

		$trad += array(
				'__Student' => 'Etudiant <small>informatique</small>',
				'__StudentDesc' => 'J\'étudie à Supinfo Montréal, en 4ème année.
					Je prépare un Master ( Bac +5 ) et apprends de nombreuses technologies sur l\'informatique. Je suis orienté développement web.',
				'__Developper' => 'Développeur <small>Web</small>',
				'__DevelopperDesc' => 'Je suis auto-entrepreneur. Par ailleurs, je développe des projets pour l\'école ainsi que des projets personnels.',
				'__Currently' => 'En ce moment',
				'__CurrentlyDesc' => 'Je suis au Canada (Montréal) pour études. J\'en profite pour visiter et rencontrer des gens sans oublier les études.',
				'__Softwares' => 'Logiciels',
				'__Languages' => 'Langages',
				'__SupinfoDesc' => 'J\'y étudie 3 jours par semaine (mercredi/jeudi/vendredi). Nous y avons un enseignement général qui touche le réseau, le système, le management et aussi le développement.
					De nombreux projets nous sont attribués et nous apprennent à nous organiser et à travailler en groupe.',
				'__More' => 'Encore plus',
				'__Redactor' => 'Rédacteur <small>Zorgloob</small>',
				'__RedactorDesc' => 'J\'écris des articles publiés sur <a href="http://zorgloob.com">Zorgloob</a>. Le thème est bien sûr Google et son grand univers. L\'équipe rédige des articles complets et au plus vite pour être réactif et bien réferencé.'
		);

	//Project_________________________________________
		$trad += array(
				'__PROJECTS' 		=> 'PROJETS'
			);


	//Contact________________________________________
		$trad += array(
				'__ErrorMessage' 	=> 'Une erreur est survenue lors de l\'envoi de votre message. <br />
					<span id="retry" class="bold">Réessayer ?</span>',
				'__ValidMessage' 	=> 'Votre message a bien été envoyé.',
				'__Contact' 		=> 'Contact',
				'__FandLastName'	=> 'Nom &amp; Prénom',
				'__Email'			=> 'Email',
				'__Subject'			=> 'Sujet',
				'__Message'			=> 'Message',
				'__RepeatCode'		=> 'Entrez le code',
				'__Send'			=> 'Envoyer'
		);

	//404____________________________________________
		$trad += array(
			'__404Title'		=> '404 - Page non trouvée',
			'__404Description'	=> 'Cette page n\'existe pas (ou n\'existe plus) !'
		);

	//Footer_________________________________________

		$trad += array(
			'__Footer' => 'Cyril Francesconi - 2014 - Développeur Web, Logiciel et Mobile'
		);
?>
