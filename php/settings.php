<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>settings</title>
    <link rel="stylesheet" href="../css/settings.css">
    <script src="../javascript/settings.js"></script>
    <?php error_reporting(0);?>
</head>
<body>
   <!--connecting to the database-->
   <?php  include'connect.php';  ?>
     <!--header and nav bar begins-->
 <div class="top1">
     <div class="navigation_bar">
         <nav>
             <ul>
                 <a href="../html/index.html"><img class="logo" src="../img/Capture-removebg-preview.png" alt="logo"></a>
                 <li><a href="#" onclick="dropdown()">My account</a></li>
                 <li><a href="../html/contact us.html">Contact Us</a></li>
                 <li><a href="../html/about us.html">About Us</a></li>
                 <li><a href="../html/index.html">Home</a></li>
             </ul>
         </nav>
         <div class="drop" id="drop">
             <ul>
                 <li><a href="settings.php">Account settings</a></li>
                 <li><a href="travel history.php">Travel history</a></li>
             </ul>
         </div>
     </div>
     <h1>bookBUS</h1>
     <h2>Plan,book and enjoy your journey</h2>
     
 </div>
 <!--header and nav bar ends-->
 <!--settings start-->
 <div class="settings">
   <h1>Welcome</h1>
     <form class="propic" action="image_changing.php" method="post" enctype="multipart/form-data" >
        <img src=<?php $file=fopen("../files/pp.txt","r"); echo fread($file,filesize("../files/pp.txt"));?>  alt="" width="300vw" 
height="300vw">
        <input type="file" name="pp" required>
        <input type="submit" value="change profile picture">
     </form>    
     <?php include'settingsp.php'?>
     <form class="set" action="settings_change.php" method="POST"  onsubmit="validate(event)">
     <label for="fname" >First name:</label>
     <input type="text" id="fname" name="fname" value=<?php echo("\"$fname\""); ?>>
     <label for="lname">Last name:</label>
     <input type="text" id="lname" name="lname" value=<?php echo("\"$lname\""); ?>>
     <label for="NIC">NIC number:</label>
     <input type="text" id="NIC" name="NIC" value=<?php echo("\"$nic\""); ?>>
     <label for="e-mail">E-mail:</label>
     <input type="email" id="e-mail" name="email" value=<?php echo("\"$email\""); ?>>
     <label for="uname">User name:</label>
     <input type="text" id="uname" name="uname" value=<?php echo("\"$uname\""); ?>>
     <label for="password">password</label>
     <input type="password" id="password" name="password" value=<?php echo("\"$pword\""); ?>>
     <label for="password2">Re-enter password</label>
     <input type="password" id="password2" name="password2">
     <label for="deletea">Delete my account</label>
     <input type="checkbox" id="deletea" name="deletea" >
     <button type="submit">Apply changes</button>
 </form>

 </div>

 <!--settings end-->
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