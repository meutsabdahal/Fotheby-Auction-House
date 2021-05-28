<?php
	
	$categories = $category->findAll();

    if (isset($_POST['submit'])) {
        $password = $_POST['client']['password'];
		$pass = password_hash($password,PASSWORD_DEFAULT);
		$_POST['client']['password'] = $pass;
		$client->save($_POST['client'],'clientId');
		$client = $_POST['client'];
        header('Location:signIn');   
    }

	$title = "Fothey's Auction House";

	$content = loadTemplate('templates/signUp.php',['categories' => $categories]);
?>