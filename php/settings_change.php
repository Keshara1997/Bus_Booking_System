<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/settings_change.css">
    <script src="../javascript/settings change.js"></script>
    <?php error_reporting(0);?>
</head>
<body>
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
<?php
    include'connect.php';
    #creating variables
    $nic=$_POST['NIC'];
    $delete=$_POST['deletea'];
    #opening log file to read current user id
    $file=fopen("../files/log.txt","r");
    $ac_id=fread($file,filesize("../files/log.txt"));
    #deleting account if user chooses to
    if($delete=='on')
    {
        $query="DELETE FROM customer_email WHERE NIC=\"$nic\";";
        $conn->query($query);
        $query="DELETE FROM custoomer_purchase WHERE NIC=\"$nic\";";
        $conn->query($query);
        $query="DELETE FROM customer WHERE NIC=\"$nic\";";
        $conn->query($query);
        $query="DELETE FROM account WHERE account_id=$ac_id";
        $conn->query($query);
         echo(" <h1 class=delete>Your account is deleted successfuly</h1> ");
    }
    #changing settings
    else
    {
       $fname=$_POST['fname'];
       $lname=$_POST['lname'];
       $email=$_POST['email'];
       $uname=$_POST['uname'];
       $password=$_POST['password'];
       $query="UPDATE customer_email SET email=\"$email\" WHERE NIC=\"$nic\";";
       $conn->query($query);
       $query="UPDATE customer SET fname=\"$fname\",lname=\"$lname\" WHERE NIC=\"$nic\";";
       $conn->query($query);
       $query="UPDATE account SET user_name=\"$uname\" WHERE account_id=$ac_id;";
       $conn->query($query);
       $query="UPDATE account SET password=\"$password\" WHERE account_id=$ac_id;";
       $conn->query($query);
       echo(" <h1 class=delete>Your account is updated</h1> ");
    }
    
   
 
?>
<!--footer starts-->
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