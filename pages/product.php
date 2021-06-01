<?php

session_start();
	$products = $product->find('lotNumber', $_GET['pId']);
	
    $categories = $category->findAll();
	$title = "Fothey's Auction House";


	$content = loadTemplate('templates/product.php',['products' => $products, 'categories' => $categories]);
?>