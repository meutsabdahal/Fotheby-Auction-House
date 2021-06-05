<?php
	session_start();
	if (isset($_SESSION['sessAdminId'])) {

        if (isset($_POST['submit'])) {
            $password = $_POST['admin']['password'];
            $pass = password_hash($password,PASSWORD_DEFAULT);
            $_POST['admin']['password'] = $pass;
            $admin->save($_POST['admin'],'adminId');
            $admin = $_POST['admin'];
            header('Location:admin');   
        }

            $title = "Add Admin";

            $content = loadTemplate('templates/addAdmin.php',[]);
    }

    else
        include 'adminLogIn.php';
?>