
 <?php  
 session_start();
           if(count($fetch_data)>0)  
           {
                foreach($fetch_data->result() as $row)  
                {  $data[]=$row;
           
		$landing_page = $row->regtype;
		$_SESSION["regtype"] = $landing_page;
		$_SESSION["id"] = $row->id;
		if(strcmp($landing_page, 'events') === 0) {
			header("Location: base_url().eventspage");
		} else if(strcmp($landing_page, 'business') === 0) {
			header("Location: base_url().conferences");
		} else {
			header("Location: base_url().login_user");
	    }
       
    }  
 }
 ?>



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
<center><p>Home -> LOGIN </p></center>
<center><h2>LOGIN</h2></center>
</div>
 </header>
 <div class="buyus" >
 <?php echo form_open('login'); ?>

	<form action="" method="POST" name="theform">
	<input type="email" id="fe" name="Email" placeholder="Enter Email">
	<?php echo form_error("Email"); ?>
	<input type="password" id="fp" name="Password" placeholder="Enter Password">
	<?php echo form_error("Password"); ?>
	<input type="submit" id="sbutn" value="SEND" name='submit'>
</form>
</div>
		
		&nbsp;
		&nbsp;
		
