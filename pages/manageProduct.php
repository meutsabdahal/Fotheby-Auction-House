<?php
	session_start();

	if (isset($_POST['submit'])) {
		unset($_POST['submit']);

        $productImage = rand(1,10000).'-'.$_FILES['productImage']['name'];
        $tempPicture = $_FILES['productImage']['tmp_name'];
        move_uploaded_file($tempPicture, 'image/'.$productImage);
        $_POST['productImage'] = $productImage;
        $product->insert($_POST);
        header('Location:profile');
		
	}
	$categories = $category->findAll();
	$title = "Manage Product";

	$content = loadTemplate('templates/manageProduct.php',['categories' => $categories]);
?>