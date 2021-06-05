<?php
	session_start();
	$products = $product->find('status', 1);
	$categories = $category->findAll();

	$title = "Fothey's Auction House";

	$content = loadTemplate('templates/home.php',['products' => $products, 'categories' => $categories]);
?>