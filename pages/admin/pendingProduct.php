<?php

	$products = $product->find('status', 0);

	if (isset($_GET['ppId'])) {
		$products = $product->updateStatus('status', 'lotNumber', $_GET['ppId']);
		header('Location:pendingProduct'); 
	}

	if(isset($_GET['pId'])){
		$products = $product->delete('lotNumber',$_GET['pId']);
		header('Location:pendingProduct'); 
	}
	$title = "Product";

	$content = loadTemplate('templates/adminPendingProduct.php',['products' => $products]);
?>