<?php
    // function to get base url for the project
    function baseURL($url){
		return $_SERVER['DOCUMENT_ROOT'].'/Fotheby-Auction-House/'.$url;
	}

    require baseURL('db/dbConnect.php');
	require baseURL('classes/classes.php');

    // creating class objects
    $category = new DatabaseTable('category');
    $product = new DatabaseTable('product');
    $client = new DatabaseTable('client');
    $admin = new DatabaseTable('admin');
    $productBid = new DatabaseTable('bid');

?>