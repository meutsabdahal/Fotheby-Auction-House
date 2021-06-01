<?php
	session_start();
	$products = $product->find('pid', $_GET['pId']);

	$bidProduct = $product->find('pid', $_REQUEST['pId']);

	$categories = $category->findAll();

	$title = "Fothey's Auction House";

	$content = loadTemplate('templates/bid.php',['products' => $products, 'categories' => $categories, 'bidProduct' => $bidProduct]);
?>