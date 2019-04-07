<!DOCTYPE html>
<html>
<head>

<title>Przygody dobrego wojaka Szweda</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Animations -->
    <link rel="stylesheet" href="css/animate.css">
     <script src="js/wow.js"></script>
              <script>
              new WOW().init();
              </script>
    <!-- Fonts -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <!-- Styles -->
    <link rel="stylesheet" href="styles/style.css?bldskjfdso." type="text/css" media="all" />

    <!-- Favicon -->
    <link rel="icon" href="images/icon.png" type="image/x-icon">    
    
</head>

<body> 
    
    <?php include('header.php'); ?>

    
<div class="nav-bar-sep d-lg-none"></div>
<?php
			if (!isset($_GET['w']))$_GET['w']="home";
			include $_GET['w'] . ".php";
?>

<script type='text/javascript' src='js/jquery.js'></script>
<script type='text/javascript' src='js/custom.js'></script>

            
</body>
</html>