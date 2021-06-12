<?php
    include 'adminNavigation.php';
?>
<h1 class="text-center mt-1 font-italic">Categories</h1>
<a href="manageCategory"><button>Add New Category</button></a>
<!-- table to show details of categorty table -->
<table class="table table-striped">
  <thead>
  <!-- title of the column -->
    <tr>
    <th scope="col">Category Name</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <!-- displaying rows of the table -->
  <tbody>

      <?php
        foreach ($categories as $category) {
      ?>
          <tr>
            <td><?php echo $category['label'];?></td>
            <td><a href="manageCategory?cId=<?php echo $category['categoryId']?>"><button>EDIT</button></a>
                <a href="category?cId=<?php echo $category['categoryId']?>"><button>DELETE</button></a>
            </td>
          </tr>
      <?php
        }
      ?>

    

  </tbody>
</table>
