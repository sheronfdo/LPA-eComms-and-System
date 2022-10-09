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

                    </tr>
                </thead>

                <tbody>
                    <tr>

                        <td><img src="img/shop/26.jpg" alt=""></td>
                        <td>
                            <h5>234523</h5>
                        </td>
                        <td>
                            <h5>Men T-Shirt</h5>
                        </td>
                        <td>
                            <h5>$54</h5>
                        </td>
                        <td><input class="w-25 pl-1" type="number" value="1"></td>
                        <td>
                            <h5>$54</h5>
                        </td>
                        <td><a href="#"><i class="fa fa-trash"></i></i></a></td>
                    </tr>

                    <tr>

                        <td><img src="img/shop/24.jpg" alt=""></td>
                        <td>
                            <h5>234523</h5>
                        </td>
                        <td>
                            <h5>Men T-Shirt</h5>
                        </td>
                        <td>
                            <h5>$54</h5>
                        </td>
                        <td><input class="w-25 pl-1" type="number" value="1"></td>
                        <td>
                            <h5>$54</h5>
                        </td>
                        <td><a href="#"><i class="fa fa-trash"></i></i></a></td>
                    </tr>

                    <tr>

                        <td><img src="img/shop/25.jpg" alt=""></td>
                        <td>
                            <h5>234523</h5>
                        </td>
                        <td>
                            <h5>Men T-Shirt</h5>
                        </td>
                        <td>
                            <h5>$54</h5>
                        </td>
                        <td><input class="w-25 pl-1" type="number" value="1"></td>
                        <td>
                            <h5>$54</h5>
                        </td>
                        <td><a href="#"><i class="fa fa-trash"></i></i></a></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->






    </section>

    <section id="cart-bottom" class="container">

        <div class="row">
            <div class="coupon col-lg-6 col-md-6 col-12 mb-4">
                <div>
                    <h5>COUPON</h5>
                    <p>Enter your coupon code if you have one.</p>
                    <input type="text" placeholder="Coupon Code">
                    <button>APPLY COUPON</button>

                </div>
            </div>
            <div class="total col-lg-6 col-md-6 col-12">
                <div>
                    <h5>CART TOTAL</h5>
                    <div class="d-flex justify-content-between">
                        <h6>Total</h6>
                        <p>$162</p>
                    </div>
                    <button class="ml-auto">PROCEED TO CHECKOUT </button>
                </div>
            </div>
        </div>
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