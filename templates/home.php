<?php
    include 'navigation.php';
?>
<section>
    <div id="carouselExampleIndicators" class="carousel slide mt-2 " data-ride="carousel">
        <ol class="carousel-indicators ">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>

        </ol>
        <center>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="img/guitar.jpg" alt="">
            </div>

            <div class="carousel-item">
                <img class="d-block w-100" src="img/bikesss.jpg" alt="">
            </div>


            <div class="carousel-item">
                <img class="d-block w-100" src="img/carsss.jpg" alt="">
            </div>
            </div>
        
        </div>
         <!-- controls for slideshows -->
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="" aria-hidden="true"><img role="img" src="svg/previous.svg"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="" aria-hidden="true"><img role="img" src="svg/next.svg"></span>
            <span class="sr-only">Next</span>
        </a>
        </center>
    </div>
    <hr />
    <div class=" mt-2 ml-5">
        <?php
            foreach ($products as $product) {
            ?>
                <div class="product-listing mt-3">
                    <img src="productimages/<?php echo $product['image']; ?>" class="product-view-img ml-3 list-product-img">
                    <b class="ml-2"><?php echo $product['title']; ?></b> 
                    <div class="float-right mr-5 mt-4">
                        <a class="btn btn-primary" style="margin-left: 60%;" href="product?pId=<?php echo $product['pid']; ?>">View Product</a>
                    </div>
                </div>   
            <?php
            }
        ?>        
        
    </div>
</section>