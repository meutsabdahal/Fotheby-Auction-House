<?php
    include 'adminNavigation.php';
?>
<h1 class="text-center mt-1 font-italic">Clients</h1>
<!-- table to show details of clients -->
<table class="table table-striped table-dark">
  <thead>
    <tr>
    <table class="table table-striped">
    <!-- title of table column -->
  <thead>
    <tr>
    <th scope="col">First Name</th>
    <th scope="col">Last Name</th>
    <th scope="col">Email</th>
    <th scope="col">Mobile</th>
    <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
  <!-- displaying rows of table -->
      <?php
        foreach ($clients as $client) {
      ?>
          <tr>
            <td><?php echo $client['firstName'];?></td>
            <td><?php echo $client['lastName'];?></td>
            <td><?php echo $client['email'];?></td>
            <td><?php echo $client['phone'];?></td>
            <td><button>DELETE</button></td>
            </td>
          </tr>
      <?php
        }
      ?>

    

  </tbody>
</table>
