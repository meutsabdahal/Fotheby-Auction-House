<?php
    include 'adminNavigation.php';
?>
<h1 class="text-center mt-1 font-italic">Admins</h1>
<a href="addAdmin"><button>Add New Admin</button></a>
<table class="table table-striped table-dark">
  <thead>
    <tr>
    <table class="table table-striped">
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
        foreach ($admins as $admin) {
      ?>
          <tr>
            <td><?php echo $admin['firstName'];?></td>
            <td><?php echo $admin['lastName'];?></td>
            <td><?php echo $admin['email'];?></td>
            <td><?php echo $admin['phone'];?></td>
            <td><a href="admin?aId=<?php echo $admin['adminId'];?>"><button>DELETE</button></a></td>
            </td>
          </tr>
      <?php
        }
      ?>

  </tbody>
</table>
