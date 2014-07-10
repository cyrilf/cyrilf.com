<?php
session_start();

require_once('tools/lang.php');
$lang = prefered_language();
require_once('views/lang/'.$lang.'.php');


if (isset($_GET['page']) && !empty($_GET['page']) && is_file('controllers/'.$_GET['page'].'.php')){
	require_once('controllers/'.$_GET['page'].'.php');
} else {
	require_once('controllers/home.php');
}
?>