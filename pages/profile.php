<?php
	
	$categories = $category->findAll();

	$title = "Fothey's Auction House";

	$content = loadTemplate('templates/profile.php',['categories' => $categories]);
?>