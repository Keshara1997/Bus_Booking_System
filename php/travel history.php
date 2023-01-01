<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel history</title>
    <link rel="stylesheet" href="../css/travel history.css">
    <script src="../javascript/travel history.js"></script>
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


<!--creating table-->
    <?php
      include'connect.php';
      $file=fopen("../files/log.txt","r");
      $ac_id=fread($file,filesize("../files/log.txt"));
      $query="SELECT NIC FROM customer WHERE account_id=$ac_id;";
      $result=$conn->query($query);
      $nic=$result->fetch_assoc();

      $query="SELECT * FROM custoomer_purchase WHERE NIC=$nic[NIC]";
      $result=$conn->query($query);

      if($result->num_rows>0)
      {
              echo("  
           <table class=trhis>
               <tr>
                   <th style=\"border-top-left-radius:8px;\">Departure</th>
                   <th>Arrival</th>
                   <th>ticket Price</th>
                   <th>Date</th>
                   <th style=\"border-top-right-radius:8px;\">Bus ID</th>
               </tr>
             ");
   while($row=$result->fetch_assoc())
   {
       echo("<tr>
                  <td>$row[departure]</td>
                  <td>$row[destination]</td>
                  <td>$row[price]</td>
                  <td>$row[date]</td>
                  <td >$row[bus_id]</td>
            </tr>");
   }
   echo("
     <tr>
        <td style=\"border-bottom-left-radius:10px;\"></td>
        <td></td>
        <td></td>
        <td></td>
        <td style=\"border-bottom-right-radius:10px;\"></td>
     </tr>
   
   
   ");
    echo("</table>");
      }

      else{
          echo ("<h1 class=noo> No travel history yet </h1>");
      }

    ?>
    <!--table ends-->
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