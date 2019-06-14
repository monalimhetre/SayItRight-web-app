<div id="wrapper">
<header>
<div class="container">
<nav>
	
<ul>
<a href="home"><img src="assets/imgsay/logo.png" alt="logo" class="logo"/></a>
	<li><a href="login_user"><b>HOME</b></a></li>
	<li><a href="conferences"><b> CONFERENCES</b></a></li>
	<li><a href="eventspage"><b>EVENTS</b></a></li>
	<li><a href="myconferences"><b>MY CONFERENCES</b></a></li>
	<li><a href="myevents"><b>MY EVENTS</b></a></li>
	<li><a href="profile"><b>SETTINGS</b> </a> </li>
	</ul>
</nav>
</div>
</header>
<div class ="container13">
<p id="welcome"><b>Welcome to your profile</b></p><hr>
<div class="container11">
<img src="assets/imgsay/user.jpg" alt="cart_1-image" class="u1-image"/></br>
<button type="button" id="cbutn">CHANGE IMAGE</button>

</div>

<div class="container12">
<div class="buy">
	<?php  
           if($fetch_data->num_rows() > 0)  
           {  
                foreach($fetch_data->result() as $row)  
                {  
           ?>  
<form action="" method="POST" name="theform">
<input type="text" id="ffn" name="firstname1" placeholder="Enter First Name" value="<?php echo $row->name;?>">
<span id="pf1"></span>
<input type="text" id="fln" name="firstname2" placeholder="Enter Last Name" value="<?php echo $row->last_name;?>"></br>
<span id="pf2"></span>
<input type="text" id="fad" name="firstname3" placeholder="Enter place work" value="<?php echo $row->workplace;?>"></br>
<span id="pf3"></span>
<input type="text" id="fapt" name="firstname4" placeholder="Enter school" value="<?php echo $row->school;?>"></br>
<span id="pf4"></span>
<input type="email" id="femail" name="firstname5" placeholder="Enter Email"required="required" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" value="<?php echo $row->email;?>">
<span id="pf5"></span>
<input type="password" id="fcity" name="firstname6" placeholder="Enter Password" pattern=".{8,}" title="Six or more characters" value="<?php echo $row->password;?>"></br>
<span id="pf6"></span>
    <?php       
                }  
           }  
           else  
           {  
           ?>  
                <tr>  
                     <td colspan="5">No Data Found</td>  
                </tr>  
           <?php  
           }  
           ?> 
</form>
<p id="pass">Change Password</p>
</div>
<button type="button" id="vbutn">SAVE CHANGES</button>


</div>
</div>

<script>
		 document.theform.firstname1.onfocus=function(){
			 document.getElementById('pf1').innerHTML="Please enter first name";
		 }
		 document.theform.firstname1.onblur=function(){
			 document.getElementById('pf1').innerHTML="";
		 }
		  document.theform.firstname2.onfocus=function(){
			 document.getElementById('pf2').innerHTML="Please enter last name";
		 }
		 document.theform.firstname2.onblur=function(){
			 document.getElementById('pf2').innerHTML="";
		 }
		
		 document.theform.firstname3.onfocus=function(){
			 document.getElementById('pf3').innerHTML="Please enter work place";
		 }
		 document.theform.firstname3.onblur=function(){
			 document.getElementById('pf3').innerHTML="";
		 }
		
		 document.theform.firstname4.onfocus=function(){
			 document.getElementById('pf4').innerHTML="Please enter first name";
		 }
		 document.theform.firstname4.onblur=function(){
			 document.getElementById('pf4').innerHTML="";
		 }
		  document.theform.firstname5.onfocus=function(){
			 document.getElementById('pf5').innerHTML="Please enter last name";
		 }
		 document.theform.firstname5.onblur=function(){
			 document.getElementById('pf5').innerHTML="";
		 }
		
		 document.theform.firstname6.onfocus=function(){
			 document.getElementById('pf6').innerHTML="Please enter work place";
		 }
		 document.theform.firstname6.onblur=function(){
			 document.getElementById('pf6').innerHTML="";
		 }
		 
</script>
