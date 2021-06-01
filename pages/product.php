<?php

session_start();
	$products = $product->find('pid', $_GET['pId']);
	
    $categories = $category->findAll();
	$title = "Fothey's Auction House";


	$content = loadTemplate('templates/product.php',['products' => $products, 'categories' => $categories]);
?>