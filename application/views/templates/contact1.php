


 <div id="wrapper" class="wrapper">
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
<center><p>Home -> CONTACT </p></center>
<center><h2>CONTACT US</h2></center>
</div>
</header>	

<div class="division">
  


    <?php echo form_open('contactController'); ?>
  <table id="division"><tr>
  <td id="td">
  <input type="text" class="fname"id="fname" name="firstname1" placeholder="Enter your name">
  <?php echo form_error("firstname1"); ?>
  <input type="text" class="lname"id="lname" name="firstname2" placeholder="Enter Last name">  
  <?php echo form_error("firstname2"); ?>
  <input type="text" class="tphone"id="tphone" name="firstname3" placeholder="Telephone" >
  <?php echo form_error("firstname3"); ?>
  </td>
  <td id="td">
  <textarea rows="4" cols="50" id="mesg" name="message-box" placeholder="Enter Message"></textarea>
  </td>
</tr>
</table>      
        <input class="send-msg" type="submit" value="SEND MESSAGE"></b>
</form>
</div>  