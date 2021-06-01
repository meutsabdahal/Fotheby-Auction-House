<?php
	session_start();
	$products = $product->find('lotNumber', $_GET['pId']);

	$bidProduct = $product->find('lotNumber', $_REQUEST['pId']);

	$categories = $category->findAll();

	$title = "Fothey's Auction House";

	$content = loadTemplate('templates/bid.php',['products' => $products, 'categories' => $categories, 'bidProduct' => $bidProduct]);
?>