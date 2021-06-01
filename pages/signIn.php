<?php

	session_start();
    if (isset($_POST['submit'])) {
        unset($_POST['submit']);

        $clients = $client->find('email', $_POST['email']);
        if ($clients->rowCount() > 0) {
            $client = $clients->fetch();
            
            if (password_verify($_POST['password'], $client['password'])) {
                $_SESSION['sessClientId'] = $client['clientId'];
                header('Location:home');
            }
        }
        else
        ?>
        <script>
            alert("Wrong Email or Passwod");
        </script>
        <?php
        

    }
	$categories = $category->findAll();

	$title = "Fothey's Auction House";

	$content = loadTemplate('templates/clientSignIn.php',['categories' => $categories]);
?>