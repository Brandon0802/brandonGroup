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
            <li><a href="/">Home</a></li>
            <li><a href="products">Products</a></li>
            <li><a href="">About</a></li>
            <li><a href="">Contact</a></li>
            <li><a href="">Account</a></li>
          </ul>
        </nav>
        <img src="images/shopping-cart-20392.png" width="30px" height="30px">
        <img src="images/icons8-menu-24.png" class = "menu" width="30px" height="30px" onclick="menutoggle()">
      </div>
    </div>
  </div>
<br>
<br>
<br>
<br>
    <div class="small-container cartpage">
      <table>
        <tr>
          <th>Product</th>
          <th>Quantity</th>
          <th>Subtotal</th>
        </tr>
        <tr>
          <td>
            <div class="cartinfo">
              <img src="images/104040537_840600946349374_2505592284283139448_o.jpg" >
              <div>
                <p>Honda Integra</p>
                <small>₱2,000,000.00</small>
                <br>
                <a href="">Remove</a>
              </div>
            </div>
          </td>
          <td><input type="number" value="1"></td>
          <td>₱2,000,000.00</td>
        </tr>
        <tr>
          <td>
            <div class="cartinfo">
              <img src="images/brx-builds-mazda-miata-gt3-dystopian-357.jpg"">
              <div>
                <p>Mazda Miata</p>
                <small>₱2,000,000.00</small>
                <br>
                <a href="">Remove</a>
              </div>
            </div>
          </td>
          <td><input type="number" value="1"></td>
          <td>₱2,000,000.00</td>
        </tr>
        <tr>
          <td>
            <div class="cartinfo">
              <img src="images/porsche_911_carrera_rsr_porsche_sports_car_139640_3840x2400.jpg" >
              <div>
                <p>Porche 911</p>
                <small>₱5,000,000.00</small>
                <br>
                <a href="">Remove</a>
              </div>
            </div>
          </td>
          <td><input type="number" value="1"></td>
          <td>₱5,000,000.00</td>
        </tr>
      </table>


      <div class="total">
        <table>
          <tr>
            <td>Subtotal</td>
            <td>₱9,000,000.00</td>
          </tr>
          <tr>
            <td>Tax</td>
            <td>₱2,000,000.00</td>
          </tr>
          <tr>
            <td>Total</td>
            <td>₱11,000,000.00</td>
          </tr>
        </table>
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



  </body>
</html>