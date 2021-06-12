<?php
	// starting session and checking admin login
	session_start();
	if (isset($_SESSION['sessAdminId'])) {
		// calling function to display the data from admin table
		$admins = $admin->findAll();

		if(isset($_GET['aId'])){
			// calling function to delete the selected row
			$admins = $admin->delete('adminId',$_GET['aId']);
			header('Location:admin'); 
		}

		// title of the page
		$title = "Admin";
		
		// calling function to show contents on the page
		$content = loadTemplate('templates/adminAdmin.php',['admins' => $admins]);
	}
	// when admin is not logged in displaying admin login page
	else
		include 'adminLogIn.php';
	?>