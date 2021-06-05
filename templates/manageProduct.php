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
        <input type="text" name="productName" required><br>

        <label for="">Description</label><br>
        <textarea  name="description" value="" required>

        </textarea><br>

        <label for="">Choose Category</label><br>
        <select name="categoryId">
            <option>-- Select a Category --</option>
            <?php
                foreach ($dropDownCategory as $category) {
            ?>
                    <option value="<?php echo $category['categoryId']; ?>"><?php echo $category['label']; ?></option>
            <?php
                }
            ?>      
        </select><br>

        <label for="">Estimated Price</label><br>
        <input type="number" name="estimatedPrice" required><br>

        <label for="">Artist Name</label><br>
        <input type="text" name="artist" required><br>

        <label for="">Produced Year</label><br>
        <input type="number" name="producedYear" required><br>

        <label for="">Bidding Date and Time</label><br>
        <input type="datetime-local" name="biddingDate" required><br>

        <label for="">Product Image</label><br>
        <input type="file" name="productImage" required><br><br>

        <h3 class="font-italic">Contact Details</h3>

        <label for="">Name</label><br>
        <input type="text" name="sellerName" required><br>

        <label for="">Phone Number</label><br>
        <input type="text" name="phone" required><br>

        <label for="">Email</label><br>
        <input type="email" name="email" required><br><br>

        <input type="hidden" name="addedBy" value="<?php echo $_SESSION['sessClientId']; ?>">

        <input type="hidden" name="status">

        <input type="submit" name="submit" value="Save"><br><br>

        
    </form>
</div>
