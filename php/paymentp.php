<?php
   session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>payment process</title>
    <link rel="stylesheet" href="../css/paymentp.css">
</head>
<body>
    <?php
        include'connect.php';
         $query="INSERT INTO custoomer_purchase(NIC,price,destination,departure,bus_id,date) VALUES(\"$_POST[nic]\",$_SESSION[price],\"$_SESSION[to]\",\"$_SESSION[from]\",\"$_SESSION[b_id]\",\"$_SESSION[date]\");";
         $conn->query($query);
    ?>
     <!--header and nav bar begins-->
 <div class="top1">
     <div class="navigation_bar">
         <nav>
             <ul>
                 <a href="../html/index.html"><img class="logo" src="../img/Capture-removebg-preview.png" alt="logo"></a>
                 <li><a href="login.php" >Login</a></li>
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
 <!--Thank you message-->
 <h1 class="thank">Thank you for traveling with us</h1>
 
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