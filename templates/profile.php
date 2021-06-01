<?php
    
    if (isset($_SESSION['sessClientId'])) {
        include 'loggedInNavigation.php';
    }
 
    else
        include 'navigation.php';
?>

<section>
<h1 class="text-center mt-1 font-italic">My Products</h1>
<a href="manageProduct"><button class="ml-5 btn btn-success">Add Product</button></a>
<center>

<table class="table table-striped text-center">
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
              <td><a href="profile?pId=<?php echo $product['lotNumber']?>"><button class="btn btn-danger">DELETE</button></a>
              <a href="editProduct?pId=<?php echo $product['lotNumber']?>"><button class="btn btn-primary">EDIT</button></a>
              </td>
            </tr>
        <?php
          }
        ?>

    
    </tbody>
  </table>
  </center>
</section>