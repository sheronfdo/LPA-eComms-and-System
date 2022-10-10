<?php

ini_set('display_errors', 1);
ini_set('log_errors', 1);
ini_set('error_log', $_SERVER['DOCUMENT_ROOT'] . '/lpa' . '/log.txt');
error_reporting(E_ALL);
require_once('./database/database.php');
$db = new dbConnect();
if (!isset($_SESSION)) {
    session_start();
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
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <link rel="stylesheet" href="style.css">

    <style>
        #not-bold {
            font-size: 2.5rem;
            font-weight: 350;
        }
    </style>

</head>

<body>
    <?php
    $Wrongpassword = null;
    $userName = null;
    $password = null;
    $userid = null;
    $loginstatus = null;

    if ($_SERVER['REQUEST_METHOD'] == "POST") {

        if (isset($_POST['login'])) {

            $userName = stripslashes($_POST['username']);
            $password = stripslashes($_POST['password']);
            $password = md5($password);

            $query = 'SELECT * FROM lpa_clients WHERE lpa_client_username=? AND lpa_client_password=?';

            $connection = $db->getConnection();
            $stmt = mysqli_stmt_init($connection);


            if (!mysqli_stmt_prepare($stmt, $query)) {
                echo '<script type="text/javascript">
            swal("", " Sql statement faild", "warning");
            </script>';
            } else {

                mysqli_stmt_bind_param($stmt, "ss", $userName, $password);
            }

            mysqli_stmt_execute($stmt);


            $result = mysqli_stmt_get_result($stmt);


            $resultCheck = mysqli_num_rows($result);


            if ($resultCheck > 0) {

                while ($row = mysqli_fetch_assoc($result)) {


                    $_SESSION['username'] = $row['lpa_client_username'];
                    $_SESSION['clientid'] = $row['lpa_client_ID'];
                    $userName = $row['lpa_client_username'];
                    echo "<script> window.location.href='index.php';</script>";
                    $loginstatus = null;
                    exit();
                }
            } elseif ($resultCheck == 0) {

                $loginstatus = 'wrong password or username';
            }
        }
    }
    ?>
    <section id="login-new">

        <div class=" col-md-3 mt-5  container">
            <!-- /.login-logo -->
            <div class="card card-outline card-primary">
                <div class="card-header text-center">
                    <img class="mb-2" src="img/LPA eComms.png" alt="" width="25%">
                    <h1 id="not-bold"><b>LPA </b>eComms</h1>
                </div>
                <div class="card-body">
                    <p class="login-box-msg">Welcome back. Please enter your details.</p>

                    <form action="login.php" method="post">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Username" name='username'>
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-user"></span>
                                </div>
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <input type="password" class="form-control" placeholder="Password" name='password'>
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-lock"></span>
                                </div>
                            </div>
                        </div>
                        <div>

                            <?php
                            echo $loginstatus;
                            ?>
                        </div>
                        <div class="row">
                            <div class="col-8">
                                <div class="icheck-primary">

                                    <input type="checkbox" id="remember">
                                    <label for="remember">


                                        Remember Me
                                    </label>
                                </div>
                            </div>
                            <!-- /.col -->
                            <div class="col-4">
                                <button type="submit" class="btn btn-primary btn-block" name='login'>Log In</button>
                            </div>
                            <!-- /.col -->
                        </div>
                    </form>




                    <p class="mb-0">
                        <a href="register.php" class="text-center">Create a New Account?</a>
                    </p>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>

    </section>
    <!-- /.login-box -->

    <!-- jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/adminlte.min.js"></script>

</body>

</html>