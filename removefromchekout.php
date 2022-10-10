<?php
ini_set('display_errors', 1);
ini_set('log_errors', 1);
ini_set('error_log', $_SERVER['DOCUMENT_ROOT'] . '/lpa' . '/log.txt');
error_reporting(E_ALL);
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
