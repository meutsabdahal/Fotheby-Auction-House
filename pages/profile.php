<?php
	session_start();
	$categories = $category->findAll();
	$products = $product->findAll();

	if(isset($_GET['pId'])){
		$products = $product->delete('lotNumber',$_GET['pId']);
		header('Location:profile'); 
	}


	$title = "Fothey's Auction House";

	$content = loadTemplate('templates/profile.php',['categories' => $categories, 'products' => $products]);
?>