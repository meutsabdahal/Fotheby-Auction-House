<?php
	session_start();
	if (isset($_SESSION['sessAdminId'])) {
		$products = $product->find('status', 1);

		if(isset($_GET['pId'])){
			$products = $product->delete('lotNumber',$_GET['pId']);
			header('Location:product'); 
		}
		$title = "Product";

		$content = loadTemplate('templates/adminProduct.php',['products' => $products]);
	}
	else
		include 'adminLogIn.php';
?>