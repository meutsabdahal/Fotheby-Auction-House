<?php
    // function to get url for the project
    function getURL($parameters = null){
		return "http://localhost/Fotheby-Auction-House/" . $parameters;
	}
    

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" type="text/css" href="<?php echo getURL('css/style.css'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script> -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
    <header class="mt-2">
        <center><a href="home"><img src="<?php echo getURL('img/logo.jpg'); ?>"></a></center>

    </header>
    
    <div>
        <?php echo $content; ?>
    </div>

    <footer class="text-center">
        &copy; <?php echo date("Y"); ?> Fothey's Auction House
    </footer>
    
</body>
</html>