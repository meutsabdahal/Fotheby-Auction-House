<?php
	session_start();
	if (isset($_SESSION['sessAdminId'])) {
		$categories = $category->findAll();

		if(isset($_GET['cId'])){
			$categories = $category->delete('categoryId',$_GET['cId']);
			header('Location:category'); 
		}

		$title = "Category";

		$content = loadTemplate('templates/adminCategory.php',['categories' => $categories]);
	}

	else
		include 'adminLogIn.php';
?>