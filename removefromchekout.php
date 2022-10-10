<?php
    require_once ('./service/cartservice.php');
    $db = new dbConnect();
    $cart = new cartservice();
    if (!isset($_SESSION)) {
        session_start();
    }
if (isset($_POST["remove"])) {


    $itemId = $_POST["remove"];
    $clientId = $_SESSION['clientid'];
    $cart->__constructWithtId($itemId,$clientId);
    $cart->delete();
    echo "<script> window.location.href='cart.php';</script>";
}

   






