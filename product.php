<?php

ini_set('display_errors', 1);
ini_set('log_errors', 1);
ini_set('error_log', $_SERVER['DOCUMENT_ROOT'] . '/lpa' . '/log.txt');
error_reporting(E_ALL);
require_once('./database/database.php');
require_once('./service/cartservice.php');
$db = new dbConnect();
if (!isset($_SESSION)) {
    session_start();
}

?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Shop Products</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">

    <style>
        .small-img-group {
            display: flex;
            justify-content: space-between;
        }

        .small-img-col {
            flex-basis: 24%;
            cursor: pointer;
        }

        .sproduct select {
            display: block;
            padding: 5px 10px;
        }

        .sproduct input {
            width: 50px;
            height: 40px;
            padding-left: 10px;
            font-size: 16px;
            margin-right: 10px;
        }

        .sproduct input:focus {
            outline: none;
        }

        .buy-btn {
            background: #fb774b;
            opacity: 1;
            transition: 0.3s all;
            padding: 10px 15px;
            font-size: 14px;
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
    <form action='addcart.php' method='POST'>
        <section class="container sproduct my-5 pt-5">



            <?php
            $name = null;
            $des = null;
            $price = null;
            $pId = $_GET['id'];
            $image = '';
            $query3 = "SELECT  * From lpa_stock WHERE lpa_stock_ID='$pId'";
            $result3 = $db->getfromdb($query3);
            $resultCheck3 = mysqli_num_rows($result3);

            if ($resultCheck3 > 0) {

                while ($row3 = mysqli_fetch_assoc($result3)) {

                    $name = $row3["lpa_stock_name"];
                    $des = $row3["lpa_stock_desc"];
                    $price = $row3["lpa_stock_price"];



                    $query = "SELECT  * From lpa_stock_image WHERE lpa_stock_ID='$pId'";
                    $result = $db->getfromdb($query);
                    $resultCheck = mysqli_num_rows($result);

                    if ($resultCheck > 0) {

                        while ($row = mysqli_fetch_assoc($result)) {

                            $image = $row["lpa_stock_image"];
                        }
                    }
                    echo '        <div class="row mt-5">
<div class="col-lg-5 col-md-12 col-12 ">
    <img class="img-fluid w-100 pb-1" src="./admin/uploads/images/' . $image . '" alt="" id="MainImg">


</div>
<div class="col-lg-6 col-md-12 col-12">
    <h6>Home / T-Shirt</h6>
    <h3 class="py-4">' . $name . '</h3>
    <h2>' . $price . '</h2>
   
</form>
    <input type="number" min="0" value="1" name= "qty">
    <button class="buy-btn" name="cart" value = ' . $pId . '>Add To Cart</button>

    <h4 class="mt-5 mb-5">Product Details</h4>
    <span>' . $des . '</span>
</div>
</div>';
                }
            }


            ?>

        </section>




        <footer class="mt-5 py-5">
            <?php
            include 'common/footer.php';
            ?>
        </footer>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>

        <script>
            var MainImg = document.getElementById('MainImg');
            var smallimg = document.getElementsByClassName('small-img');

            smallimg[0].onclick = function() {
                MainImg.src = smallimg[0].src;
            }
            smallimg[1].onclick = function() {
                MainImg.src = smallimg[1].src;
            }
            smallimg[2].onclick = function() {
                MainImg.src = smallimg[2].src;
            }
            smallimg[3].onclick = function() {
                MainImg.src = smallimg[3].src;
            }
        </script>
</body>

</html>