<?php
    // starting session and checking admin login
	session_start();
	if (isset($_SESSION['sessAdminId'])) {

        if (isset($_POST['submit'])) {
            // password is hashed and a function is called to insert the data
            $password = $_POST['admin']['password'];
            $pass = password_hash($password,PASSWORD_DEFAULT);
            $_POST['admin']['password'] = $pass;
            $admin->save($_POST['admin'],'adminId');
            $admin = $_POST['admin'];
            header('Location:admin');   
        }

        // title of the page
        $title = "Add Admin";

        // calling function to show contents on the page
        $content = loadTemplate('templates/addAdmin.php',[]);
    }

    // when admin is not logged in displaying admin login page
    else
        include 'adminLogIn.php';
?>