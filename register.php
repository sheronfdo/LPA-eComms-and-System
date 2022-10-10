<?php
ini_set('display_errors', 1);
ini_set('log_errors', 1);
ini_set('error_log', $_SERVER['DOCUMENT_ROOT'] . '/lpa' . '/log.txt');
error_reporting(E_ALL);
require_once('service/clientservice.php');

$errors1 = array();
$errors2 = array();
$errors3 = array();
$errors4 = array();
$errors5 = array();
$errors6 = array();
$errors7 = array();
$errors8 = array();
$errors9 = array();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['submitbtn'])) {

        $db = new dbconnect();
        $result = $db->getfromdb("SELECT * FROM lpa_clients order by lpa_client_ID desc limit 1");
        $row = mysqli_fetch_array($result);
        $lastid = $row['lpa_client_ID'];

        if ($lastid == " ") {
            $clientId = "CTM1";
        } else {
            $clientId = substr($lastid, 3);
            $clientId = intval($clientId);
            $clientId = "CTM" . ($clientId + 1);
        }


        $firstname = $_POST['fname'];
        $lastname = $_POST['lname'];
        $address = $_POST['address'];
        $phone = $_POST['pnumber'];
        $email = $_POST['email'];
        $username = $_POST['uname'];
        $password = $_POST['pass'];
        $repassword = $_POST['repass'];
        $status = "1";


        if (empty($firstname)) {
            $errors1[] = 'Firstname is Required';
        }
        if (empty($lastname)) {
            $errors2[] = 'Lastname is Required';
        }
        if (empty($address)) {
            $errors3[] = 'Address is Required';
        }
        if (empty($phone)) {
            $errors4[] = 'Phone Number is Required';
        }
        if (empty($email)) {
            $errors5[] = 'Email is Required';
        }
        if (empty($username)) {
            $errors6[] = 'Username is Required';
        }
        if (empty($password)) {
            $errors7[] = 'Password is Required';
        }
        if (empty($repassword)) {
            $errors8[] = 'Re password is Required';
        }
        if (!empty($firstname) && !empty($lastname) && !empty($address) && !empty($phone) && !empty($email) && !empty($username) && !empty($password) && !empty($repassword)) {

            if ($password == $repassword) {
                $md5Password = md5($password);
                $clientService = new ClientService();
                //  echo $clientId . "<br>". $firstname. "<br>". $lastname. "<br>". $address. "<br>". $phone. "<br>". $email. "<br>". $status. "<br>". $username. "<br>". $md5Password;
                $clientService->__constructId($clientId, $firstname, $lastname, $address, $phone, $email, $status, $username, $md5Password);
                $clientService->insert();
                echo '<script> alert("Registered Successfully"); </script>';
                echo "<script> window.location.href='login.php';</script>";
            } else {
                $errors9[] = 'Password Not Match';
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

    <title>LPA eComms | Registration</title>

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
        ::-webkit-scrollbar {
            display: none;
        }
    </style>
</head>

<body>

    <section id="regi">

        <div class=" col-md-6 mt-5  container">

            <div class="card card-outline card-primary col-md-12">
                <div class="card-header text-center">
                    <img class="mb-2" src="img/LPA eComms.png" alt="" width="100px">
                    <h1 id="not-bold"> <b>LPA </b>eComms</h1>
                </div>
                <div class="card-body">
                    <p class="login-box-msg">Get's Started.</p>

                    <form action="register.php" method="post">
                        <div class="form-row">

                            <div class="input-group col-md-6 mb-3">
                                <input type="text" name="fname" class="form-control" placeholder=" <?php
                                                                                                    if (!empty($errors1)) {

                                                                                                        foreach ($errors1 as $error1) {
                                                                                                            echo '- ' . $error1;
                                                                                                        }
                                                                                                    } else {
                                                                                                        echo "First Name";
                                                                                                    }

                                                                                                    ?>">

                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-user"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="input-group col-md-6 mb-3">
                                <input type="text" name="lname" class="form-control" placeholder=" <?php
                                                                                                    if (!empty($errors2)) {

                                                                                                        foreach ($errors2 as $error2) {
                                                                                                            echo '- ' . $error2;
                                                                                                        }
                                                                                                    } else {
                                                                                                        echo "Last Name";
                                                                                                    }
                                                                                                    ?>">

                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-user"></span>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="form-row">

                            <div class="input-group col-md-12 mb-3">
                                <input type="text" name="address" class="form-control" placeholder="<?php
                                                                                                    if (!empty($errors3)) {
                                                                                                        foreach ($errors3 as $error3) {
                                                                                                            echo '- ' . $error3;
                                                                                                        }
                                                                                                    } else {
                                                                                                        echo "Address";
                                                                                                    }
                                                                                                    ?>">

                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-home"></span>
                                    </div>
                                </div>
                            </div>


                        </div>

                        <div class="form-row">

                            <div class="input-group col-md-6 mb-3">
                                <input type="tel" name="pnumber" class="form-control" placeholder="<?php
                                                                                                    if (!empty($errors4)) {

                                                                                                        foreach ($errors4 as $error4) {
                                                                                                            echo '- ' . $error4;
                                                                                                        }
                                                                                                    } else {
                                                                                                        echo "Phone Number";
                                                                                                    }
                                                                                                    ?>">

                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-phone"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="input-group col-md-6 mb-3">
                                <input type="email" name="email" class="form-control" placeholder=" <?php
                                                                                                    if (!empty($errors5)) {

                                                                                                        foreach ($errors5 as $error5) {
                                                                                                            echo '- ' . $error5;
                                                                                                        }
                                                                                                    } else {
                                                                                                        echo "Email";
                                                                                                    }
                                                                                                    ?>">

                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-envelope"></span>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="form-row">

                            <div class="input-group col-md-12 mb-3">
                                <input type="tel" name="uname" class="form-control" placeholder="<?php
                                                                                                    if (!empty($errors6)) {

                                                                                                        foreach ($errors6 as $error6) {
                                                                                                            echo '- ' . $error6;
                                                                                                        }
                                                                                                    } else {
                                                                                                        echo "Username";
                                                                                                    }
                                                                                                    ?>">

                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-user"></span>
                                    </div>
                                </div>
                            </div>


                        </div>

                        <div class="form-row">

                            <div class="input-group col-md-6 mb-3">
                                <input type="password" name="pass" class="form-control" placeholder=" <?php
                                                                                                        if (!empty($errors7)) {
                                                                                                            echo '<div class="errors">';
                                                                                                            foreach ($errors7 as $error7) {
                                                                                                                echo '- ' . $error7;
                                                                                                            }
                                                                                                            echo '</div>';
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

                            <div class="input-group col-md-6 mb-3">
                                <input type="password" name="repass" class="form-control" placeholder="<?php
                                                                                                        if (!empty($errors8)) {

                                                                                                            foreach ($errors8 as $error8) {
                                                                                                                echo '- ' . $error8;
                                                                                                            }
                                                                                                        } else {
                                                                                                            echo "Retype Password";
                                                                                                        }
                                                                                                        ?>">
                                <?php
                                if (!empty($errors9)) {

                                    foreach ($errors9 as $error9) {
                                        echo '- ' . $error9;
                                    }
                                }
                                ?>
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-lock"></span>
                                    </div>
                                </div>
                            </div>


                        </div>

                        <div class="form-group">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="gridCheck">
                                <label class="form-check-label" for="gridCheck">
                                    Check me out
                                </label>
                            </div>
                        </div>
                        <div class="mb-3">
                            <button type="submit" name="submitbtn" class="btn btn-primary">Register</button>
                        </div>

                    </form>



                    I already have an Account? <a href="login.php" class="text-center"> Log In Here</a>
                </div>
                <!-- /.form-box -->
            </div>
            <!-- /.card -->
        </div>
        <!-- /.register-box -->
    </section>

    <!-- jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/adminlte.min.js"></script>
</body>

</html>