<?php
	$categories = $category->findAll();
	if (isset($_POST['submit'])) {
		unset($_POST['submit']);
        $productImage = rand(1,10000).'-'.$_FILES['productImage']['name'];
        $tempPicture = $_FILES['productImage']['tmp_name'];
        move_uploaded_file($tempPicture, 'image/'.$productImage);
        $_POST['productImage'] = $productImage;
        $product->insert($_POST);
        // header('Location:vendorHome');
		print_r($_POST);
	}




	$title = "DashBoard";

	$content = loadTemplate('templates/manageProduct.php',['categories' => $categories, 'product' => $product]);
?>