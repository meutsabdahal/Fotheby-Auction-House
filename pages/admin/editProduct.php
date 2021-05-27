<?php
	$categories = $category->findAll();
    $products = $product->find('lotNumber',$_GET['pId']); 
    $products = $products->fetch();
	if (isset($_POST['submit'])) {
		unset($_POST['submit']);
        $product->update($_POST, 'lotNumber');
        header("Location:product");
	}

	$title = "DashBoard";

	$content = loadTemplate('templates/editProduct.php',['categories' => $categories, 'products' => $products]);
?>