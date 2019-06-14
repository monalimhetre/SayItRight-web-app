

<div id="wrapper">


<header>
<div class="container">
<nav> 
<ul>
<a href="home"><img src="assets/imgsay/logo.png" alt="logo" class="logo"/></a>
  <li><a href="home"><b>HOME</b></a></li>
  <li><a href="aboutus"><b> ABOUT US</b></a></li>
  <li><a href="blog"><b>BLOG</b></a></li>
  <li><a href="buyfromus"><b>BUY FROM US</b></a></li>
  <li><a href="contactController"><b>CONTACT</b></a></li>
  <li><a href="signup"><b>SIGN UP</b> </a> </li>
  <li><a href="login">  <b> LOGIN</b> </a> </li>
</ul>
</nav>
</div>
</header>

<div class="bg-cover">
<center><h1 class="newh1"id="bh1">Buy from us</h1></center>
</div>



<div class="container7">


  <div class="buy">
          <form action="" method="POST" onsubmit="return validate()">
          <h4>Contact information</h4>
          <input type="text" id="femail" name="firstname1" placeholder="Enter Email">
          </br>	<span class="contactErr4" id="st1"><?php echo $emailErr;?></span>
          	<h4>Shipping address</h4>
          <input type="text" id="ffn" name="firstname2" placeholder="Enter First Name" >
          <span class="contactErr4" id="st2"><?php echo $nameErr;?></span>
          <input type="text" id="fln" name="firstname3" placeholder="Enter Last Name"></br>
          <span class="contactErr4"id="st3"><?php echo $lastErr;?></span>
          <input type="text" id="fad" name="firstname4" placeholder="Enter Address"></br>
          <span class="contactErr4"id="st4"><?php echo $addErr;?></span>
          <input type="text" id="fapt" name="firstname5" placeholder="Enter Apartment, suite,etc."></br>
          <span class="contactErr4"id="st5"><?php echo $aptErr;?></span>
          <input type="text" id="fcity" name="firstname6" placeholder="Enter City"></br>
          <span class="contactErr4"id="st6"><?php echo $cityErr;?></span>

          <select id="lang">
            <option value="english">English</option>
            <option value="spanish">Spanish</option>
            <option value="chinese">Chinese</option>
            <option value="french">French</option>
          </select>

          <input type="text" id="fpcode" name="firstname7" placeholder="Enter Postal Code"></br>
          <span class="contactErr4"id="st7"><?php echo $postalErr;?></span>
          <button type="submit" id="nbutn" value="">Send Message</button>
          </form>
  </div>





  <div class="pictures">
      <table id="symbols" cellspacing="20" style=>
      <tr><th id="th">ID</th><th id="th">UNITS</th><th id="th">NAME</th><th id="th">PRICE</th></tr>
      <tr><th id="th"> <img src="assets/imgsay/taza2.png" alt="cart_1-image" class="w1-image"/></th><th id="th"><?php echo $_POST['tname'];?></th><th id="th">Cup</th><th id="th">$<?php
       echo $amount=$_POST["tname"]*24.99; ?></th></tr>
      <tr><th id="th"><img src="assets/imgsay/franela1.jpg" alt="cart_1-image" class="w1-image"/></th><th id="th"><?php echo $_POST['uname'];?></th><th id="th">flannel</th><th id="th">$<?php
       echo $amount=$_POST["uname"]*24.99; ?></th></tr>
      </table>
      <hr>

      <table id="symbols" cellspacing="50" style=" margin-top:-40px;">
      <tr><th id="th">Total</th><th id="th"> </th><th id="th">USD</th><th id="th">$109,7</th></tr>
      </table>
  </div>

</div>


