<?php
	
	$products = $product->findAll();

	$title = "Fothey's Auction House";

	$content = loadTemplate('templates/home.php',['products' => $products]);
?>