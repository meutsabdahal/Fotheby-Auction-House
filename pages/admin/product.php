<?php
	// starting session and checking admin login
	session_start();
	if (isset($_SESSION['sessAdminId'])) {
		// calling function to find all the data from product table whose status is 1
		$products = $product->find('status', 1);

		if(isset($_GET['pId'])){
			// calling function to delete the selected row
			$products = $product->delete('lotNumber',$_GET['pId']);
			header('Location:product'); 
		}
		// title of page
		$title = "Product";
		// calling function to show contents on the page
		$content = loadTemplate('templates/adminProduct.php',['products' => $products]);
	}
	// when admin is not logged in displaying admin login page
	else
		include 'adminLogIn.php';
?>