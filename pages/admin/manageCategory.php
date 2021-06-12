<?php
    // starting session and checking admin login
	session_start();
	if (isset($_SESSION['sessAdminId'])) {
        if (isset($_POST['submit'])) {
            // calling function to save the data in category table
            $category->save($_POST['category'],'categoryId');
            $category = $_POST['category'];
            header('Location:category');   
        }

        else{
            if (isset($_GET['cId'])) {
                // calling function to find all the data from category table whose categoryId is cId
                $category = $category->find('categoryId',$_GET['cId']);
                $category = $category->fetch();
            }
            else
                $category = false;
        }

        // title of the page
        $title = "Category";
        // calling function to show contents on the page
        $content = loadTemplate('templates/manageCategory.php',['category' => $category]);
    }
    // when admin is not logged in displaying admin login page
    else
        include 'adminLogIn.php';
?>