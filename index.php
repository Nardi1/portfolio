<?php  
	require 'parts/functions.php';
	$whitelist = ['home','creation', 'projet', 'contact'];

	part("header");

	if ($_GET['page'] == 'projet' && !isset($_GET['projet'])) {
		part("404");
	} else {

	if (!isset($_GET['page'])) {
		require 'parts/page/home.php';
	} else {
		$page = 'parts/page/' . $_GET['page'] . '.php';
		if (file_exists($page) && in_array($_GET['page'], $whitelist)) {
			require $page;
		}	else {
			part("404");
		}
	} }
	part("footer");
?>

