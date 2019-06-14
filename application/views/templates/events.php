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
	<li><a href="login">  <b> LOGIN</b> </a> </li>	</ul>
</nav>
</div>
<center><p>Home -> SIGN UP </p></center>
<center><h2>SIGN UP</h2></center>
</div>
 </header>
<div class="x-container">
 <div class="y-container">
 <div class="s-container">
 <h2> Select the type of user</h2>
 <button type="button" name="btn-click" class="cart-btn1"><a href="individual" style="text-decoration:none; color:black">INDIVISUAL</a></button>
 
<button type="button" name="btn-click" class="cart-btn1"><a href="events"style="text-decoration:none; color:black">EVENT</a></button>

<button type="button" name="btn-click" class="cart-btn1"><a href="business"style="text-decoration:none; color:black">BUSINESS</a></button></b>

 </div>
 
 <div class="r-container">
 <center>
 <p id="statement"><b> Welcome to the event log</b></p>
 <?php echo form_open('events'); ?>
 <form action="" method="POST" name="theform">
 
 <input type="text" id="fmm1" name="frstname1" placeholder="Enter your name"></br>
 <?php echo form_error("frstname1"); ?>
 
 <input type="text" id="fmm2" name="frstname2" placeholder="Enter last name"></br> 
<?php echo form_error("frstname2"); ?>
 
  <input type="email" id="fmm3" name="frstname3" placeholder="Enter email"></br>
 <?php echo form_error("frstname3"); ?>
  
 <input type="password" id="fmm4" name="frstname4" placeholder="Enter password"></br>
<?php echo form_error("frstname4"); ?>

 <input class="send2" type="submit" value="SEND"></b>
 </form></center>
 </div>
 </div>
 </div>
