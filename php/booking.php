<?php
   session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking page</title>
    <link rel="stylesheet" href="../css/booking.css">
    <script src="../javascript/booking.js"></script>
    <?php error_reporting(0);?>
</head>
<body>
    <!--header and nav bar begins-->
    <div class="top1">
        <div class="navigation_bar">
            <nav>
                <ul>
                    <a href="../html/index.html"><img class="logo" src="../img/Capture-removebg-preview.png" alt="logo"></a>
                    <li><a href="../php/login.php">Login</a></li>
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
    <!--heading-->
    <div class="heading">
        <h2>Review out ticket options</h2>
        <img src="../img/bus/icons8-down.gif" alt="">
    </div>
    
    <!--Payment form begins-->
    <form action="payment.php" method="GET" id="no_of_tickets" class="no_of_tickets">
                <h3>Ticket information</h3>
                <label for="no_of_adults">Number of adults</label>
                <span>12+ years old</span>
                <input type="number" name="no_of_adults" id="no_of_adults" form="no_of_tickets" value="0">
                <img src="../img/paymetn_form_arrows/icons8-chevron-up-52.png" alt="up1" onclick="toog(1)">
                <img src="../img/paymetn_form_arrows/icons8-chevron-down-52.png" alt="down" onclick="toog(0)">
                <label for="no_of_children">Number of children</label>
                <span>1-12 years old</span>
                <input type="number" name="no_of_children" id="no_of_children" form="no_of_tickets" value="0">
                <img src="../img/paymetn_form_arrows/icons8-chevron-up-52.png" alt="up2" onclick="toog1(1)" >
                <img src="../img/paymetn_form_arrows/icons8-chevron-down-52.png" alt="down" onclick="toog1(0)">
                <input style="display:none;" type="number" name="price" value=<?php echo("$_GET[price]") ?>>
                
                <button type="submit">Proceed with payment</button>
    </form>
    <!--Payment form ends-->
    <!--Details section starts-->
    <div class="aside_con">
        <?php
           $_SESSION['to']=$_GET['to'];
           $_SESSION['from']=$_GET['from'];
           $_SESSION['date']=$_GET['date'];
           $_SESSION['b_id']=$_GET['b_id'];
           echo("<h2> Journey information</h2>
                 <span> $_GET[to]</span>
                 <span>$_GET[from]</span>
                 <span>$_GET[date]</span>
                 <span>Price:-Rs.$_GET[price]/=</span>
                 <span>$_SESSION[b_id]</span>
                 ")
        
        ?>
    </div>
    <div class="faceb">
        <h3>Connect with us on facebook</h3>
        <img src="../img/payment page/like.gif" alt="">
        <a href="#">Check out our faceook page</a>
    </div>
    
    <!--Details section ends-->
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