
<?php
ini_set('display_errors', 1);
ini_set('log_errors', 1);
ini_set('error_log', $_SERVER['DOCUMENT_ROOT'] . '/lpa' . '/log.txt');
error_reporting(E_ALL);
require_once('../service/userservice.php');

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
        $result = $db->getfromdb("SELECT * FROM lpa_users order by lpa_user_ID desc limit 1");
        $row = mysqli_fetch_array($result);
        $lastid = $row['lpa_user_ID'];

        if ($lastid == " ") {
            $userId = "USR1";
        } else {
            $userId = substr($lastid, 3);
            $userId = intval($userId);
            $userId = "USR" . ($userId + 1);
        }

        $firstname = $_POST['fname'];
        $lastname = $_POST['lname'];
        $username = $_POST['uname'];
        $password = $_POST['pass'];
        $repassword = $_POST['repass'];
        $group = $_POST['groupname'];
        $status = "1";


        if (empty($firstname)) {
            $errors1[] = 'Firstname is Required';
        }
        if (empty($lastname)) {
            $errors2[] = 'Lastname is Required';
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
        if (!empty($firstname) && !empty($lastname) && !empty($username) && !empty($password) && !empty($repassword)) {

            if ($password == $repassword) {
                $md5Password = md5($password);
                $userService = new UserService();
                //echo $userId . "<br>". $username. "<br>". $md5Password. "<br>". $firstname. "<br>". $lastname. "<br>". $group. "<br>". $status;
                $userService->__constructWithId($userId, $username, $md5Password, $firstname, $lastname, $group, $status);
                $userService->insertUser();
                echo '<script> alert("Admin Registered Successfully"); </script>';
                echo "<script> window.location.href='index.php';</script>";
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
        <title>LPA eComms | Manage Admin</title>

        <!-- Google Font: Source Sans Pro -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
        <!-- Ionicons -->
        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
        <!-- Tempusdominus Bootstrap 4 -->
        <link rel="stylesheet" href="../../plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
        <!-- iCheck -->
        <link rel="stylesheet" href="../../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
        <!-- JQVMap -->
        <link rel="stylesheet" href="../../plugins/jqvmap/jqvmap.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
        <!-- overlayScrollbars -->
        <link rel="stylesheet" href="../../plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
        <!-- Daterange picker -->
        <link rel="stylesheet" href="../../plugins/daterangepicker/daterangepicker.css">
        <!-- summernote -->
        <link rel="stylesheet" href="../../plugins/summernote/summernote-bs4.min.css">
        <script src="https://code.jquery.com/jquery-latest.js"></script>
         <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js" integrity="sha512-qzrZqY/kMVCEYeu/gCm8U2800Wz++LTGK4pitW/iswpCbjwxhsmUwleL1YXaHImptCHG0vJwU7Ly7ROw3ZQoww==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
          <!-- DataTables -->
         <link rel="stylesheet" href="../../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
        <link rel="stylesheet" href="../../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
        <link rel="stylesheet" href="../../plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
      
    </head>

    <body class="hold-transition sidebar-mini layout-fixed">
        <div class="wrapper">

        


                <!-- Navbar -->
                <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="index.php" class="nav-link">Home</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="#" class="nav-link">Contact</a>
                </li>
            </ul>

          
        </nav>
        <!-- /.navbar -->


               <!-- Main Sidebar Container -->
               <?php
            include 'sidebar.php';

            ?>
    

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <div class="content-header">
                    <div class="container-fluid">
                        <div class="row mb-2">
                            <div class="col-sm-6">
                                
                            </div>
                            <!-- /.col -->
                            <div class="col-sm-6">
                                <ol class="breadcrumb float-sm-right">
                                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                    <li class="breadcrumb-item active">Administrator Manage</li>
                                </ol>
                            </div>
                            <!-- /.col -->



                        </div>

            <section class="content col-12">

            <div class="card">
              <div class="card-header">
                <h3 class="card-title"><h1 class="m-0">Add Administrator</h1></h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <form action="add_admin.php" method="post">
                        <div class="form-row">

                            <div class="input-group col-md-6 mb-3">
                                <input type="text" name="fname" class="form-control" placeholder=" <?php
                            if (!empty($errors1)) {
                               
                                foreach ($errors1 as $error1) {
                                    echo '- ' . $error1;
                                }
                              
                            }else{
                                echo "Firstname";
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
                                
                            }else{
                                echo "Lastname";
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
                                <input type="tel" name="uname" class="form-control" placeholder="<?php
                            if (!empty($errors6)) {
                               
                                foreach ($errors6 as $error6) {
                                    echo '- ' . $error6;
                                }
                                
                            }else{
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
                            }else{
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
                                
                            }else{
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
                        <div class="input-group col-md-6 mb-3">
                        
                           <select name="groupname" class="form-control">
                           <option value="">Select Group Name</option>
                           <option value="Admin">Admin</option>
                            <option value="User">User</option>
                            <option value="Manager">Manager</option>
                           </select>
                            
                            
                        </div>

                        
                        <div class="mb-3">
                            <button type="submit" name="submitbtn" class="btn btn-primary">Register</button>
                        </div>

                    </form>
              </div>
              <!-- /.card-body -->
            </div>


                  </section>
                
                    
                    </div>
                </div>
            </div>
</div>
        
                    <!-- /.container-fluid -->
                </div>
                <!-- /.content-header -->

        </div>
        <!-- ./wrapper -->

        <!-- jQuery -->
        <script src="../../plugins/jquery/jquery.min.js"></script>
        <!-- jQuery UI 1.11.4 -->
        <script src="../../plugins/jquery-ui/jquery-ui.min.js"></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
            $.widget.bridge('uibutton', $.ui.button)
        </script>
        <!-- Bootstrap 4 -->
        <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- ChartJS -->
        <script src="../../plugins/chart.js/Chart.min.js"></script>
        <!-- Sparkline -->
        <script src="../../plugins/sparklines/sparkline.js"></script>
        <!-- JQVMap -->
        <script src="../../plugins/jqvmap/jquery.vmap.min.js"></script>
        <script src="../../plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
        <!-- jQuery Knob Chart -->
        <script src="../../plugins/jquery-knob/jquery.knob.min.js"></script>
        <!-- daterangepicker -->
        <script src="../../plugins/moment/moment.min.js"></script>
        <script src="../../plugins/daterangepicker/daterangepicker.js"></script>
        <!-- Tempusdominus Bootstrap 4 -->
        <script src="../../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
        <!-- Summernote -->
        <script src="../../plugins/summernote/summernote-bs4.min.js"></script>
        <!-- overlayScrollbars -->
        <script src="../../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
        <!-- AdminLTE App -->
        <script src="../../dist/js/adminlte.js"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="../../dist/js/demo.js"></script>
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src="../../dist/js/pages/dashboard.js"></script>
        <script src="../../plugins/ekko-lightbox/ekko-lightbox.min.js"></script>
        <script src="../../plugins/filterizr/jquery.filterizr.min.js"></script>
        <script src="../../plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="../../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
        <script src="../../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
        <script src="../../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
        <script src="../../plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
        <script src="../../plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
        <script src="../../plugins/jszip/jszip.min.js"></script>
        <script src="../../plugins/pdfmake/pdfmake.min.js"></script>
        <script src="../../plugins/pdfmake/vfs_fonts.js"></script>
        <script src="../../plugins/datatables-buttons/js/buttons.html5.min.js"></script>
        <script src="../../plugins/datatables-buttons/js/buttons.print.min.js"></script>
        <script src="../../plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

        <!-- jQuery -->
        <script src="../../plugins/jquery/jquery.min.js"></script>
        <!-- Bootstrap 4 -->
        <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- DataTables  & Plugins -->
        <script src="../../plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="../../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
        <script src="../../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
        <script src="../../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
        <script src="../../plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
        <script src="../../plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
        <script src="../../plugins/jszip/jszip.min.js"></script>
        <script src="../../plugins/pdfmake/pdfmake.min.js"></script>
        <script src="../../plugins/pdfmake/vfs_fonts.js"></script>
        <script src="../../plugins/datatables-buttons/js/buttons.html5.min.js"></script>
        <script src="../../plugins/datatables-buttons/js/buttons.print.min.js"></script>
        <script src="../../plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
        <!-- AdminLTE App -->
 
        <script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>

        <?php
        include 'footer.php';

        ?>
    </body>

    </html>

    