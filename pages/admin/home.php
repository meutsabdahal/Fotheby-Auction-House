<?php
	// starting session and checking admin login
	session_start();
	if (isset($_SESSION['sessAdminId'])) {
		// calling function to count number of rows in category table
		$categories = $category->countRow();
		$categories = $categories->fetch();
		
		// calling function to count number of rows in clinet table
		$clients = $client->countRow();
		$clients = $clients->fetch();
		
		// calling function to count number of rows in product table whose status is 1
		$products = $product->countRowCondition('status', 1);
		$products = $products->fetch();
		
		// calling function to count number of rows in product table whose status is 0
		$pendingProducts = $product->countRowCondition('status', 0);
		$pendingProducts = $pendingProducts->fetch();
		
		// title of page
		$title = "DashBoard";
		// calling function to show contents on the page
		$content = loadTemplate('templates/adminHome.php',['categories' => $categories, 'clients' => $clients, 'products' => $products,
															'pendingProducts' => $pendingProducts]);
	}
	// when admin is not logged in displaying admin login page
	else
		include 'adminLogIn.php';
?>