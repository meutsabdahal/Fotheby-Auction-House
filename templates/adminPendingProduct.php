<?php
    include 'adminNavigation.php';
?>
<div class="adminSection text-center">

  <h1 class="text-center mt-1 font-italic">Pending Products</h1>

  <table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">Lot Number</th>
        <th scope="col">Product Name</th>
        <th scope="col">Estimated Price</th>
        <th scope="col">Bidding Time</th>
        <th scope="col">Artist</th>
        <th scope="col">Handle</th>
      </tr>
    </thead>
    <tbody>

        <?php
          foreach ($products as $product) {
        ?>
            <tr>
              <td><?php echo $product['lotNumber'];?></td>
              <td><?php echo $product['productName'];?></td>
              <td><?php echo $product['estimatedPrice'];?></td>
              <td><?php echo $product['biddingDate'];?></td>
              <td><?php echo $product['artist'];?></td>
              <td><a href="pendingProduct?ppId=<?php echo $product['lotNumber']?>"><button>Add</button></a>
              <a href="pendingProduct?pId=<?php echo $product['lotNumber']?>"><button>DELETE</button></a>
              </td>
              </td>
            </tr>
        <?php
          }
        ?>

      

    </tbody>
  </table>
</div>
