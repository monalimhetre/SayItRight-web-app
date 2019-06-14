<style>
body {font-family: Arial, Helvetica, sans-serif;}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
  position: relative;
  background-color: white;
  margin: auto;
  padding: 0;
  border: 1px solid #888;
  width: 30%;
  height: 380px;
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
  -webkit-animation-name: animatetop;
  -webkit-animation-duration: 0.4s;
  animation-name: animatetop;
  animation-duration: 0.4s
}

/* Add Animation */
@-webkit-keyframes animatetop {
  from {top:-300px; opacity:0} 
  to {top:0; opacity:1}
}

@keyframes animatetop {
  from {top:-300px; opacity:0}
  to {top:0; opacity:1}
}

/* The Close Button */
.close {
  color: black;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}

/* The Close1 Button */
.close1 {
  color: black;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close1:hover,
.close1:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}

/* The Close2 Button */
.close2 {
  color: black;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close2:hover,
.close2:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}

/* The Close3 Button */
.close3 {
  color: black;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close3:hover,
.close3:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}

/* The Close4 Button */
.close4 {
  color: black;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close4:hover,
.close4:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}

/* The Close5 Button */
.close5 {
  color: black;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close5:hover,
.close5:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}

.modal-header {
  padding: 2px 16px;
  background-color: white;
  color: black;
}

.modal-body {padding: 30px 16px;
float:right;
}

.modal-footer {
  padding: 2px 16px;
  background-color: white;
  color: black;
  
}
</style>

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
<center><p>Home -> Buy From Us </p></center>
<center><h2>BUY FROM US</h2></center>
</div>
</header>


<div id="myModal" class="modal">
  <!-- Modal content -->
  <div class="modal-content">
    <div class="modal-header">
      <span class="close">&times;</span>
      <h3 style="color:#808080">Add to Cart</h3>
    </div>
    <div class="modal-body">
   
     
      <?php 
   if($fetch_data->num_rows() > 0)  
      {  
        foreach($fetch_data->result() as $row)  
                {  
           ?>
  <div class="demo">
  <div class="part1">
    <img src="<?php echo $row->images;?>" alt="Snow" width="200" class="img-responsive">
  </div>
 
  <div class="part2">
  <h4 style="color:#808080">Product quantity</h4>
  <form method="post" action="<?php echo site_url('buyfromus/contact_form');?>">
  <input type="text" id="box" name="uname1"/>
  <div class="part3" style="color:red">
    <p>Note:<?php echo $row->text;?> </p>
  </div>  </div>
</div>
 <?php       
                }  
           }?>
    </div>
  
    <div class="modal-footer">
      <input class="bttn" type="button" value="Close"></b>
  
    <input class="bttn1" type="submit" value="Add to Cart"></b></form>
    </div>
  </div>
</div>


<div id="myModal1" class="modal">
  <!-- Modal content -->
  <div class="modal-content">
    <div class="modal-header">
      <span class="close1">&times;</span>
      <h3 style="color:#808080">Add to Cart</h3>
    </div>
    <div class="modal-body">
   
      <?php 
   if($fetch1_data->num_rows() > 0)  
      {  
        foreach($fetch1_data->result() as $row)  
                {  
           ?>
  <div class="demo">
  <div class="part1">
    <img src="<?php echo $row->images;?>" alt="Snow" width="200" class="img-responsive">
  </div>
  <div class="part2">
  <h4 style="color:#808080">Product quantity</h4>
  <form method="post" action="<?php echo site_url('buyfromus/contact_form');?>">
  <input type="text" id="box" name="uname2">
  <div class="part3" style="color:red">
    <p>Note:<?php echo $row->text;?> </p>
  </div>  </div>
</div> <?php       
                }  
           }?>
    </div>
  
    <div class="modal-footer">
      <input class="bttn" type="button" value="Close"></b>
    
    <input class="bttn1" type="submit" value="Add to Cart"></b></form>
    </div>
  </div>
</div>


<div id="myModal2" class="modal">
  <!-- Modal content -->
  <div class="modal-content">
    <div class="modal-header">
      <span class="close2">&times;</span>
      <h3 style="color:#808080">Add to Cart</h3>
    </div>
    <div class="modal-body">
   
      <?php 
   if($fetch2_data->num_rows() > 0)  
      {  
        foreach($fetch2_data->result() as $row)  
                {  
           ?>
  <div class="demo">
  <div class="part1">
    <img src="<?php echo $row->images;?>" alt="Snow" width="200" class="img-responsive">
  </div>
  <div class="part2">
  <h4 style="color:#808080">Product quantity</h4>
  <form method="post" action="<?php echo site_url('buyfromus/contact_form');?>">
  <input type="text" id="box" name="uname3">
  <div class="part3" style="color:red">
    <p>Note:<?php echo $row->text;?> </p>
  </div>  </div>
</div> <?php       
                }  
           }?>
    </div>
  
    <div class="modal-footer">
      <input class="bttn" type="button" value="Close"></b>
    
    
    <input class="bttn1" type="submit" value="Add to Cart"></b></form>

    </div>
  </div>
