<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Shop</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">

    <style>
        .product img {
            width: 100%;
            height: auto;
            box-sizing: border-box;
            object-fit: cover;
        }
        
        #featured>div.row.mx-auto.container>nav>ul>li.page-item.active>a {
            background-color: black;
        }
        
        #featured>div.row.mx-auto.container>nav>ul>li:nth-child(n):hover>a {
            background-color: coral;
            color: #fff;
        }
        
        .pagination a {
            color: black;
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


    <section id="featured" class="my-5 py-5">
        <div class="container mt-5 py-5">
            <h2 class="font-weight-bold">Our Featured</h2>
            <hr>
            <p>Here you can check out our new products with fair price on LPA eComms.</p>

        </div>


        <div class="row mx-auto container">
            <div onclick="window.location.href='product.html';" class="product text-center col-lg-3 col-md-4 col-12">
                <img class="img-fluid mb-3" src="img/shop/1.jpg" alt="">

                <div class="star">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>


                </div>
                <h5 class="p-name"> Ice Cap</h5>
                <h4 class="p-price">$20.00</h4>
                <button class="buy-btn">Add To Cart</button>
            </div>


            <div class="product text-center col-lg-3 col-md-4 col-12">
                <img class="img-fluid mb-3" src="img/featured/2.jpg" alt="">

                <div class="star">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>


                </div>
                <h5 class="p-name"> Sneaker</h5>
                <h4 class="p-price">$40.00</h4>
                <button class="buy-btn">Add To Cart</button>
            </div>

            <div class="product text-center col-lg-3 col-md-4 col-12">
                <img class="img-fluid mb-3" src="img/featured/3.jpg" alt="">

                <div class="star">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>


                </div>
                <h5 class="p-name"> School Bag</h5>
                <h4 class="p-price">$10.00</h4>
                <button class="buy-btn">Add To Cart</button>
            </div>

            <div class="product text-center col-lg-3 col-md-4 col-12">
                <img class="img-fluid mb-3" src="img/featured/2.jpg" alt="">

                <div class="star">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>


                </div>
                <h5 class="p-name"> Red Sneaker</h5>
                <h4 class="p-price">$50.00</h4>
                <button class="buy-btn">Add To Cart</button>
            </div>
        </div>
        <div class="row mx-auto container">
            <div class="product text-center col-lg-3 col-md-4 col-12">
                <img class="img-fluid mb-3" src="img/featured/4.jpg" alt="">

                <div class="star">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>


                </div>
                <h5 class="p-name"> Ice Cap</h5>
                <h4 class="p-price">$20.00</h4>
                <button class="buy-btn">But Now</button>
            </div>


            <div class="product text-center col-lg-3 col-md-4 col-12">
                <img class="img-fluid mb-3" src="img/featured/2.jpg" alt="">

                <div class="star">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>


                </div>
                <h5 class="p-name"> Sneaker</h5>
                <h4 class="p-price">$40.00</h4>
                <button class="buy-btn">But Now</button>
            </div>

            <div class="product text-center col-lg-3 col-md-4 col-12">
                <img class="img-fluid mb-3" src="img/featured/3.jpg" alt="">

                <div class="star">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>


                </div>
                <h5 class="p-name"> School Bag</h5>
                <h4 class="p-price">$10.00</h4>
                <button class="buy-btn">But Now</button>
            </div>

            <div class="product text-center col-lg-3 col-md-4 col-12">
                <img class="img-fluid mb-3" src="img/featured/2.jpg" alt="">

                <div class="star">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>


                </div>
                <h5 class="p-name"> Red Sneaker</h5>
                <h4 class="p-price">$50.00</h4>
                <button class="buy-btn">But Now</button>
            </div>
        </div>




        <div class="row mx-auto container">
            <div class="product text-center col-lg-3 col-md-4 col-12">
                <img class="img-fluid mb-3" src="img/featured/4.jpg" alt="">

                <div class="star">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>


                </div>
                <h5 class="p-name"> Ice Cap</h5>
                <h4 class="p-price">$20.00</h4>
                <button class="buy-btn">Add To Cart</button>
            </div>


            <div class="product text-center col-lg-3 col-md-4 col-12">
                <img class="img-fluid mb-3" src="img/featured/2.jpg" alt="">

                <div class="star">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>


                </div>
                <h5 class="p-name"> Sneaker</h5>
                <h4 class="p-price">$40.00</h4>
                <button class="buy-btn">Add To Cart</button>
            </div>

            <div class="product text-center col-lg-3 col-md-4 col-12">
                <img class="img-fluid mb-3" src="img/featured/3.jpg" alt="">

                <div class="star">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>


                </div>
                <h5 class="p-name"> School Bag</h5>
                <h4 class="p-price">$10.00</h4>
                <button class="buy-btn">Add To Cart</button>
            </div>

            <div class="product text-center col-lg-3 col-md-4 col-12">
                <img class="img-fluid mb-3" src="img/featured/2.jpg" alt="">

                <div class="star">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>


                </div>
                <h5 class="p-name"> Red Sneaker</h5>
                <h4 class="p-price">$50.00</h4>
                <button class="buy-btn">Add To Cart</button>
            </div>


            <!-- Pagination -->
            <nav aria-label="...">
                <ul class="pagination">
                    <li class="page-item disabled">
                        <a class="page-link" href="#" tabindex="-1">Previous</a>
                    </li>
                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                    <li class="page-item ">
                        <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#">Next</a>
                    </li>
                </ul>
            </nav>
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