<?php
	session_start();
	if (isset($_SESSION['sessAdminId'])) {
		$categories = $category->countRow();
		$categories = $categories->fetch();

		$clients = $client->countRow();
		$clients = $clients->fetch();
		
		$products = $product->countRowCondition('status', 1);
		$products = $products->fetch();
		
		$pendingProducts = $product->countRowCondition('status', 0);
		$pendingProducts = $pendingProducts->fetch();
		

		$title = "DashBoard";

		$content = loadTemplate('templates/adminHome.php',['categories' => $categories, 'clients' => $clients, 'products' => $products,
															'pendingProducts' => $pendingProducts]);
	}
	else
		include 'adminLogIn.php';
?>