<?php
    include 'adminNavigation.php';
?>
<section>
    <h1 class="mt-1 font-italic text-center">Dashboard</h1>
    <div class="container-product">
    <div class="row">
        <a href="category">
        <div class="col-sm text-center mt-3 ml-5">
            <div class="dashboard-container mt-5">
                <h4>Category</h4><br>
                <?php echo $categories[0]; ?>  
            </div>    
        </div>
        </a>

        <a href="client">
        <div class="col-sm text-center mt-3 ml-5">
            <div class="dashboard-container mt-5">
                <h4>Clients</h4><br>
                <?php echo $clients[0]; ?>  
            </div>    
        </div>
        </a>

        <a href="product">
        <div class="col-sm text-center mt-3 ml-5">
            <div class="dashboard-container mt-5">
                <h4>Products</h4><br>
                <?php echo $products[0]; ?>  
            </div>    
        </div>
        </a>

        <a href="pendingProduct">
        <div class="col-sm text-center mt-3 ml-5">
            <div class="dashboard-container mt-5">
                <h4>Pending Products</h4><br>
                <?php echo $pendingProducts[0]; ?>  
            </div>    
        </div>
        </a>


        </div>
    </div>

</section>