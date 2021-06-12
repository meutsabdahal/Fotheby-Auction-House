<?php
	session_start();
	// checking client's login
	if (isset($_SESSION['sessClientId'])) {
		// calling function to find all data from category table
		$categories = $category->findAll();
		// calling function to find all the data from product table
		$products = $product->findAll();

		if(isset($_GET['pId'])){
			// calling function to delete the selected row
			$products = $product->delete('lotNumber',$_GET['pId']);
			header('Location:profile'); 
		}

		// title of page
		$title = "Fothey's Auction House";
		// calling function to show contents on the page
		$content = loadTemplate('templates/profile.php',['categories' => $categories, 'products' => $products]);
	}
	// displaying client signin page if client is not logged in
	else
		include 'signIn.php';
?>