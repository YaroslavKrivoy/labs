<!DOCTYPE html>
<html>
<head>
    <title>Blog - AKAD - Creative Digital Agency HTML Template</title>
    <!-- META TAGS -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <meta name="author" content="Amine Akhouad">
    <meta name="description" content="AKAD is a creative and modern template for digital agencies">

    <!-- STYLES -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/ionicons.min.css">
    <link rel="stylesheet" href="css/animsition.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body class="animsition">

<!-- HEADER  -->
<?php include 'includes/header.php' ?>

<!-- HERO SECTION  -->
<div class="site-hero_2">
    <div class="page-title">
        <div class="big-title montserrat-text uppercase">Auth</div>
        <div class="small-title montserrat-text uppercase">home / auth</div>
    </div>
</div>


<?php

session_start();

if(!isset($_GET['opt'])){
    if((isset($_SESSION['user']) == true)){
        echo '<p>' . $_SESSION['user'] .'</p>';
    }
    else{
        include 'includes/auth/form.php';
    }
}


?>

<!-- newsletter -->
<?php include 'includes/newsletter.php' ?>


<!-- FOOTER -->
<?php include 'includes/footer.php' ?>

<!-- SCRIPTS -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<script type="text/javascript" src="js/smoothScroll.js"></script>
<script type="text/javascript" src="js/jquery.animsition.min.js"></script>
<script type="text/javascript" src="js/wow.min.js"></script>
<script type="text/javascript" src="js/main.js"></script>
<script type="text/javascript">
    $(window).load(function(){
        new WOW().init();
    });
</script>
</body>
</html>