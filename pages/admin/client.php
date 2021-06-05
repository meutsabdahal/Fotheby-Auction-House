<?php
	session_start();
	if (isset($_SESSION['sessAdminId'])) {
		$clients = $client->findAll();

		$title = "Category";

		$content = loadTemplate('templates/adminCustomer.php',['clients' => $clients]);
	}
	else
		include 'adminLogIn.php';
?>