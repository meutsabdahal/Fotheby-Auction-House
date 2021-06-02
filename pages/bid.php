<?php
	session_start();
	$products = $product->find('lotNumber', $_GET['pId']);

	$bidProduct = $product->find('lotNumber', $_REQUEST['pId']);

	$bid = $productBid->find('lotNumber', $_REQUEST['pId']);
	
	$hoho = $product->find('lotNumber', $_GET['pId']);
	$hoho = $hoho->fetch();

	$hehe = $productBid->findOrderBy('lotNumber', $_GET['pId'], 'bidAmount');
	$hehe = $hehe->fetch();

	$categories = $category->findAll();

	$bids = $client->joinThreeTableCondition('bid', 'clientId', 'clientId', 'product', 'lotNumber', 'lotNumber', 'lotNumber', $_GET['pId']);

	if (isset($_POST['bid'])) {
		unset($_POST['bid']);

		while ($r = $products->fetch()) {
			$bt = $r["biddingDate"];
		}

		if ($bt > 0) {
			if ($_POST['bidAmount'] > $hehe['bidAmount'] && $_POST['bidAmount'] > $hoho['estimatedPrice']) {
				$productBid->insert($_POST);
				header("Refresh:0");
				// print_r($_POST);
			}
			else
				echo "Must me higher";
		}

	}

	$title = "Fothey's Auction House";

	$content = loadTemplate('templates/bid.php',['products' => $products, 'categories' => $categories, 'bidProduct' => $bidProduct, 'bids' => $bids]);
?>