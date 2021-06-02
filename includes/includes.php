<?php
    // function to get base url for the project
    function baseURL($url){
		return $_SERVER['DOCUMENT_ROOT'].'/Fotheby-Auction-House/'.$url;
	}

    require baseURL('db/dbConnect.php');
	require baseURL('classes/classes.php');


    $category = new DatabaseTable('category');
    // $products = new DatabaseTable('products');
    $product = new DatabaseTable('product');
    $client = new DatabaseTable('client');
    $productBid = new DatabaseTable('bid');

?>