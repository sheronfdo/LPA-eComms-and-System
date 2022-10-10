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
    <title>Search</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">




</head>

<body>


    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white py-3 fixed-top">
        <?php
        include 'common/header.php';
        ?>
    </nav>
    <form method='POST' action='search.php'>
        <section id="search" class="container my-5 pt-5">
            <div class="search_wrap search_wrap_3">
                <div class="search_box">
                    <input type="text" class="input" placeholder="Search Here" name='searchtext'>


                    <button name="search" class="btn btn_common"> <i class="fa fa-search white"></i></button>


                </div>
            </div>
        </section>
    </form>

    <div class="row mx-auto container-fluid">

        <?php

        if (isset($_POST["search"])) {

            $str = $_POST["searchtext"];
            $query = "SELECT lpa_stock_name,lpa_stock_ID,lpa_stock_price,lpa_stock_desc FROM lpa_stock Where lpa_stock_name = '$str'";
            $result = $db->getfromdb($query);
            $resultCheck = mysqli_num_rows($result);

            while ($row = mysqli_fetch_assoc($result)) {
                $stockId = $row["lpa_stock_ID"];
                $amoun = $row["lpa_stock_price"];
                $disc = $row["lpa_stock_desc"];


                $query2 = "SELECT lpa_stock_image FROM lpa_stock_image Where lpa_stock_ID = '$stockId'";
                $result2 = $db->getfromdb($query2);
                $resultCheck2 = mysqli_num_rows($result2);

                while ($row2 = mysqli_fetch_assoc($result2)) {
                    $image = $row2["lpa_stock_image"];

                    if ($resultCheck2 > 0) {
        ?>

                        <div class="product text-center col-lg-3 col-md-4 col-12">
                            <img class="img-fluid mb-3" src="admin/uploads/images/<?php echo $image;   ?>" alt="">

                            <div class="star">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>


                            </div>
                            <h5 class="p-name"><?php echo $disc ?></h5>
                            <h4 class="p-price"><?php echo $amoun ?></h4>
                            <button class="buy-btn">Add To Cart</button>
                        </div>



        <?php
                    } else {
                    }
                }
            }
        }



        ?>

    </div>

    <footer class="mt-5 py-5">
        <?php
        include 'common/footer.php';
        ?>
    </footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>


</body>

</html>