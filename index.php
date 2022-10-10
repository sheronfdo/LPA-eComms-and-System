<?php require_once 'database/database.php'; ?>
<!doctype html>
<html lang="en">
<?php

ini_set('display_errors', 1);
ini_set('log_errors', 1);
ini_set('error_log', $_SERVER['DOCUMENT_ROOT'] . '/lpa' . '/log.txt');
error_reporting(E_ALL); ?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LPA eComms</title>

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

    <section id="home">
        <div class="container">
            <h5>NEW ARRIVALS</h5>
            <h1><span>Best Price</span> This Year</h1>
            <p>Shoomatic Offers your very comfortable time<br> on walking exercises.
            </p>
            <a href="shop.php"><button>Shop Now</button></a>
        </div>

    </section>

    <section id="brand" class="container">
        <div class="row m-0 py-5">
            <img class="img-fluid col-lg-2 col-md-4 col-6" src="img/brand/2.png" alt="">
            <img class="img-fluid col-lg-2 col-md-4 col-6" src="img/brand/3.png" alt="">
            <img class="img-fluid col-lg-2 col-md-4 col-6" src="img/brand/1.png" alt="">
            <img class="img-fluid col-lg-2 col-md-4 col-6" src="img/brand/6.png" alt="">
            <img class="img-fluid col-lg-2 col-md-4 col-6" src="img/brand/5.png" alt="">
            <img class="img-fluid col-lg-2 col-md-4 col-6" src="img/brand/4.png" alt="">

        </div>
    </section>

    <section id="new" class="w-100">
        <div class="row p-0 m-0">
            <div class="one col-lg-4 col-md-12 col-12 p-0">
                <img class="img-fluid" src="img/new/banner6.jpg" alt="">
                <div class="details">
                    <h2>Gigabyte Gaming Monitor</h2>
                    <a href="shop.php"> <button class="text-uppercase"> Shop Now</button></a>
                </div>
            </div>

            <div class="one col-lg-4 col-md-12 col-12 p-0">
                <img class="img-fluid" src="img/new/banner7.jpg" alt="">
                <div class="details">
                    <h2>Gigabyte Gaming Monitor</h2>
                    <a href="shop.php"> <button class="text-uppercase"> Shop Now</button></a>
                </div>
            </div>

            <div class="one col-lg-4 col-md-12 col-12 p-0">
                <img class="img-fluid" src="img/new/banner8.jpg" alt="">
                <div class="details">
                    <h2>NVIDIA TRX 3000 SERIES</h2>
                    <a href="shop.php"><button class="text-uppercase"> Shop Now</button></a>
                </div>
            </div>
        </div>
    </section>

    <section id="featured" class="my-5 pb-5">
        <div class="container text-center mt-5 py-5">
            <h3>Our Featured</h3>
            <hr class="mx-auto">
            <p>Here you can check out our new products with fair price on LPA eComms.</p>

        </div>
        <div class="row mx-auto container-fluid">
            <?php
            $db = new dbConnect();
            $query = "select * from lpa_stock_image ORDER BY lpa_stock_ID DESC limit 0,4";
            $result = $db->getfromdb($query);
            if ($rows = mysqli_num_rows($result)) {
                $i = 0;
                while ($row = mysqli_fetch_array($result)) {
                    echo '<div class="product text-center col-lg-3 col-md-4 col-12">
            
            <img class="img-fluid mb-3" src="admin/uploads/images/' . $row['lpa_stock_image'] . '" alt="">
            <h5 class="p-name">' . "Asus Tuf Gaming Monitor" . '</h5>
            </div>';
                }
            }
            ?>
        </div>


    </section>

    <section id="banner" class="my-5 py-5">
        <div class="container">
            <h4>MID SEASON'S SALE</h4>
            <h1>Autumn Collection<br> UP TO 15% OFF</h1>
            <a href="shop.php"><button class="text-uppercase">Shop Now</button></a>
        </div>
    </section>

    <section id="featured" class="my-5 pb-5">
        <div class="container text-center mt-5 py-5">
            <h3>New Arrivals</h3>
            <hr class="mx-auto">
            <p>Here you can check out our new products with fair price on LPA eComms.</p>

        </div>
        <div class="row mx-auto container-fluid">
            <?php
            $db = new dbConnect();
            $query = "select * from lpa_stock_image ORDER BY lpa_stock_ID DESC limit 5,9";
            $result = $db->getfromdb($query);
            if ($rows = mysqli_num_rows($result)) {
                $i = 0;
                while ($row = mysqli_fetch_array($result)) {
                    echo '<div class="product text-center col-lg-3 col-md-4 col-12">
            
            <img class="img-fluid mb-3" src="admin/uploads/images/' . $row['lpa_stock_image'] . '" alt="">
            <h5 class="p-name">' . "Asus Tuf Gaming Monitor" . '</h5>
            </div>';
                }
            }
            ?>
        </div>
    </section>



    <footer class="mt-5 py-5">
        <?php
        include 'common/footer.php';
        ?>
    </footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>

</body>

</html>