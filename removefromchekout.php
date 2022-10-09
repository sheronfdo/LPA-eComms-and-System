<?php
    require_once ('./service/cartservice.php');
    $db = new dbConnect();
    $cart = new cartservice();
if (isset($_POST["remove"])) {


    $itemId = $_POST["remove"];
    $cart->__constructWithtId($itemId);
    $cart->delete();
    echo "<script> window.location.href='cart.php';</script>";
}

   






