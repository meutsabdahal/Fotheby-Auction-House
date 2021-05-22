<?php

	$products = $product->findAll();
	$title = "Product";

	$content = loadTemplate('templates/adminProduct.php',['products' => $products]);
?>