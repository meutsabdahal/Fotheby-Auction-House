<?php
    session_start();
    $categories = $category->findAll();

    $categoryName = $category->find('categoryId', $_GET['cId']);
    $categoryName = $categoryName->fetch();

    $products = $product->find('categoryId', $_GET['cId']);

    $title = "Fothey's Auction House";

    $content = loadTemplate('templates/productByCategory.php',['categories' => $categories, 'products' => $products, 'categoryName' => $categoryName]);

?>



