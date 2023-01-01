<?php  session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment</title>
    <link rel="stylesheet" href="../css/payment.css">
    <?php error_reporting(0);?>
</head>
<body>
    <!--header and nav bar begins-->
<div class="top1">
    <div class="navigation_bar">
        <nav>
            <ul>
                <a href="../html/contact us.html"><img class="logo" src="../img/Capture-removebg-preview.png" alt="logo"></a>
                <li><a href="../php/login.php" >Login</a></li>
                <li><a href="../html/contact us.html">Contact Us</a></li>
                <li><a href="../html/about us.html">About Us</a></li>
                <li><a href="../html/index.html">Home</a></li>
            </ul>
        </nav>
    </div>
    <h1>bookBUS</h1>
    <h2>Plan,book and enjoy your journey</h2>
    
</div>
<!--header and nav bar ends-->
<!--Details about ticket-->
<div class="details">
    <h2>Ticket details</h2>
    <span>Number of adults:<span><?php echo("$_GET[no_of_adults]"); ?></span></span>
    <span>Number of Children:<span><?php echo("$_GET[no_of_children]"); ?></span> </span>
    <hr>
    <?php
       $total=((int)$_GET['no_of_adults']*(int)$_GET['price']+(int)$_GET['no_of_children']*(int)$_GET['price']/2);
       $_SESSION['price']=$total;
    ?>
    <span>Toatal <span>Rs.<?php echo("$_SESSION[price]"); ?></span></span>

</div>
<!--details about ticket ends-->
<!--payment form starts-->
<div class="payment_con">
    <h2>Enter your details</h2>
    <img src="../img\bus\icons8-down.gif" alt="">
    <form action="paymentp.php" class="payment" method="POST">
    <input type="text" name="" id="" placeholder="First name" required>
    <input type="text" name="" id="" placeholder="Last name">
    <input type="email" name="" id="" placeholder="E-mail" required>
    <input type="tel" name="" id="" placeholder="Mobile number"required>
    <input type="text" name="nic" id="" placeholder="NIC" required>
    <input type="text" name="" id="" placeholder="Card type"required >
    <input type="number" name="" id="" placeholder="Card number" required>
    <input type="number" name="" id="" placeholder="CVC" required>
    <input type="text" name="" id="" placeholder="Date of Expire" onfocus="this.type('date')" required>
    <input type="submit" value="Proceed">
</form>
</div>
<!--payment form ends-->
<!--side note starts-->
 <div class="covid">
     <img src="../img/oti.png" alt="">
     <h4>COVID-19 travel updates</h4>
     <p>Find out what testing and quarantine <br> rules apply for your journey</p>
 </div>
 <form action="#" method="POST" class="subscribe">
     <h2>Subscribe to our newsletters</h2>
    <input type="email" placeholder="Enter your e-mail" required>
    <label for="news">I want to receive newest updates on  travel discounts and newsletters</label>
    <input type="checkbox" id="news">
    <label for="terms">I agree to all the terms and conditions</label>
    <input type="checkbox" id="terms" required>
    <input type="submit" name="" id="" value="Subscribe">
</form>
<!--side note ends-->
<!--Footer starts-->
<footer>
    <div class="more">
        <h5>More</h5>
        <a href="../html/contact us.html">Contact us</a>
        <a href="../html/about us.html">About us</a>
        <a href="#">Site map</a>
        <a href="#">FAQ</a>
        <a href="#">Terms and conditions</a>
    </div>
    <div class="apps">
        <h5>Download our app</h5>
        <a href="#"><img class="android" src="../img/footer/android.png" alt=""></a>
        <a href="#"><img class="apple" src="../img/footer/apple.png" alt=""></a>
    </div>
    <div class="social">
        <h5>Our social media</h5>
        <a href="www.facebook.com"><img class="fb" src="../img/footer/fb.png" alt=""></a>
        <a href="#"><img class="insta" src="../img/footer/insta.png" alt=""></a>
        <a href="#"><img class="twitter" src="../img/footer/twitter.png" alt=""></a>
        <a href="#"><img class="utube" src="../img/footer/icons8-youtube-100.png" alt=""></a>
        <a href="#"><img class="linkedin" src="../img/footer/icons8-linkedin-24.png" alt=""></a>
        <a href="#"><img class="reddit" src="../img/footer/redit.png" alt=""></a>
    </div>
    <p>Copyright@ 2021 bookbus</p>
</footer>
<!--Footer ends-->
</body>
</html>