<?php
    include 'connection.php';
    session_start();
    $admin_id = $_SESSION['user_name'];

    if(!isset($admin_id)){
        header('location:login.php');
    }
    if(isset($_POST['logout'])){
        session_destroy();
        header('location:login.php');
    }

?>
<style type="text/css">
    <?php 
        include 'main.css';
    ?>
</style>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!------------------------slick slider link---------------------------------->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js">
    <title>Home Page</title>
</head>
<body>

    <?php include 'header.php';?>
    <!------------------------home slider---------------------------------->
    <div class="container-fluid">
        <div class="hero-slider">
            <div class="slider-item">
                <img src="images/hom1.jpg" alt="">
                <div class="slider-caption">
                    <span>The Best Qulity Products</span>
                    <p>Enjoy purchase of your best Electronic devices from us<br>
                     We offer free delivery to all our clients Regionally in Kenya. <br>
                     We are here because of you.
                    </p>
                    <a href="shop.php" class="btn">Shop Now</a>
                </div>
            </div>
            <div class="slider-item">
                <img src="images/hp1.jpg" alt="">
                <div class="slider-caption">
                    <span>The Best Qulity Products</span>
                    <p>Enjoy purchase of your best Electronic devices from us<br>
                     We offer free delivery to all our clients Regionally in Kenya. <br>
                     We are here because of you.
                    </p>
                    <a href="shop.php" class="btn">Shop Now</a>
                </div>
            </div>
        </div>
        <div class="controls">
            <i class="bi bi-chevron-left pre"></i>
            <i class="bi bi-chevron-left pre"></i>
        </div>
    </div>
    <div class="services">
        <div class="row">
            <div class="box">
                <img src="" alt="">
                <div>
                    <h1>Free Shipping Fast</h1>
                    <p>eSHOP webstore has a fast shipment in the entire region.</p>
                </div>
            </div>
            <div class="box">
                <img src="" alt="">
                <div>
                    <h1>Money Cashback Quarantee</h1>
                    <p>eSHOP webstore ensure money cashback incase the cliect is not satisfied with the product.</p>
                </div>
            </div>
            <div class="box">
                <img src="" alt="">
                <div>
                    <h1>Online Support 24/7</h1>
                    <p>eSHOP webstore has fully online support for 24 hours all days.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="story">
        <div class="row">
            <div class="box">
                <span>Our Story</span>
                <h1>How we Operate Since the Birth of eSHOP Webstore since 2023.</h1>
                <p>Welcome to eSHOP Webstore, your go-to online store for the latest electronics! Founded in 2023, 
                    we set out with a simple mission—to provide high-quality gadgets, accessories, and tech essentials 
                    at competitive prices. <br> From the beginning, we have focused on offering a wide range of 
                    electronics, from smartphones and laptops to smart home devices and accessories. Our goal is to 
                    make technology accessible and affordable while ensuring excellent customer service. <br>
                     As we continue to grow, we remain committed to bringing you the best products and a seamless 
                     shopping experience. Thank you for being part of our journey! <br>
                    <b>Happy shopping!</b></p>
                <a href="shop.php" class="btn">Shop Now</a>
            </div>
            <div class="box">
                <img src="images/iph1.jpg" alt="">
            </div>
        </div>
    </div>

    <!------------?php include 'footer.php';?>---------->

    <!------------------------slick slider link---------------------------------->
    <script src="https://code.jquery.com/jquery-3.2.1.slin.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <script type="text/javascript" src="script2.js"></script>
    
</body>
</html>