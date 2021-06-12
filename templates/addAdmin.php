<?php
    include 'adminNavigation.php';
?>
<h1 class="text-center mt-1 font-italic">Add Admin</h1><br>
<!-- form to add new admin -->
<form action="" method="post" class="text-center">
        <input type="hidden" name="admin[adminId]">

        <label for="">First Name</label><br>
        <input type="text" name="admin[firstName]" required><br>

        <label for="">Last Name</label><br>
        <input type="text" name="admin[lastName]" required><br>

        <label for="">Email Name</label><br>
        <input type="email" name="admin[email]" required><br>

        <label for="">Password</label><br>
        <input type="password" name="admin[password]" required><br>

        <label for="">Phone</label><br>
        <input type="text" name="admin[phone]" required><br>

        <label for="">Address</label><br>
        <input type="text" name="admin[address]" required><br><br>

        <input type="submit" name="submit" value="Add" class="btn btn-success"><br><br><br><br>
    </form>