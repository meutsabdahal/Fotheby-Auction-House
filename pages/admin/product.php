<?php

	$products = $product->find('status', 1);

	if(isset($_GET['pId'])){
		$products = $product->delete('lotNumber',$_GET['pId']);
		header('Location:product'); 
	}
	$title = "Product";

	$content = loadTemplate('templates/adminProduct.php',['products' => $products]);
?>