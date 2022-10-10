<?php
ini_set('display_errors', 1);
ini_set('log_errors', 1);
ini_set('error_log', $_SERVER['DOCUMENT_ROOT'] . '/lpa' . '/log.txt');
error_reporting(E_ALL);
session_start();
require_once('../database/database.php');
$errors1 = array();
$errors2 = array();

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if (isset($_POST['loginSubmit'])) {
        $username = stripslashes($_POST['uname']);
        $password = stripslashes($_POST['pass']);
        $md5pass = md5($password);

        if (empty($username)) {
            $errors1[] = 'Username is Required';
        }
        if (empty($password)) {
            $errors2[] = 'Password is Required';
        }if(!empty($username) && !empty($password)){
            $db = new dbConnect();
            $result = $db->getfromdb("SELECT lpa_user_ID,lpa_user_username,lpa_user_password FROM lpa_users WHERE lpa_user_username='$username' && lpa_user_password='$md5pass'");
            while ($row = mysqli_fetch_array($result)) { 
                $user_id = $row['lpa_user_ID']; 
                $user_name = $row['lpa_user_username'];
            }
            $_SESSION['sess_admin_id'] = $user_id; 
            $_SESSION['sess_admin_username'] = $user_name;

            if (mysqli_num_rows($result) > 0) {
           
                echo '<script> alert("Admin Login Successfully"); </script>';
                echo "<script> window.location.href='index.php';
                </script>";
                } else if(mysqli_num_rows($result) == 0){
                    echo "<script> window.location.href='login.php?error=Incorect User name or password';</script>";
                }
        }
      

       
    }
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LPA eComms | Log in </title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="../../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
</head>

<body class="hold-transition login-page">
    <div class="login-box">
        <!-- /.login-logo -->
        <div class="card card-outline card-primary">
            <div class="card-header text-center">
                <a href="" class="h1"><b>LPA</b> eComms</a>
            </div>
            <div class="card-body">
                <p class="login-box-msg">Sign in to start your session</p>

                <form action="login.php" method="post">
                    <div class="input-group mb-3">
                        <input type="username" name="uname" class="form-control" placeholder="<?php
                                                                                                        if (!empty($errors1)) {

                                                                                                            foreach ($errors1 as $error1) {
                                                                                                                echo '- ' . $error1;
                                                                                                            }
                                                                                                        } else {
                                                                                                            echo "Username";
                                                                                                        }
                                                                                                        ?>">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" name="pass" class="form-control" placeholder="<?php
                                                                                                        if (!empty($errors2)) {

                                                                                                            foreach ($errors2 as $error2) {
                                                                                                                echo '- ' . $error2;
                                                                                                            }
                                                                                                        } else {
                                                                                                            echo "Password";
                                                                                                        }
                                                                                                        ?>">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        
                        <!-- /.col -->
                        <div class="col-4">
                            <button type="submit" name="loginSubmit" class="btn btn-primary btn-block">Log In</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>


            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
    <!-- /.login-box -->

    <!-- jQuery -->
    <script src="../../plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../../dist/js/adminlte.min.js"></script>
</body>

</html>



