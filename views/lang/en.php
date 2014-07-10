<?php

	//Calculate the age
	$age = (date("Y") - 1991);
	if(date("m") < 9 || (date("m") == 9 && date("d") < 4))
		$age--;

	$trad = array();

	$trad += array(
				'__LANG' => 'en'
			);
	//Sidebar_________________________________________
	$trad += array(
				'__EMAIL' => 'EMAIL',
				'__SOCIAL' => 'SOCIAL',
			);

	//Menu____________________________________________
	$trad += array(
				'__HOME' 	=> 'Home',
				'__CV' 		=> 'CV',
				'__INFOS'	=> 'Infos',
				'__CONTACT'	=> 'Contact'
			);

	//Home____________________________________________
		$trad += array(
				'__ITStudent' 			=> 'Computer science student',
				'__WebDeveloper' 		=> 'Web and software developer',
				'__AutoEntrepreneur'	=> 'Auto-entrepreneur'
			);

	//CV_____________________________________________
		$trad += array(
				'__Download'			=> 'Download',
				'__Print'				=> 'Print',

				'__MeDrivingLicense' 	=> 'Driving license, own car.',
				'__MeInfos'				=> $age . ' years old, auto-entrepreneur (freelance) and french.',
				'__Formation'			=> 'Training',
				'__YearStudies'			=> 'Fourth year in computer science preparing a Master Degree',
				'__BacDegree'			=> 'High School Diploma in sciences (Mathematics specialty) with honors.',
				'__ComputerSkills'		=> 'Computer skills',

				'__Development'			=> 'Development',
				'__Software'			=> 'Software',
				'__Web'					=> 'Web',
				'__Databases'			=> 'Databases',
				'__Systems'				=> 'Systems',
				'__Graphics'			=> 'Graphics',
				'__Others'				=> 'Others',

				'__ProfessionalExperience'	=> 'Professional Experience',

				'__42Stores3_1Desc'		=> 'LESS integration on all sites merchants. Implementation of a new editor based on CodeMirror in the back office. Development of tools allowing customers to customize the appearance of their shop.',

				'__February'			=> 'February',
				'__November'			=> 'November',
				'__42Stores2_1Desc'		=> 'Added many features and improvements on the platform, to continue its evolution. New plugins are developed as well as specific developments. Discover and use of GIT.',

				'__July'				=> 'July',
				'__September'			=> 'September',

				'__42Stores1_1Desc'		=> 'Development of a dashboard that contains the statistics of the platform (number of visitors, revenue, average basket ..)',
				'__42Stores1_2Desc'		=> 'Overhaul of the product page, by simplifying it for novices and adding new features, such as degressivity of prices for experts. Improved ergonomics.',

				'__October'				=> 'October',
				'__Logsys1Desc'			=> 'Reports development in SQL with Visual Studio on financial results or stock status.',
				'__Logsys2Desc'			=> 'Developing an application in C #, ASP.net and SQL to manage employees with setting up a solution to print all contracts.',
				'__Logsys3Desc'			=> 'Developing an application in C #, XML and SQL based on Windows CE (embedded) to update all the scanners (LXE MX5) of the society, and development of an inventory management.',


				'__CVLanguages'			=> 'Languages',
				'__French'				=> 'French',
				'__FrenchDesc'			=> 'Native language',
				'__English'				=> 'English',
				'__EnglishDesc'			=> 'Fluent (read, write and speak).',
				'__Spanish'				=> 'Spanish',
				'__SpanishDesc'			=> 'School level (read, write and speak).',
				'__Trips'				=> 'Trips (France, Canada, Ireland, England, Italy, Spain, and Egypt).',

				'__Hobbies'				=> 'Hobbies',
				'__Sports'				=> 'Sports : Chess, archery, badminton and biking.',
				'__HobbiesDesc'			=> 'Hobbies : Guitar, Movies, Concerts, Google, Adrenalin and Travels (couchsurfing).'
			);


	//Infos___________________________________________

		$trad += array(
				'__Student' => 'Computer science student',
				'__StudentDesc' => 'I\'m studying at Supinfo Montréal, in my fourth year.
					I prepare a Master (Bac +5) and learn many technologies.',
				'__Developper' => '<small>Web</small> developer',
				'__DevelopperDesc' => 'I am auto-entrepreneur. I also develop projects for school and personal ones.',
				'__Currently' => 'Currently',
				'__CurrentlyDesc' => 'I am in Canada (Montreal) for studies. I took the opportunity to visit and meet people without forgetting studies',
				'__Softwares' => 'Softwares',
				'__Languages' => 'Languages',
				'__SupinfoDesc' => 'I studied there three days a week (Wednesday / Thursday / Friday). We have a general education for the network, system, management and development also.
					Many projects are assigned and teach us how to organize ourselves and work in group.',
				'__More' => 'Further',
				'__Redactor' => '<small>Zorgloob</small> redactor',
				'__RedactorDesc' => 'I write articles on Zorgloob. The theme is of course Google and its big universe. The team writes full articles as soon as possible to be reactive and well referenced.'
		);

	//Project_________________________________________
		$trad += array(
					'__PROJECTS' 		=> 'PROJECTS'
			);

	//Contact________________________________________
		$trad += array(
				'__ErrorMessage' 	=> 'An error occurred while sending your message. <br />
					<span id="retry" class="bold">Try again ?</span>',
				'__ValidMessage' 	=> 'Your message has been successfully sent.',
				'__Contact' 		=> 'Contact',
				'__FandLastName'	=> 'First &amp; last name',
				'__Email'			=> 'Email',
				'__Subject'			=> 'Subject',
				'__Message'			=> 'Message',
				'__RepeatCode'		=> 'Repeat the code',
				'__Send'			=> 'Send'
		);

	//404____________________________________________
		$trad += array(
			'__404Title'		=> '404 - Page not found',
			'__404Description'	=> 'This page doesn\'t exist !'
		);

	//Footer_________________________________________

		$trad += array(
			'__Footer' => 'Cyril Francesconi - 2014 - Web, Software and mobile developer'
		);
?>
