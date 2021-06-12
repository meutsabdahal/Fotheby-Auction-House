<?php

session_start();
	// calling function to find all the details from product table whose lotNumber is pId 
	$products = $product->find('lotNumber', $_GET['pId']);
	// calling function to find all the data from category table
    $categories = $category->findAll();

	// title of page
	$title = "Fothey's Auction House";

	// calling function to show contents on the page
	$content = loadTemplate('templates/product.php',['products' => $products, 'categories' => $categories]);
?>