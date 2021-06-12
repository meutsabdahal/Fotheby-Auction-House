<?php
	session_start();
	if (isset($_SESSION['sessClientId'])) {

		// calling function to find product with lotnumeber of pId
		$bidProduct = $product->find('lotNumber', $_REQUEST['pId']);

		// calling function to find bid with lotnumeber of pId
		$bid = $productBid->find('lotNumber', $_REQUEST['pId']);
		
		// calling function to find product with lotnumeber of pId and fetching data
		$auction = $product->find('lotNumber', $_GET['pId']);
		$auction = $auction->fetch();

		// calling function to find bid with lotnumeber of pId with decending order of bidAmount
		$bidding = $productBid->findOrderBy('lotNumber', $_GET['pId'], 'bidAmount');
		$bidding = $bidding->fetch();

		// calling function to find all categories
		$categories = $category->findAll();

		// calling function to join three tables with conditions
		$bids = $client->joinThreeTableCondition('bid', 'clientId', 'clientId', 'product', 'lotNumber', 'lotNumber', 'lotNumber', $_GET['pId']);		$products = $product->find('lotNumber', $_GET['pId']);

		if (isset($_POST['bid'])) {
			unset($_POST['bid']);

			while ($r = $products->fetch()) {
				$bt = $r["biddingDate"];
			}

			// comparing the entered value and inserting entered bidamount
			if ($bt > 0) {
				if ($_POST['bidAmount'] > $bidding['bidAmount'] && $_POST['bidAmount'] > $auction['estimatedPrice']) {
					$productBid->insert($_POST);
					header("Refresh:0");
				}
				// alert messages when buyer enter lower amount
				else
					?>
					<script>
						alert("Please Enter Higher Amount");
					</script>
					<?php
			}

		}
		// title of page
		$title = "Fothey's Auction House";
		// calling function to show contents on the page
		$content = loadTemplate('templates/bid.php',['products' => $products, 'categories' => $categories, 'bidProduct' => $bidProduct, 'bids' => $bids]);
	}
	else
		include 'signIn.php';
?>