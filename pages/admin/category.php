<?php
	// starting session and checking admin login
	session_start();
	if (isset($_SESSION['sessAdminId'])) {
		// calling function to find all the data from categorty table
		$categories = $category->findAll();

		if(isset($_GET['cId'])){
			// calling function to delete selected row 
			$categories = $category->delete('categoryId',$_GET['cId']);
			header('Location:category'); 
		}

		// title of the page
		$title = "Category";
		// calling function to show contents on the page
		$content = loadTemplate('templates/adminCategory.php',['categories' => $categories]);
	}
	// when admin is not logged in displaying admin login page
	else
		include 'adminLogIn.php';
?>