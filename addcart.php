<?php

ini_set('display_errors', 1);
ini_set('log_errors', 1);
ini_set('error_log', $_SERVER['DOCUMENT_ROOT'] . '/lpa' . '/log.txt');
error_reporting(E_ALL);
require_once('./database/database.php');
require_once('./service/cartservice.php');
$db = new dbConnect();
if (!isset($_SESSION)) {
    session_start();
}

$cart = new cartservice();
if (isset($_POST["cart"])) {

    $clientId = $_SESSION['clientid'];
    $stockId = $_POST['cart'];;
    $qty = $_POST["qty"];


    $cart->__constructWithoutId($clientId, $stockId, $qty);
    $cart->insert();
    echo "<script> window.location.href='index.php';</script>";
}