</div>


<div id="myModal3" class="modal">
  <!-- Modal content -->
  <div class="modal-content">
    <div class="modal-header">
      <span class="close3">&times;</span>
      <h3 style="color:#808080">Add to Cart</h3>
    </div>
    <div class="modal-body">
   
      <?php 
   if($fetch3_data->num_rows() > 0)  
      {  
        foreach($fetch3_data->result() as $row)  
                {  
           ?>
  <div class="demo">
  <div class="part1">
    <img src="<?php echo $row->images;?>" alt="Snow" width="200" class="img-responsive">
  </div>
  <div class="part2">
  <h4 style="color:#808080">Product quantity</h4>
  <form method="post" action="<?php echo site_url('buyfromus/contact_form');?>">
  <input type="text" id="box" name="uname4">
  <div class="part3" style="color:red">
    <p>Note:<?php echo $row->text;?> </p>
  </div>  </div>
</div> <?php       
                }  
           }?>
    </div>
  
    <div class="modal-footer">
      <input class="bttn" type="button" value="Close"></b>
    

    <input class="bttn1" type="submit" value="Add to Cart"></b></form>

    </div>
  </div>
</div>


<div id="myModal4" class="modal">
  <!-- Modal content -->
  <div class="modal-content">
    <div class="modal-header">
      <span class="close4">&times;</span>
      <h3 style="color:#808080">Add to Cart</h3>
    </div>
    <div class="modal-body">
   
      <?php 
   if($fetch4_data->num_rows() > 0)  
      {  
        foreach($fetch4_data->result() as $row)  
                {  
           ?>
  <div class="demo">
  <div class="part1">
    <img src="<?php echo $row->images;?>" alt="Snow" width="200" class="img-responsive">
  </div>
  <div class="part2">
  <h4 style="color:#808080">Product quantity</h4>
  <form method="post" action="<?php echo site_url('buyfromus/contact_form');?>">
  <input type="text" id="box" name="uname5">
  <div class="part3" style="color:red">
    <p>Note:<?php echo $row->text;?> </p>
  </div>  </div>
</div> <?php       
                }  
           }?>
    </div>
  
    <div class="modal-footer">
      <input class="bttn" type="button" value="Close"></b>
    
    
    <input class="bttn1" type="submit" value="Add to Cart"></b></form>

    </div>
  </div>
</div>


<div id="myModal5" class="modal">
  <!-- Modal content -->
  <div class="modal-content">
    <div class="modal-header">
      <span class="close5">&times;</span>
      <h3 style="color:#808080">Add to Cart</h3>
    </div>
    <div class="modal-body">
   
      <?php 
   if($fetch5_data->num_rows() > 0)  
      {  
        foreach($fetch5_data->result() as $row)  
                {  
           ?>
  <div class="demo">
  <div class="part1">
    <img src="<?php echo $row->images;?>" alt="Snow" width="200" class="img-responsive">
  </div>
  <div class="part2">
  <h4 style="color:#808080">Product quantity</h4>
  <form method="post" action="<?php echo site_url('buyfromus/contact_form');?>">
  <input type="text" id="box" name="uname6">
  <div class="part3" style="color:red">
    <p>Note:<?php echo $row->text;?> </p>
  </div>  </div>
</div> <?php       
                }  
           }?>
    </div>
  
    <div class="modal-footer">
      <input class="bttn" type="button" value="Close"></b>
    
    
    <input class="bttn1" type="submit" value="Add to Cart"></b></form>

    </div>
  </div>
</div>

<div class="white-container1">
    <center><h1 class="headers">Buy From Us</h1></center>
