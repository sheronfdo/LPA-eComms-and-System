<?php
require_once('service/clientservice.php');

$errors1 = array();
$errors2 = array();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['submitbtn'])) {

        $username = $_POST['uname'];
        $password = $_POST['pass'];
        $md5Password = md5($password);
        if(empty($username)){
            $errors1[] = 'Username is Required';
        }
        if(empty($password)){
            $errors2[] = 'Password is Required';
        }
        if (!empty($username) && !empty($password)) {

           // $userService = new UserService();
            $userService->__constructWithoutId($username, $md5Password);
            $userService->insertUser();
            echo '<script> alert("User Added Successfully"); </script>';
            echo "<script> window.location.href='manageuser.php';</script>";
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

                    <form action="index.php" method="post">
                        <div class="form-row">

                            <div class="input-group col-md-6 mb-3">
                                <input type="text" name="fname" class="form-control" placeholder="First Name">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-user"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="input-group col-md-6 mb-3">
                                <input type="text" name="lname" class="form-control" placeholder="Last Name">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-user"></span>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="form-row">

                            <div class="input-group col-md-12 mb-3">
                                <input type="text" name="" class="form-control" placeholder="Address">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-home"></span>
                                    </div>
                                </div>
                            </div>


                        </div>

                        <div class="form-row">

                            <div class="input-group col-md-6 mb-3">
                                <input type="tel" class="form-control" placeholder="Phone Number">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-phone"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="input-group col-md-6 mb-3">
                                <input type="email" class="form-control" placeholder="Email">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-envelope"></span>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="form-row">

                            <div class="input-group col-md-12 mb-3">
                                <input type="tel" class="form-control" placeholder="Username">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-user"></span>
                                    </div>
                                </div>
                            </div>


                        </div>

                        <div class="form-row">

                            <div class="input-group col-md-6 mb-3">
                                <input type="password" class="form-control" placeholder="Password">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-lock"></span>
                                    </div>
                                </div>
                            </div>

                            <div class="input-group col-md-6 mb-3">
                                <input type="password" class="form-control" placeholder="Retype-Password">
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



                    I already have an Account? <a href="login.html" class="text-center"> Log In Here</a>
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