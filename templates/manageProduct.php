
<?php
    include 'adminNavigation.php';
?>
<div class="adminSection text-center">
    <h1 class="mt-1 font-italic">Manage Product</h1>

    <form action="" method="post" class="mt-3">
        <input type="hidden" name="lotNumber">

        <label for="">Product Name</label><br>
        <input type="text"><br>

        <label for="">Product Name</label><br>
        <input type="text"><br>

        <label for="">Description</label><br>
        <textarea></textarea><br>

        <label for="">Choose Category</label><br>
        <input type="text"><br>

        <label for="">Estimated Price</label><br>
        <input type="text"><br>

        <label for="">Artist Name</label><br>
        <input type="text"><br>

        <label for="">Bidding Date and Time</label><br>
        <input type="datetime-local"><br>

        <label for="">Product Image</label><br>
        <input type="file"><br><br>

        <input type="submit" name="submit" value="Save">

        
    </form>
</div>
