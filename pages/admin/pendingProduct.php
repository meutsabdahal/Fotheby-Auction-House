<?php
	// starting session and checking admin login
	session_start();
	if (isset($_SESSION['sessAdminId'])) {
		// calling function to find all the data from product table whose status is 0
		$products = $product->find('status', 0);

		// calling function to update status value when approve is clicked
		if (isset($_GET['ppId'])) {
			$products = $product->updateStatus('status', 'lotNumber', $_GET['ppId']);
			header('Location:pendingProduct'); 
		}
		

		if(isset($_GET['pId'])){
			// calling function to delete the selected row
			$products = $product->delete('lotNumber',$_GET['pId']);
			header('Location:pendingProduct'); 
		}
		$title = "Product";

		$content = loadTemplate('templates/adminPendingProduct.php',['products' => $products]);
	}
	// when admin is not logged in displaying admin login page
	else
		include 'adminLogIn.php';
?>