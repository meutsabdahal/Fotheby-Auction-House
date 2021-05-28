<?php
    include 'adminNavigation.php';
?>
<h1 class="text-center mt-1 font-italic">Customers</h1>
<table class="table table-striped table-dark">
  <thead>
    <tr>
    <table class="table table-striped table-dark">
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
