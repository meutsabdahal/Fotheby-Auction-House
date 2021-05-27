<?php

	$products = $product->findAll();

	if(isset($_GET['pId'])){
		$products = $product->delete('lotNumber',$_GET['pId']);
		header('Location:product'); 
	}
	$title = "Product";

	$content = loadTemplate('templates/adminProduct.php',['products' => $products]);
?>