<?php
	session_start();
	if (isset($_SESSION['sessAdminId'])) {
		$admins = $admin->findAll();

		if(isset($_GET['aId'])){
			$admins = $admin->delete('adminId',$_GET['aId']);
			header('Location:admin'); 
		}

		$title = "Admin";

		$content = loadTemplate('templates/adminAdmin.php',['admins' => $admins]);
	}

	else
		include 'adminLogIn.php';
	?>