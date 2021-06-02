<?php
    
    if (isset($_SESSION['sessClientId'])) {
        include 'loggedInNavigation.php';
    }
 
    else
        include 'navigation.php';
?>

<section>
    <hr/>
    <?php
        foreach ($products as $product) {
    ?>
            <div class="description">
                <div class="mt-3 ml-3 float-left">
                    <img src="image/<?php echo $product['productImage'];?>" class="">
                </div>

                <div class="text-center product-desc">
                    <h1><?php echo $product['productName'];?></h1><br>
                    <b style="font-size: 20px;">Starting Price: </b><?php echo $product['estimatedPrice'];?><br>
                    <!-- <b style="font-size: 20px;">Current Price: </b>600<br> -->
                    <b style="font-size: 20px;">Description: </b><?php echo $product['description'];?><br>
                    <b style="font-size: 20px;">Artist: </b><?php echo $product['artist'];?><br>
                    <b style="font-size: 20px;">Seller: </b><?php echo $product['sellerName'];?><br>
                    <b style="font-size: 20px;">Phone: </b><?php echo $product['phone'];?><br> 
                    <b style="font-size: 20px;">Email: </b><?php echo $product['email'];?><br>
                    <a href="bid?pId=<?php echo $product['lotNumber']; ?>"><button type="button" class="btn btn-success mt-4">Start Bidding!</button></a>
                </div>
            </div>
    <?php
        }
    ?>

</section>