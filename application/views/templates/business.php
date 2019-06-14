<div id="wrapper">
 <header>
<div class="bg-img">
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
<center><p>Home -> SIGN UP </p></center>
<center><h2>SIGN UP</h2></center>
</div>
 </header>
<div class="x-container">
 <div class="z-container">
 <div class="s-container">
 <h2> Select the type of user</h2>
 <button type="button" name="btn-click" class="cart-btn1"><a href="individual" style="text-decoration:none; color:black">INDIVISUAL</a></button>
 
<button type="button" name="btn-click" class="cart-btn1"><a href="events"style="text-decoration:none; color:black">EVENT</a></button>

<button type="button" name="btn-click" class="cart-btn1"><a href="business"style="text-decoration:none; color:black">BUSINESS</a></button>

 </div>
  <center>

 <div class="r-container">
 <div class="r-btn">
 <p id="statement"><b> Welcome to the business records</b></p></br>
 
 <form action="" >
 <p id="btn-type"><b>type of business</b>
  <input type="radio" name="univ" id="place1" value="university"> University
  <input type="radio" name="comp" id="place2" value="company"> Company</p>
</form>
</div>

<?php echo form_open('business'); ?>
<form action="" method="POST" name="theform">
  <input type="text" id="fm1" name="frstname1" placeholder="Enter your name">
  <?php echo form_error("frstname1"); ?>
  <input type="email" id="fm5" name="frstname2" placeholder="Enter email">
  <?php echo form_error("frstname2"); ?>
  <input type="password" id="fm6" name="frstname3" placeholder="Enter password">
  <?php echo form_error("frstname3"); ?>
 <input class="send2" type="submit" value="SEND">
 </form></center>
  <?php



?>
 
 </div>
 </div>
 </div>
 