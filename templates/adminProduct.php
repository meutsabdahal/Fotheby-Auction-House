<?php
    include 'adminNavigation.php';
?>
<div class="adminSection text-center">

  <h1 class="text-center mt-1 font-italic">Products</h1>
  <table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">Name</th>
        <th scope="col">Price</th>
        <th scope="col">Bidding Time</th>
        <th scope="col">Seller Name</th>
        <th scope="col">Email</th>
        <th scope="col">Handle</th>
      </tr>
    </thead>
    <tbody>

        <?php
          foreach ($products as $product) {
        ?>
            <tr>
              <td><?php echo $product['title'];?></td>
              <td><?php echo $product['price'];?></td>
              <td><?php echo $product['btime'];?></td>
              <td><?php echo $product['name'];?></td>
              <td><?php echo $product['email'];?></td>
              <td><button>DELETE</button>
              <button>EDIT</button></td>
              </td>
            </tr>
        <?php
          }
        ?>

      

    </tbody>
  </table>
</div>
