<?php

    if (isset($_POST['submit'])) {
        $category->save($_POST['category'],'categoryId');
        $category = $_POST['category'];
        header('Location:category');   
    }

    else{
        if (isset($_GET['cId'])) {
            $category = $category->find('categoryId',$_GET['cId']);
            $category = $category->fetch();
        }
        else
            $category = false;
    }

	$title = "Category";

	$content = loadTemplate('templates/manageCategory.php',['category' => $category]);
?>