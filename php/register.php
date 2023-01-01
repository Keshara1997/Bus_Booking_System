<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     <link rel="stylesheet" href="../css/register2.css">
     <script src="../javascript/register.js"></script>
</head>
<body>
   <?php 
    #connecting
    include'connect.php';
    #taking user inputs
    $uname=$_POST['uname'];
    $password=$_POST['password'];
    #getting the id of the last tuple
    $sql="SELECT account_id FROM account ORDER BY account_id DESC LIMIT 1;";
    $result=$conn->query($sql);
    $row=$result->fetch_assoc();
    $acc_id=$row['account_id'];
    ++$acc_id;
    #creating a new tuple 
    $sql=" INSERT INTO account(account_id,user_type,user_name,password) VALUES( $acc_id,'C',"."'" .$uname."'".","."'". $password."'".");";
    $conn->query($sql);
    ?>
     <!--header and nav bar begins-->
 <div class="top1">
     <div class="navigation_bar">
         <nav>
             <ul>
                 <a href="../php/index.html"><img class="logo" src="../img/Capture-removebg-preview.png" alt="logo"></a>
                 <li><a href="../php/login.php">Login</a></li>
                 <li><a href="../html/contact us.html">Contact Us</a></li>
                 <li><a href="../html/about us.html">About Us</a></li>
                 <li><a href="../php/index.html">Home</a></li>
             </ul>
         </nav>
     </div>
     <h1>bookBUS</h1>
     <h2>Plan,book and enjoy your journey</h2>
   
 </div>
 <!--header and nav bar ends-->
 <!-- thank you notice-->
  <div class="thanku">
      <h1>Thank you</h1>
      <img class="trust" src="../img\payment page\icons8-trust .gif" alt="">
   <div class="faceb">
       <h3>Connect with us on facebook</h3>
       <img class="like" src="../img/payment page/like.gif" alt="">
       <a href="#">Check out our faceook page</a>
   </div>
    

  </div>
 <!--Notice from the side starts-->
 <div class="side_notice">
     <h2>Get a free membership for more exclusive experience</h2>
     <p>"Relaxed mind makes a journey better  <br>even in the toughest roads"</p>
     <img src="../img/bus/icons8-bus.gif" alt="">
 </div>
 <!--Notice from the side ends-->
 <!--Discount table starts-->
 <h3>Today's special discounts</h3>
 <table>
     <tr>
         <th style="border-top-left-radius: 20px;">To</th>
         <th>From</th>
         <th style="border-top-right-radius: 20px;">Discount</th>
     </tr>
     <tr>
         <td>Kandy</td>
         <td>Colombo</td>
         <td>10%</td>
     </tr>
     <tr>
         <td>Colombo</td>
         <td>Kegalle</td>
         <td>9%</td>
     </tr>
     <tr>
         <td style="border-bottom-left-radius: 20px;">Colombo</td>
         <td>Galle</td>
         <td style="border-bottom-right-radius: 20px;">11%</td>
     </tr>
 </table>
 <!--Discount table ends-->
 <!--Book button starts-->
 <a href="#">Book a seat now!!!</a>
 <!--Book button ends-->
 <!--footer starts here-->
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