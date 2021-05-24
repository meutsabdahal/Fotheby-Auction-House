<?php
    include 'adminNavigation.php';
?>
<div class="adminSection text-center">
    <h1 class="mt-1 font-italic">Manage Category</h1>

    <form action="" method="post" class="mt-3">
        <input type="hidden" name="category[categoryId]" value="<?php if(isset($category['categoryId'])) echo $category['categoryId'];?>" >

        <label>Category Name</label><br>
        <input type="text" name="category[label]" value="<?php if(isset($category['label'])) echo $category['label'];?>" required><br>

        <input type="submit" name ="submit" value="Save" class="submit mt-3">
    </form>
</div>
