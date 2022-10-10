<?php  
ini_set('display_errors', 1);
ini_set('log_errors', 1);
ini_set('error_log', $_SERVER['DOCUMENT_ROOT'] . '/lpa' . '/log.txt');
error_reporting(E_ALL);
require_once('../database/database.php');
if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 


        if ($_SESSION['sess_admin_id']) {
            $_SESSION = array();

          if (isset($_COOKIE[session_name()])) {
            setcookie(session_name(), '', time()-3600);
           }

            session_destroy(); 
        }

 
     ?>

<script>
       window.location.href = "login.php";
</script>
        <?php
