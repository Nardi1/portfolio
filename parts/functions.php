<?php  

function part($filesname) {
	$chemin = 'parts/include/'.$filesname.'.php';
	if (file_exists($chemin)) {
		require $chemin;
	} else {
		require 'page/404.php';
			}
	}


	function menu() {
		$config = require __DIR__ .'/config.php';
		$pages = $config['menu'];
		foreach ($pages as $files => $title) {
			echo '<li class="nav-item"> <a class="nav-link" href="index.php?page=' . $files . '"> '. $title .'</a></li>';
		}; 
	};

?>

