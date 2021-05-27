
<?php
    include 'adminNavigation.php';
?>
<div class="adminSection text-center">
    <h1 class="mt-1 font-italic">Manage Product</h1>

    <form action="" method="post" enctype="multipart/form-data" class="mt-3">
        <input type="hidden" name="lotNumber" value="<?php echo $products['lotNumber'];?>">

        <label for="">Product Name</label><br>
        <input type="text" name="productName" value="<?php echo $products['productName'];?>"><br>

        <label for="">Description</label><br>
        <textarea  name="description" >
            <?php echo $products['description'];?>
        </textarea><br>

        <label for="">Choose Category</label><br>
        <select name="categoryId">
            <option>-- Select a Category --</option>
                <?php
                foreach ($categories as $category) {
                    ?>
                    <option value="<?php echo $category['categoryId'];?>"><?php echo $category['label'];?> </option>
                    <?php } ?>
        </select><br>

        <label for="">Estimated Price</label><br>
        <input type="number" name="estimatedPrice" value="<?php echo $products['estimatedPrice'];?>"><br>

        <label for="">Artist Name</label><br>
        <input type="text" name="artist" value="<?php echo $products['artist'];?>"><br>

        <label for="">Bidding Date and Time</label><br>
        <input type="datetime-local" name="biddingDate" value="<?php echo $products['biddingDate'];?> " ><br>


        <input type="submit" name="submit" value="Save">

        
    </form>
</div>
