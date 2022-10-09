<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ORder Complete</title>

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
        
        #normal {
            width: 100%;
            height: 0.3px;
            opacity: 0.5;
            background-color: #575756;
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
        <h2 class="font-weight-bold pt-5">Order Complete</h2>
        <hr>
    </section>



    <section id="" class="pt-5 mt-5 container">
        <div class="alert alert-success" role="alert">
            <h4 class="alert-heading">Payment Successfull</h4><br>
            <p>Hey, <span id="username_checkout"> username</span> <br> Thank you for purchasing products at LPA eComms! Your payment has been confirmed. Your Order is now Complete.
                <hr id="normal">
                <p class="mb-2">LPA eComms</p>
                <a href="index.html"> <button class="btn-outline-danger">close</button></a>
        </div>
    </section>



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