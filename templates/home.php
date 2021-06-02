<?php
    
    if (isset($_SESSION['sessClientId'])) {
        include 'loggedInNavigation.php';
    }
 
    else
        include 'navigation.php';
?>


<section class="home">
    <hr />
    <h1 class="text-center mt-1 font-italic">Products</h1>
    <hr />
    <div class=" mt-2 ml-5">
        <?php
            foreach ($products as $product) {
            ?>
                <div class="product-listing mt-3">
                    <img src="image/<?php echo $product['productImage']; ?>" class="product-view-img ml-3 list-product-img">
                    <b class="ml-2"><?php echo $product['productName']; ?></b> 
                    <div class="float-right mr-5 mt-4">
                        <a class="btn btn-primary" style="margin-left: 60%;" href="product?pId=<?php echo $product['lotNumber']; ?>">View Product</a>
                    </div>
                </div> 
                <hr />  
            <?php
            }
        ?>    
                
        
    </div>
</section>


