<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contact Us</title>

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

    <section id="page-header" class="my-5 pt-5">
        <h2>#Let'sTalk</h2>
        <p>How Can We Help You?</p>
    </section>


    <section id="contact-details" class="container mb-5">
        <div class="row">
            <div class=" col-lg-6 col-md-6 col-12 mb-4">
                <div class="details">
                    <span>GET IN TOUCH</span>
                    <h2>Visit one of our outlet locations or contact us today</h2>
                    <h3>Head Office</h3>
                    <div>
                        <li class="list-unstyled">
                            <i class="fa fa-map"></i>
                            <p>LPA eComms ,No 76/ , Main Street</p>
                        </li>
                        <li class="list-unstyled">
                            <i class="fa fa-envelope"></i>
                            <p>lpaecomms@gmail.com</p>
                        </li>
                        <li class="list-unstyled">
                            <i class="fa fa-phone"></i>
                            <p>(12)4446464646</p>
                        </li>
                        <li class="list-unstyled">
                            <i class="fa fa-clock-o"></i>
                            <p>Monday to Sunday : 9.00 am to 11.00 pm</p>
                        </li>

                    </div>
                </div>


            </div>
            <div class="col-lg-6 col-md-6 col-12">
                <div class="map mb-5">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3293.436122789038!2d-89.52359968457182!3d34.36482638052205!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88807afabc5c47c7%3A0x14b01dcbf8fec968!2sOxford%20University%20UMC!5e0!3m2!1sen!2slk!4v1664827976327!5m2!1sen!2slk"
                        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </section>

    <section id="form-details" class="container">
        <form action="">
            <span>LEAVE A MESSAGE</span>
            <h2>We love to hear from you</h2>
            <input type="text" placeholder="Your Name">
            <input type="text" placeholder="Email">
            <input type="text" placeholder="Subject">
            <textarea name="" id="" cols="30" rows="5" placeholder="Your Message"></textarea>
            <button>Send</button>

        </form>
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