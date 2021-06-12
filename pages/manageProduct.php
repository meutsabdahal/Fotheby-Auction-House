<?php
	session_start();

	if (isset($_POST['submit'])) {
		unset($_POST['submit']);
		// inserting file and data to product table by calling function
        $productImage = rand(1,10000).'-'.$_FILES['productImage']['name'];
        $tempPicture = $_FILES['productImage']['tmp_name'];
        move_uploaded_file($tempPicture, 'image/'.$productImage);
        $_POST['productImage'] = $productImage;
        $product->insert($_POST);
        header('Location:profile');
		
	}
	// calling function to find all the data from category table
	$categories = $category->findAll();
	$dropDownCategory = $category->findAll();

	// title of page
	$title = "Manage Product";
	// calling function to show contents on the page
	$content = loadTemplate('templates/manageProduct.php',['categories' => $categories, 'dropDownCategory' => $dropDownCategory]);
?>