<?php

	$products = $product->find('pid', $_GET['pId']);
	

	$title = "Fothey's Auction House";

	$content = loadTemplate('templates/bid.php',['products' => $products]);
?>