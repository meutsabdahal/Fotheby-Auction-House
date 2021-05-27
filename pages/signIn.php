<?php
	
	$categories = $category->findAll();

	$title = "Fothey's Auction House";

	$content = loadTemplate('templates/clientSignIn.php',['categories' => $categories]);
?>