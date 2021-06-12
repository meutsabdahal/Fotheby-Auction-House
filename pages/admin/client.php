<?php
	// starting session and checking admin login
	session_start();
	if (isset($_SESSION['sessAdminId'])) {
		// calling function to find all the data from clinet table
		$clients = $client->findAll();

		// title of the page
		$title = "Client";

		// calling function to show contents on the page
		$content = loadTemplate('templates/adminCustomer.php',['clients' => $clients]);
	}
	// when admin is not logged in displaying admin login page
	else
		include 'adminLogIn.php';
?>