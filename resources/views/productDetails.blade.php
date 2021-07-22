<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta name = "viewport" content="width=device-width, initial-scale=1.0">
      <title>E-BUYAN</title>
      <link rel="stylesheet" href="/css/style.css">
      <link  href="https://www.freepnglogos.com/pics/shopping-cart">
      <link  href="https://www.cleanpng.com/png-online-shopping-mobile-shop-5625712">
      <link href="https://img.icons8.com/material-outlined/24/000000/menu--v1.png"/>
      <link  href="https://icons-for-free.com/download-icon-svg+general+ham+list+menu+menu+icon+office+icon-1320185157378483623_512.png">
  </head>
  <body>
    <div class="header1">
    <div class="container">
      <div class="navbar">
        <div class="logo">
          <img src="images/3333-removebg-preview.png" width="125px">
        </div>
        <nav>
          <ul id="MenuItems">
            <li><a href="">Home</a></li>
            <li><a href="products">Products</a></li>
            <li><a href="">About</a></li>
            <li><a href="">Contact</a></li>
            <li><a href="">Account</a></li>
          </ul>
        </nav>
       <a href="cart"> <img src="images/shopping-cart-20392.png" width="30px" height="30px"></a>
        <img src="images/icons8-menu-24.png" class = "menu" width="30px" height="30px" onclick="menutoggle()">
      </div>
    </div>
  </div>
    <div class="small-container single">
      <div class="row">
        <div class="col2">
          <img src="images/brx-builds-mazda-miata-gt3-dystopian-357.jpg" width="100%" id ="productimg">
          <div class="smallIMGrow">
            <div class="smllcol">
              <img src="images/brx-builds-mazda-miata-gt3-dystopian-357.jpg" width="100%" class="smallimg">
            </div>
            <div class="smllcol">
              <img src="images/brx-builds-mazda-miata-gt3-dystopian-382.jpg" width="100%" class="smallimg">
            </div>
            <div class="smllcol">
              <img src="images/brx-builds-mazda-miata-gt3-dystopian-383.jpg" width="100%" class="smallimg">
            </div>
            <div class="smllcol">
              <img src="images/brx-builds-mazda-miata-gt3-dystopian-359.jpg" width="100%" class="smallimg">
            </div>
          </div>
        </div>
        <div class="col2">
          <p>Home/Miata</p>
          <h1>Mazda Miata</h1>
          <h4>₱1,000,000.00</h4>
          <select>
            <option>Select Variant</option>
            <option>Hard Top</option>
            <option>Street</option>
            <option>Tract</option>
          </select>
          <input type="number" value="1">
          <a href="" class="btn">Add to Cart</a>
          <h3>Product Details <i class="fa fa-indent"></i></h3>
          <br>
          <p>Miata MX-5 is made by Mazda</p>
        </div>
      </div>
    </div>
    <br>
    <br>
    <div class="small-container">
      <div class="row"></div>
      <h2>Related Products</h2>
    </div>

<div class="small-container">


  <div class="row">
    <div class="col4">
      <img src="images/brx-builds-mazda-miata-gt3-dystopian-357.jpg">
      <h4>Miata</h4>
      <div class="rating">
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star-half-o"></i>
      </div>
      <p>₱1,000,000.00</p>
    </div>
    <div class="col4">
      <img src="images/brx-builds-mazda-miata-gt3-dystopian-357.jpg">
      <h4>Miata</h4>
      <div class="rating">
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star-half-o"></i>
      </div>
      <p>₱1,000,000.00</p>
    </div>
    <div class="col4">
      <img src="images/brx-builds-mazda-miata-gt3-dystopian-357.jpg">
      <h4>Miata</h4>
      <div class="rating">
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star-half-o"></i>
      </div>
      <p>₱1,000,000.00</p>
    </div>
    <div class="col4">
      <img src="images/brx-builds-mazda-miata-gt3-dystopian-357.jpg">
      <h4>Miata</h4>
      <div class="rating">
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star-half-o"></i>
      </div>
      <p>₱1,000,000.00</p>
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
    var productimg = document.getElementById("productimg");
    var smallimg = document.getElementsByClassName("smallimg")

    smallimg[0].onclick = function(){
      productimg.src = smallimg[0].src;
    }
    smallimg[1].onclick = function(){
      productimg.src = smallimg[1].src;
    }
    smallimg[2].onclick = function(){
      productimg.src = smallimg[2].src;
    }
    smallimg[3].onclick = function(){
      productimg.src = smallimg[3].src;
    }

  </script>



  </body>
</html>