<?php
//Initiate session;
session_start();

if(isset($_SESSION['basket']) != true) {
    $_SESSION['basket'] = [];
}

if(isset($_SESSION['intent']) != true) {
    $_SESSION['intent'] = 'main';
}

if(isset($_GET['product'])) {
    $siteContent = 'product';
} else {
    $siteContent = $_SESSION['intent'];
}


?>

<!--fetch header-->
<?php require 'header.php'; ?>

<!--fetch content based on intent-->
<?php require $siteContent.'.php'; ?>

<!--fetch footer-->
<?php require 'foot.php' ?>
