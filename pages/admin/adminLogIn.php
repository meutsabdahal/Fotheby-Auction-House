<?php
    if (isset($_POST['submit'])) {
        unset($_POST['submit']);
    
        $admins = $admin->find('email', $_POST['email']);
        if ($admins->rowCount() > 0) {
            $admin = $admins->fetch();
            
            if (password_verify($_POST['password'], $admin['password'])) {
                $_SESSION['sessAdminId'] = $admin['adminId'];
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

	$title = "Log In";

	$content = loadTemplate('templates/adminLogIn.php',[]);
?>