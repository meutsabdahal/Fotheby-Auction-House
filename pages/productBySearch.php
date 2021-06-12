<?php
    session_start();
    // calling function to find all data from category table
    $categories = $category->findAll();

    if (isset($_POST['search'])) {
        $products = $product->findBySearch('productName','%'.$_POST['search'].'%');
    }

    // title of page
    $title = "Fothey's Auction House";
    // calling function to show contents on the page
    $content = loadTemplate('templates/productBySearch.php',['categories' => $categories, 'products' => $products]);

?>



