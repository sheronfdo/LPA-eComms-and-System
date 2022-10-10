<?php
ini_set('display_errors', 1);
ini_set('log_errors', 1);
ini_set('error_log', $_SERVER['DOCUMENT_ROOT'].'/lpa'.'/log.txt');
error_reporting(E_ALL);
if (!isset($_SESSION)) {
    session_start();
}
session_destroy();
echo "<script> window.location.href='login.php';</script>";
exit();
