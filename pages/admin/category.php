<?php

	$categories = $category->findAll();

	$title = "Category";

	$content = loadTemplate('templates/adminCategory.php',['categories' => $categories]);
?>