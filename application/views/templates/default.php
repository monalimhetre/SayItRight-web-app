
	<div id="wrapper1">
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
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
	$('.menu').click(function(){
		$('ul').toggleClass('active');
	})
	})
  </script>
</div>
</header>

<div class="msg">
<h1 class="boldtext"><p>For good </br>communication <h1 id="redtext">
Say it Right</h1><h1></br>is a tool that</br> you should use</p></h1></br>
<p id="smalltext">You can see our video tutorial of use with just presing this button.</p>
<i class="far fa-play-circle" style="font-size:48px;"></i><p id="vid">WATCH THE VIDEO</p>
</div>

<nav id="Subscribe">
    <h1 class="Subscribe_text">Subscribe Our Newsletter<p class="below_text">We won't send any kind of spam</p></h1>
	 <form action="" method="POST">
	<input  id="input1" name="emailaddress"type="email" placeholder="Enter email address" required="required" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$">
	<input id= "sbttn1"type="submit" value="SUBSCRIBE">
	</form>
</nav>