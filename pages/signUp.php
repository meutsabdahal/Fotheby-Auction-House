<?php
	// calling function to find all the data from category table
	$categories = $category->findAll();

    if (isset($_POST['submit'])) {
		// hashing the password and inserting data to clinet table
        $password = $_POST['client']['password'];
		$pass = password_hash($password,PASSWORD_DEFAULT);
		$_POST['client']['password'] = $pass;
		$client->save($_POST['client'],'clientId');
		$client = $_POST['client'];
        header('Location:signIn');   
    }

	// title of page
	$title = "Fothey's Auction House";
	// calling function to show contents on the page
	$content = loadTemplate('templates/signUp.php',['categories' => $categories]);
?>