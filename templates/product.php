<section>
    <hr/>
    <?php
        foreach ($products as $product) {
    ?>
            <div class="description">
                <div class="mt-3 ml-3 float-left">
                    <img src="productimages/<?php echo $product['image'];?>" class="">
                </div>

                <div class="text-center product-desc">
                    <h1><?php echo $product['title'];?></h1><br>
                    <b style="font-size: 20px;">Starting Price: </b><?php echo $product['price'];?><br><br>
                    <!-- <b style="font-size: 20px;">Current Price: </b>600<br> -->
                    <b style="font-size: 20px;">Description: </b><?php echo $product['descri'];?><br>
                    <b style="font-size: 20px;">Owner: </b><?php echo $product['name'];?><br>
                    <b style="font-size: 20px;">Contect No.: </b><?php echo $product['mob'];?><br>
                    <b style="font-size: 20px;">Email: </b><?php echo $product['email'];?><br>
                    <a href="bid?pId=<?php echo $product['pid']; ?>"><button type="button" class="btn btn-success mt-4">Start Bidding!</button></a>
                </div>
            </div>
    <?php
        }
    ?>

</section>