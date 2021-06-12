<?php
	session_start();
	// calling function to find all the data from product table whose status is 1
	$products = $product->find('status', 1);
	// calling function to find all data from catgeory table
	$categories = $category->findAll();

	// title of page
	$title = "Fothey's Auction House";
	// calling function to show contents on the page
	$content = loadTemplate('templates/home.php',['products' => $products, 'categories' => $categories]);
?>