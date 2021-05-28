<?php
	$clients = $client->findAll();

	$title = "Category";

	$content = loadTemplate('templates/adminCustomer.php',['clients' => $clients]);
?>