<?php
    
    if (isset($_SESSION['sessClientId'])) {
        include 'loggedInNavigation.php';
    }
 
    else
        include 'navigation.php';
?>


<div class="adminSection text-center">
    <h1 class="mt-1 font-italic">Manage Product</h1>

    <form action="" method="post" enctype="multipart/form-data" class="mt-3">
        <input type="hidden" name="lotNumber">

        <label for="">Product Name</label><br>
        <input type="text" name="productName"><br>

        <label for="">Description</label><br>
        <textarea  name="description" value="" >

        </textarea><br>

        <label for="">Choose Category</label><br>
        <select name="categoryId">
            <option>-- Select a Category --</option>
            <?php
                foreach ($categories as $category) {
            ?>
                    <option value=""><?php echo $category['label']; ?></option>
            <?php
                }
            ?>      
        </select><br>

        <label for="">Estimated Price</label><br>
        <input type="number" name="estimatedPrice"><br>

        <label for="">Artist Name</label><br>
        <input type="text" name="artist"><br>

        <label for="">Bidding Date and Time</label><br>
        <input type="datetime-local" name="biddingDate"><br>

        <label for="">Product Image</label><br>
        <input type="file" name="productImage"><br><br>

        <input type="hidden" name="addedBy" value="<?php echo $_SESSION['sessClientId']; ?>">

        <input type="hidden" name="status">

        <input type="submit" name="submit" value="Save">

        
    </form>
</div>
