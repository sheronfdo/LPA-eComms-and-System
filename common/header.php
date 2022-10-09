<?php
$loginbtn = null;
$registerbtn = null;
    if (!isset($_SESSION)) {
        session_start();
    }

    if(isset($_SESSION['username'])){
        $loginbtn = ' <a class="nav-link" href="logout.php">Log Out</a>';

    }else{     $loginbtn = ' <a class="nav-link" href="login.php">Login </a>';
    $registerbtn = '<a class="nav-link" href="register.php">Register</a>';

    }


?>
<div class="container">
    <img src="img/LPA eComms.png" alt="" width="50px">
    <a href="index.php">
        <h3 class="nav">LPA eComms</h3>
    </a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span >  <i id="bar" class="fa fa-bars"></i></span>
  </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">

            <li class="nav-item">
                <a class="nav-link active" href="index.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="shop.php">Shop</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="about.php">About Us</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="contact.php">Contact Us</a>
            </li>
            <li class="nav-item">
               <?php echo $loginbtn;     ?>
            </li>
            <li class="nav-item">
            <?php   echo $registerbtn;    ?>
            </li>
            <li class="nav-item">
                <a href="search.php"><i class="fa fa-search icon"></i></a>
                <a href="cart.php"><i class="fa fa-shopping-basket icon"></i></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="register.php"><?php if (isset($_SESSION['username'])) {echo $_SESSION['username']; }   ?></a>
            </li>

            
    </div>
</div>