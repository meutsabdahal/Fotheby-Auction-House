<?php
    include 'navigation.php';
?>
<section>
    <h1 class="text-center mt-1 font-italic">SignIn to your Account</h1>
    <!-- login form -->
    <form action="" method="post" class="text-center">
        <label for="">Email Address</label><br>
        <input type="text" name="email"><br>

        <label for="">Password</label><br>
        <input type="password" name="password"><br><br>

        <input type="submit" name="submit" value="Sign In" class="btn btn-success"><br><br>
    </form>
    <hr/>
    <h1 class="text-center mt-1 font-italic">Not a User?</h1>
    <center><a href="signUp"><button class="btn btn-success">Sign Up</button></a></center><br><br>

</section>