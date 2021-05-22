<?php

	$products = $product->find('pid', $_GET['pId']);
	$categories = $category->findAll();

	$title = "Fothey's Auction House";

	$content = loadTemplate('templates/bid.php',['products' => $products, 'categories' => $categories]);
?>