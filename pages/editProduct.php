<?php
	session_start();
	// calling function to find all the data from category table
	$categories = $category->findAll();
	$dropDownCategory = $category->findAll();
	// calling function to find all th data from product table whose lotNumber is pId
    $products = $product->find('lotNumber',$_GET['pId']); 
    $products = $products->fetch();
	
	if (isset($_POST['submit'])) {
		unset($_POST['submit']);
		// calling function to edit the selected row
        $product->update($_POST, 'lotNumber');
        header("Location:profile");
	}
	// title of page
	$title = "Edit Product";
	// calling function to show contents on the page
	$content = loadTemplate('templates/editProduct.php',['categories' => $categories, 'products' => $products, 'dropDownCategory' => $dropDownCategory]);
?>