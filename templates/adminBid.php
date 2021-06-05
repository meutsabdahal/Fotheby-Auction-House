<?php
    include 'adminNavigation.php';
?>
<h1 class="text-center mt-1 font-italic">Bidding Details</h1>

<table class="table table-striped table-dark">
  <thead>
    <tr>
    <table class="table table-striped">
  <thead>
    <tr>
    <th scope="col">Lot Number</th>
    <th scope="col">Client Name</th>
    <th scope="col">Email</th>
    <th scope="col">Bid Amount</th>
    <th scope="col">Mobile</th>

    </tr>
  </thead>
  <tbody>

      <?php
        foreach ($bids as $bid) {
      ?>
          <tr>
            <td><?php echo $bid['lotNumber'];?></td>
            <td><?php echo $bid['firstName'].' '.$bid['lastName'];?></td>
            <td><?php echo $bid['email'];?></td>
            <td><?php echo $bid['bidAmount'];?></td>
            <td><?php echo $bid['phone'];?></td>
            
          </tr>
      <?php
        }
      ?>

  </tbody>
</table>
