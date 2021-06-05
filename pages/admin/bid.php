<?php
	session_start();
	if (isset($_SESSION['sessAdminId'])) {
		$bids = $productBid->joinTable('client', 'clientId', 'clientId');


		$title = "Bid";

		$content = loadTemplate('templates/adminBid.php',['bids' => $bids]);
	}

	else
		include 'adminLogIn.php';
?>