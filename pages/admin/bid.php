<?php
	// starting session and checking admin login
	session_start();
	if (isset($_SESSION['sessAdminId'])) {
		// calling function to join three table and getting all data from those tables
		$bids = $productBid->joinTable('client', 'clientId', 'clientId');

		// title of the page
		$title = "Bid";
		// calling function to show contents on the page
		$content = loadTemplate('templates/adminBid.php',['bids' => $bids]);
	}
	// when admin is not logged in displaying admin login page
	else
		include 'adminLogIn.php';
?>