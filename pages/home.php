<?php
	
	$products = $product->findAll();
	$categories = $category->findAll();

	$title = "Fothey's Auction House";

	$content = loadTemplate('templates/home.php',['products' => $products, 'categories' => $categories]);
?>