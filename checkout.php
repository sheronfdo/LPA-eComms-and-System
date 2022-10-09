<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Payment Checkout</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">

    <style>
        #cancel {
            font-size: 01.8rem;
            font-weight: 700;
            outline: none;
            border: none;
            padding: 13px 30px;
            cursor: pointer;
            font-size: 14px;
            text-transform: uppercase;
            transition: 0.3s ease;
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
        <h2 class="font-weight-bold pt-5">Shipping To</h2>
        <hr>
    </section>


    <section id="cart-bottom" class="container">
        <div class="row">

            <div class=" col-lg-6 col-md-6 col-12 mb-4">
                <div class="details">
                    <form action="checkout-complete.html" method="post"></form>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">First Name</label>
                            <input type="text" class="form-control" id="fname" placeholder="Firrst Name">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputPassword4">Last Name</label>
                            <input type="text" class="form-control" id="lname" placeholder="Last Name">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputAddress">Address</label>
                        <input type="text" class="form-control" id="address" placeholder="Address">
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Phone Number</label>
                            <input type="tel" class="form-control" id="phone" placeholder="Phone Number">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputPassword4">Email</label>
                            <input type="email" class="form-control" id="email" placeholder="Email">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="paymentMethod">Payment Method</label>
                            <select id="paymentMethod" class="form-control">
                                  <option selected>Select Payment Method</option>
                                  <option>PayPal</option>
                                  <option>VISA</option>
                                  <option>MasterCard</option>
                                  <option>Direct Deposit</option>
                                </select>
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

                    <div>
                        <button type="submit" class="buy-btn mr-3">Place Order</button>

                        <button type="reset" class="btn-danger" id="cancel">Cancel</button>
                    </div>



                    </form>
                </div>


            </div>

            <div class="total col-lg-6 col-md-6 col-12">
                <h4 class="mb-2">Cart Summery</h4>
                <div>
                    <h5>CART TOTAL</h5>
                    <div class="d-flex justify-content-between">
                        <h6>Total</h6>
                        <p id="total_checkout">$162</p>
                    </div>

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


</body>

</html>