<?php
	session_start();

	$categories = $category->findAll();
    $products = $product->find('lotNumber',$_GET['pId']); 
    $products = $products->fetch();
	
	if (isset($_POST['submit'])) {
		unset($_POST['submit']);
		print_r($_POST);
        $product->update($_POST, 'lotNumber');
        // header("Location:profile");
	}

	$title = "DashBoard";

	$content = loadTemplate('templates/editProduct.php',['categories' => $categories, 'products' => $products]);
?>