<!DOCTYPE HTML>
<html lang="<?php echo $lang; ?>">
	<head>
   	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
   	<!-- <base href="http://v2.cyrilf.com/" /> -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.16/jquery-ui.min.js" type="text/javascript"></script>

		<script src="views/js/script.js" type="text/javascript"></script>
		<link rel="shortcut icon" type="image/x-icon" href="views/images/favicon.ico" />
		<link rel="stylesheet" type="text/css" href="views/css/style.css" type="text/css" >
		<link rel="stylesheet" type="text/css" href="views/css/print.css" type="text/css" media="print">
		<!--<link rel="stylesheet/less" type="text/css" href="views/css/style.less">-->
		<!--<link rel="stylesheet/less" type="text/css" href="views/css/print.less" media="print">-->
		<!--<script src="views/js/less.min.js" type="text/javascript"></script>-->
		<script src="views/js/jquery.spasticNav.js" type="text/javascript"></script>
		<link href='http://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Droid+Sans' rel='stylesheet' type='text/css'>

		<?php if(isset($metaGplus)) include("headGPlus.php"); ?>
		<title><?php echo $title; ?></title>
		<meta name="google-site-verification" content="KP57BpZEznIYu8Q8mPfLb7GkntURtqD8NyhnKgCBWDo" />
		<meta name="keywords" content="<?php echo $keywords; ?> ">
		<meta name="description" content="<?php echo $description; ?>">
	</head>
	<body>
		<?php include_once('googleAnalytics.php'); ?>
		<div id="container">
			<div id="sidebar">
				<?php echo $sidebar; ?>
			</div>
			<div id="contentBack">
				<div id="content">
					<?php echo $menu; ?>
					<?php echo $content; ?>
					<br />
					<?php echo $footer; ?>
				</div>
			</div>
		</div>
	</body>
</html>