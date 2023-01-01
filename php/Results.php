<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/results.css">
</head>
<body>
    <!--header and nav bar begins-->
<div class="top1">
    <div class="navigation_bar">
        <nav>
            <ul>
                <a href="../html/index.html"><img class="logo" src="../img/Capture-removebg-preview.png" alt="logo"></a>
                <li><a href="../php/login.php" >Login</a></li>
                <li><a href="../html/contact us.html">Contact Us</a></li>
                <li><a href="#">About Us</a></li>
                <li><a href="../html/index.html">Home</a></li>
            </ul>
        </nav>
        <div class="drop" id="drop">
            <ul>
                <li><a href="#">Account settings</a></li>
                <li><a href="#">Travel history</a></li>
            </ul>
        </div>
    </div>
    <h1>bookBUS</h1>
    <h2>Plan,book and enjoy your journey</h2>
    
</div>
<!--header and nav bar ends-->
<!--Rssult section-->
<?php
    include 'connect.php';
    $from= $_GET['from'];
    $to= $_GET['to'];
    $date=$_GET['date'];
    $sqlq="SELECT * FROM schedule WHERE departure_place=\"$from\" AND arrival_place=\"$to\" AND date=\"$date\";";
    $results=$conn->query("$sqlq");
    $counter=1;
    if($results->num_rows==0)
    {
        echo("<h1>We are sorry<br>there are no buses available</h1>");
    }
    for($counter=1;$counter<=$results->num_rows;++$counter)
    {
        $row=$results->fetch_assoc();
        
        echo ("<div class=result_$counter>
           <form action=booking.php method=GET>
               <input type=text value=From:-$row[departure_place] disabled>
               <input style=display:none; type=text name=from value=From:-$row[departure_place]>
               <input type=text  value=To:-$row[arrival_place] disabled>
               <input style=display:none; type=text name=to value=To:-$row[arrival_place]>
               <input type=text  value=Date:-$row[date] disabled>
               <input style=display:none; type=text name=date value=Date:-$row[date]>
               <input type=text  value=Price:-$row[tvalue] disabled>
               <input style=display:none; type=number name=price  value=$row[tvalue]>
               <input style=display:none; type=text name=b_id value=Bus_ID:-$row[b_id]>
               <input type=submit value=Buy>
               
           </form>   
       </div> ");
    }
?>
<!--results section ends-->
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