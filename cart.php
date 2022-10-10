<?php
ini_set('display_errors', 1);
ini_set('log_errors', 1);
ini_set('error_log', $_SERVER['DOCUMENT_ROOT'] . '/lpa' . '/log.txt');
error_reporting(E_ALL);
require_once('./database/database.php');

$db = new dbConnect();
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Shopping Cart</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <link rel="stylesheet" href="style.css">

    <style>
        #cart1 table thead td {
            background: #ff9400;
            color: #fff;
            border: none;
            padding: 6px 0;
        }

        #cart1 table td {
            border: 1px solid #b6b3b3;
            text-align: center;
        }

        #cart table tbody img {
            width: 70px;
            object-fit: cover;
        }

        #cart1 table tbody i {
            color: #8d8c89;
        }

        #cart1 table tbody i:hover {
            color: red;
        }

        #cart1 table tbody img {
            width: 70px;
            object-fit: cover;
        }
    </style>

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white py-3 fixed-top">
        <?php
        include 'common/header.php';
        ?>
    </nav>

    <section id="" class="pt-5 mt-5 container">
        <h2 class="font-weight-bold pt-5">Shopping Cart</h2>
        <hr>
    </section>

    <form action='removefromchekout.php' method='POST'>

        <section class="container my-5" id="cart1">

            <!-- /.card-header -->
            <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                    <thead>
                        <tr>

                            <td>Image</td>
                            <td>Product ID</td>
                            <td>Product Name</td>
                            <td>Price</td>
                            <td>Quantity</td>
                            <td>Subtotal</td>
                            <td>Remove</td>
                            <td>Complete</td>

                        </tr>
                    </thead>

                    <tbody>

                <?php
        $itemname = null;
        $price = null;
        $subtot = null;
        $image1 = null;
        $client = $_SESSION['clientid'];
$query = "SELECT  * From lpa_cart WHERE status='1' AND lpa_client_id='$client'";
$result = $db->getfromdb($query);
$resultCheck = mysqli_num_rows($result);

                        if ($resultCheck > 0) {

                            while ($row = mysqli_fetch_assoc($result)) {

                                $qty = (int)$row["lpa_qty"];
                                $stockid = $row["lpa_stock_id"];
                                $clientid = $row["lpa_client_id"];
                                $cartid = $row["lpa_cart_id"];

                                $query2 = "SELECT  * From lpa_stock WHERE lpa_stock_ID='$stockid'";
                                $result2 = $db->getfromdb($query2);
                                $resultCheck2 = mysqli_num_rows($result2);

                                if ($resultCheck2 > 0) {

                                    while ($row2 = mysqli_fetch_assoc($result2)) {

                                        $itemname = $row2["lpa_stock_name"];
                                        $price = (float)$row2["lpa_stock_price"];
                                        $subtot = ($price * $qty);
                                    }
                                }


                                $query3 = "SELECT  * From lpa_stock_image WHERE lpa_stock_ID='$stockid'";
                                $result3 = $db->getfromdb($query3);
                                $resultCheck3 = mysqli_num_rows($result3);

                                if ($resultCheck3 > 0) {

                                    while ($row3 = mysqli_fetch_assoc($result3)) {

                                        $image1 = $row3["lpa_stock_image"];
                                    }
                                }


                                echo '<tr>

        <td><img src="admin/uploads/images/' . $image1 . '" alt=""></td>
        <td>
            <h5>' . $stockid . '</h5>
        </td>
        <td>
            <h5>' . $itemname . '</h5>
        </td>
        <td>
            <h5>' . $price . '</h5>
        </td>
        <td>' . $qty . '</td>
        <td>
            <h5>' . $subtot . '</h5>
        </td>
        </form>   
        <td><button class="fa fa-trash" value= '.$stockid.' name= "remove"></button></i></i></a></td>
        <form action= "checkout.php" method= "POST">
        <td><button class="ml-auto" name ="chechout" value='.$stockid.'>PROCEED TO CHECKOUT </button></td>
        </form>
    </tr>
';
                            }
                        }




                        ?>

                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->






        </section>



        <footer class="mt-5 py-5">
            <?php
            include 'common/footer.php';
            ?>
        </footer>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>

        <!-- jQuery -->
        <script src="plugins/jquery/jquery.min.js"></script>
        <!-- Bootstrap 4 -->
        <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- AdminLTE App -->
        <script src="dist/js/adminlte.min.js"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="dist/js/demo.js"></script>
        <!-- jQuery -->
        <script src="plugins/jquery/jquery.min.js"></script>
        <!-- Bootstrap 4 -->
        <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- DataTables  & Plugins -->
        <script src="plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
        <script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
        <script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
        <script src="plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
        <script src="plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
        <script src="plugins/jszip/jszip.min.js"></script>
        <script src="plugins/pdfmake/pdfmake.min.js"></script>
        <script src="plugins/pdfmake/vfs_fonts.js"></script>
        <script src="plugins/datatables-buttons/js/buttons.html5.min.js"></script>
        <script src="plugins/datatables-buttons/js/buttons.print.min.js"></script>
        <script src="plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
        <!-- AdminLTE App -->
        <script src="dist/js/adminlte.min.js"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="dist/js/demo.js"></script>
        <!-- Page specific script -->
        <script>
            $(function() {
                $("#example1").DataTable({
                    "responsive": true,
                    "lengthChange": false,
                    "autoWidth": false,
                    "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
                }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
                $('#example2').DataTable({
                    "paging": false,
                    "lengthChange": false,
                    "searching": false,
                    "ordering": false,
                    "info": false,
                    "autoWidth": false,
                    "responsive": true,
                });
            });
        </script>


</body>


</html>