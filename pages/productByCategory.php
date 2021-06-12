<?php
    session_start();
    // calling function to find all data from category table
    $categories = $category->findAll();
    // calling function to find all data from category table whose categoryId is cId 
    $categoryName = $category->find('categoryId', $_GET['cId']);
    $categoryName = $categoryName->fetch();
    // calling function to find all data from product table whose categoryId is cId
    $products = $product->find('categoryId', $_GET['cId']);

    // title of page
    $title = "Fothey's Auction House";
    // calling function to show contents on the page
    $content = loadTemplate('templates/productByCategory.php',['categories' => $categories, 'products' => $products, 'categoryName' => $categoryName]);

?>



