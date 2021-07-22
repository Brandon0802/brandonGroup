<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta name = "viewport" content="width=device-width, initial-scale=1.0">
      <title>E-BUYAN</title>
      <link rel="stylesheet" href="css/style.css">

      <link rel="stylesheet" href="/css/style.css">
      <link  href="https://www.freepnglogos.com/pics/shopping-cart">
      <link  href="https://www.cleanpng.com/png-online-shopping-mobile-shop-5625712">
      <link href="https://img.icons8.com/material-outlined/24/000000/menu--v1.png"/>
      <link  href="https://icons-for-free.com/download-icon-svg+general+ham+list+menu+menu+icon+office+icon-1320185157378483623_512.png">  </head>
  <body>

   <div class="header">
    <div class="container">
      <div class="navbar">
        <div class="logo">
          <img src="images/3333-removebg-preview.png" width="125px">
        </div>
        <nav>
          <ul id="MenuItems">
            <li><a href="/">Home</a></li>
            <li><a href="">Products</a></li>
            <li><a href="">About</a></li>
            <li><a href="">Contact</a></li>
            <li><a href="">Account</a></li>
          </ul>
        </nav>
        <img src="images/shopping-cart-20392.png" width="30px" height="30px">
        <img src="images/icons8-menu-24.png" class = "menu" width="30px" height="30px" onclick="menutoggle()">
      </div>
    </div>
  

  <div class="accountpage">
    <div class="container">
      <div class="row">
        <div class="col2">
          <img src="images/kisspng-online-shopping-mobile-shop-5b50b17cd0dfc6.2778564915320149728556.png">
        </div>

        <div>

        <div class="col2">
          <div class="formcontainer">
            <div class="formbtn">
              <span onclick="login()" >Login</span>
              <span onclick="register()">Register</span>
              <hr id="indicator">
            </div>
              <form action="/log-in" method="POST" id="LoginForm">
                @csrf
                   <input type="text" placeholder="Username" name="Username" id="username">
                  <input type="password" placeholder="Password" name="Password" id="password">
                  <button type="submit" class="btn">Login</button>
                  <a href="">Forgot password</a>
              </form>

              <form action="/register" method="POST" id = "RegForm" >
                @csrf
                <input type="text" placeholder="First Name" name="Fname" id="firstname">
                <input type="text" placeholder="Last Name" name="Lname" id="lastname">
                <input type="text" placeholder="Email" name="Email" id="email">
                <input type="text" placeholder="Address" name="Address" id="address">
                <input type="num" placeholder="Contact #" name="Contact" id="contactnum">
                <input type="text" placeholder="Username" name="Username" id="username">
                <input type="password" placeholder="Password" name="Password" id="password">
                <button type="submit" class="btn">Register</button>
                
              </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

  <div class="footer">
      <div class="container">
        <div class="row">
          <div class="fcol1">
            <img src="images/e-BUYan (1).png">
            <p>Our application lets you do your daily or weekly purchases in the market with the comfort of your home.</p>
          </div>
          <div class="fcol2">
            <h3>Donwload Our App</h3>
            <div class="fcol1">
            <img src="images/58438-play-app-android-now-button-store.png">
            </div>
          </div>
          <div class="fcol3">
            <h3>Useful Links</h3>
            <ul>
              <li>Coupons</li>
              <li>Blog Post</li>
              <li>Return Policy</li>
              <li>Customer Service</li>
            </ul>
          </div>
          <div class="fcol4">
            <h3>Follow Us!</h3>
            <ul>
              <li>Facebook</li>
              <li>Instagram</li>
              <li>Twitter</li>
              <li>TikTok</li>
            </ul>
          </div>
        </div>
        <hr>
        <p class="copyright">Copyright 2021 - Team B.A.R.</p>
      </div>
    </div>


  <script>
    var MenuItems = document.getElementById("MenuItems");

    MenuItems.style.maxHeight="0px";
    function menutoggle(){
      if(MenuItems.style.maxHeight=="0px")
      {
        MenuItems.style.maxHeight="200px"
      }
      else
      {
        MenuItems.style.maxHeight="0px"
      }
    }
  </script>

  <script>
    var LoginForm = document.getElementById("LoginForm");
    var RegForm = document.getElementById("RegForm");
    var indicator = document.getElementById("indicator");

    function register(){
      RegForm.style.transform = "translateX(0px)";
      LoginForm.style.transform = "translateX(0px)";
      indicator.style.transform = "translateX(100px)";
    }
    function login(){
      RegForm.style.transform = "translateX(300px)";
      LoginForm.style.transform = "translateX(300px)";
      indicator.style.transform = "translateX(0)";
    }
  </script>

  </body>
</html>