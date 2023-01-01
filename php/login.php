<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../css/login.css">
    <script src="../javascript/login.js"></script>
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
                      <li><a href="../html/about us.html">About Us</a></li>
                      <li><a href="../html/index.html">Home</a></li>
                  </ul>
              </nav>
          </div>
          <h1>bookBUS</h1>
          <h2>Plan,book and enjoy your journey</h2>
          
      </div>
      <!--header and nav bar ends-->
      <!--Login starts-->
      <div class="login_section">
          <form class="login" action="loginp.php" method="POST">
              <h1>Login</h1>
              <input type="text" name="uname" id="" placeholder="User name" required>
              <input type="password" name="pword" placeholder="password" required>
              <input type="submit" value="Login">
          </form>
          <div class="side">
              <h1>"Relaxed mind makes a journey better
even in the toughest roads"</h1>
              <img src="../img\bus\icons8-bus.gif" alt="">

          </div>
          <span>
              Not a member yet? <a href="../html/register.html">Register</a>
          </span>

      </div>
      <!--login ends-->
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