<?php 
   if($fetch_data->num_rows() > 0)  
      {  
        foreach($fetch_data->result() as $row)  
                {  
           ?>  
<nav>
        <div class="cart1">
            <img src="<?php echo $row->images;?>" alt="cart_1-image" class="f1-image"/>
            <div class="costs"><h4><?php echo $row->price;?></h4></div>
            <div class="costs-para"><p><?php echo $row->text;?></p></div>
            <button type="button" class="cart-button" id="mybtn" onclick="modalfunc()">ADD TO CART</button>  
        </div>

           <?php       
                }  
           }?>


           <?php  
           if($fetch1_data->num_rows() > 0)  
           {
                foreach($fetch1_data->result() as $row)  
                {  
           ?> 
        <div class="cart2">
            <img src="<?php echo $row->images;?>" alt="cart_1-image" class="f1-image"/>
            <div class="costs"><h4><?php echo $row->price;?></h4></div>
            <div class="costs-para"><p><?php echo $row->text;?></p></div>
            <button type="button" class="cart-button" id="mybtn1" onclick="modalfunc1()">ADD TO CART</button> 
        </div>
 <?php       
                }  
           }?>




          <?php  
           if($fetch2_data->num_rows() > 0)  
           {
                foreach($fetch2_data->result() as $row)  
                {  
           ?> 
        <div class="cart3">
            <img src="<?php echo $row->images;?>" alt="cart_1-image" class="f1-image"/>
            <div class="costs"><h4><?php echo $row->price;?></h4></div>
            <div class="costs-para"><p><?php echo $row->text;?></p></div>
            <button type="button" class="cart-button" id="mybtn2" onclick="modalfunc2()">ADD TO CART</button> 
        </div>
     <?php       
                }  
           }?>

      <?php  
           if($fetch3_data->num_rows() > 0)  
           {
                foreach($fetch3_data->result() as $row)  
                {  
           ?> 

         </nav>

         <nav>
        <div class="cart4">
            <img src="<?php echo $row->images;?>" alt="cart_1-image" class="f1-image"/>
            <div class="costs"><h4><?php echo $row->price;?></h4></div>
            <div class="costs-para"><p><?php echo $row->text;?></p></div>
            <button type="button" class="cart-button" id="mycup" onclick="modalfunc3()">ADD TO CART</button> 
        </div>
 <?php       
                }  
           }?>



          <?php  
           if($fetch4_data->num_rows() > 0)  
           {
                foreach($fetch4_data->result() as $row)  
                {  
           ?> 
        <div class="cart5">
            <img src="<?php echo $row->images;?>" alt="cart_1-image" class="f1-image"/>
            <div class="costs"><h4><?php echo $row->price;?></h4></div>
            <div class="costs-para"><p><?php echo $row->text;?></p></div>
            <button type="button" class="cart-button" id="mycup1" onclick="modalfunc4()">ADD TO CART</button> 
        </div>

 <?php       
                }  
           }?>



          <?php  
           if($fetch5_data->num_rows() > 0)  
           {
                foreach($fetch5_data->result() as $row)  
                {  
           ?> 
        <div class="cart6">
            <img src="<?php echo $row->images;?>" alt="cart_1-image" class="f1-image"/>
            <div class="costs"><h4><?php echo $row->price;?></h4></div>
            <div class="costs-para"><p><?php echo $row->text;?></p></div>
            <button type="button" class="cart-button" id="mycup2" onclick="modalfunc5()">ADD TO CART</button> 
        </div>
         <?php       
                }  
           }?>
</nav>
     
</div>




<nav id="Shopcart">
    <h1 class="Subscribe_text">View shopping cart<p class="below_text">You can see the products that you added to cart</p></h1>
    <a href="<?php echo base_url().buycontact; ?>"><input class="but" type="button" id="mynewbtn" value="Submit" ></b></a>
</nav>

<script>
// Get the modal
var modal = document.getElementById('myModal');
// Get the button that opens the modal
var btn = document.getElementById("mybtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
function modalfunc() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}



var modal1 = document.getElementById('myModal1');
var btn1 = document.getElementById("mybtn1");
// Get the <span> element that closes the modal
var span1 = document.getElementsByClassName("close1")[0];
function modalfunc1() {
  modal1.style.display = "block";
}
// When the user clicks on <span> (x), close the modal
span1.onclick = function() {
  modal1.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal1) {
    modal1.style.display = "none";
  }
}


var modal2 = document.getElementById('myModal2');
var btn2 = document.getElementById("mybtn2");
// Get the <span> element that closes the modal
var span2 = document.getElementsByClassName("close2")[0];
function modalfunc2() {
  modal2.style.display = "block";
}
// When the user clicks on <span> (x), close the modal
span2.onclick = function() {
  modal2.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal2) {
    modal2.style.display = "none";
  }
}


var modal3 = document.getElementById('myModal3');
var btn3 = document.getElementById("mycup");
// Get the <span> element that closes the modal
var span3 = document.getElementsByClassName("close3")[0];
function modalfunc3() {
  modal3.style.display = "block";
}
// When the user clicks on <span> (x), close the modal
span3.onclick = function() {
  modal3.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal3) {
    modal3.style.display = "none";
  }
}


var modal4 = document.getElementById('myModal4');
var btn4 = document.getElementById("mycup1");
// Get the <span> element that closes the modal
var span4 = document.getElementsByClassName("close4")[0];
function modalfunc4() {
  modal4.style.display = "block";
}
// When the user clicks on <span> (x), close the modal
span4.onclick = function() {
  modal4.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal4) {
    modal4.style.display = "none";
  }
}


var modal5 = document.getElementById('myModal5');
var btn5 = document.getElementById("mycup2");
// Get the <span> element that closes the modal
var span5 = document.getElementsByClassName("close5")[0];
function modalfunc5() {
  modal5.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span5.onclick = function() {
  modal5.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal5) {
    modal5.style.display = "none";
  }
}




</script>