<?php
    include 'navigation.php';
?>
<!-- client registration form -->
<section>
    <h1 class="text-center mt-1 font-italic">Register your Account</h1>
    <form action="" method="post" class="text-center">
        <input type="hidden" name="client[clientId]">

        <label for="">First Name</label><br>
        <input type="text" name="client[firstName]" required><br>

        <label for="">Last Name</label><br>
        <input type="text" name="client[lastName]" required><br>

        <label for="">Email Name</label><br>
        <input type="email" name="client[email]" required><br>

        <label for="">Password</label><br>
        <input type="password" name="client[password]" required><br>

        <label for="">Phone</label><br>
        <input type="text" name="client[phone]" required><br>

        <label for="">Address</label><br>
        <input type="text" name="client[address]" required><br><br>

        <input type="submit" name="submit" value="Sign Up" class="btn btn-success"><br><br><br><br>
    </form>
    <hr/>

</section>