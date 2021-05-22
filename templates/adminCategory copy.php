<?php
    include 'adminNavigation.php';
?>
<h1 class="text-center mt-1 font-italic">Categories</h1>
<table class="table table-striped table-dark">
  <thead>
    <tr>
    <th scope="col">Category Name</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>

      <?php
        foreach ($categories as $category) {
      ?>
          <tr>
            <td><?php echo $category['label'];?></td>
            <td><button>DELETE</button>
            <button>EDIT</button></td>
            </td>
          </tr>
      <?php
        }
      ?>

    

  </tbody>
</table>
