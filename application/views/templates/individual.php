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
 <div class="f-container">
 <div class="s-container">
 <h2> Select the type of user</h2>
 <button type="button" name="btn-click" class="cart-btn1"><a href="individual" style="text-decoration:none; color:black">INDIVISUAL</a></button>
 
<button type="button" name="btn-click" class="cart-btn1"><a href="events" style="text-decoration:none; color:black">EVENT</a></button>

<button type="button" name="btn-click" class="cart-btn1"><a href="business" style="text-decoration:none; color:black">BUSINESS</a></button></b>

 </div>

 <div class="r-container">
 <center>
 <p id="statement"><b> Welcome to the individual registration</b></p>
 
 <?php echo form_open('individual'); ?>
 <form action="" method="POST"name="theform">
 <input type="text" id="fmt1" name="frstname1" placeholder="Enter your name">
<?php echo form_error("frstname1"); ?>
 <input type="text" id="fmt2" name="frstname2" placeholder="Enter last name">
<?php echo form_error("frstname2"); ?>
 <input type="text" id="fmt3" name="frstname3" placeholder="Enter place work">
<?php echo form_error("frstname3"); ?>
 <input type="text" id="fmt4" name="frstname4" placeholder="Enter school">
<?php echo form_error("frstname4"); ?>
 <input type="email" id="fmt5" name="frstname5" placeholder="Enter email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$">
<?php echo form_error("frstname5"); ?>
 <input type="password" id="fmt6" name="frstname6" placeholder="Enter password"pattern=".{8,}" title="Six or more characters">
<?php echo form_error("frstname6"); ?>
 <input class="send2" type="submit" value="SEND"></b>
 </form>
 </center>
 
 <?php



?>
 </div>
 </div>
 

		 