<?php
    
    if (isset($_SESSION['sessClientId'])) {
        include 'loggedInNavigation.php';
    }
 
    else
        include 'navigation.php';
?>


<div class="adminSection text-center">
    <h1 class="mt-1 font-italic">Manage Product</h1>
    <!-- product edit form -->
    <form action="" method="post" enctype="multipart/form-data" class="mt-3">
        <input type="hidden" name="lotNumber" value="<?php echo $products['lotNumber'];?>">

        <label for="">Product Name</label><br>
        <input type="text" name="productName" value="<?php echo $products['productName'];?>" required><br>

        <label for="">Description</label><br>
        <textarea  name="description" required>
            <?php echo $products['description'];?>
        </textarea><br>

        <label for="">Choose Category</label><br>
        <select name="categoryId">
            <option>-- Select a Category --</option>
                <?php
                foreach ($dropDownCategory as $category) {
                    ?>
                    <option value="<?php echo $category['categoryId'];?>"><?php echo $category['label'];?> </option>
                    <?php } ?>
        </select><br>

        <label for="">Estimated Price</label><br>
        <input type="number" name="estimatedPrice" value="<?php echo $products['estimatedPrice'];?>" required><br>

        <label for="">Artist Name</label><br>
        <input type="text" name="artist" value="<?php echo $products['artist'];?>" required><br>

        <label for="">Produced Year</label><br>
        <input type="number" name="producedYear" value="<?php echo $products['producedYear'];?>" required><br>

        <label for="">Bidding Date and Time</label><br>
        <input type="datetime-local" name="biddingDate" value="<?php echo $products['biddingDate'];?> " required ><br>

        <h3 class="font-italic">Contact Details</h3>

        <label for="">Name</label><br>
        <input type="text" name="sellerName" value="<?php echo $products['sellerName'];?> " required><br>

        <label for="">Phone Number</label><br>
        <input type="text" name="phone" value="<?php echo $products['phone'];?> " required><br>

        <label for="">Email</label><br>
        <input type="email" name="email" value="<?php echo $products['email'];?> " required><br><br>


        <input type="submit" name="submit" value="Save">

        
    </form>
</div>
