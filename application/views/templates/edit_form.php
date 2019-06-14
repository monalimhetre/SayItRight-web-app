<div id="wrapper">
<header>
<div class="container">
<nav>
	
<ul>
<a href="home"><img src="assets/imgsay/logo.png" alt="logo" class="logo"/></a>
	<li><a href="home"><b>HOME</b></a></li>
	<li><a href="conferences"><b> CONFERENCES</b></a></li>
	<li><a href="eventspage"><b>EVENTS</b></a></li>
	<li><a href="myconferences"><b>MY CONFERENCES</b></a></li>
	<li><a href="myevents"><b>MY EVENTS</b></a></li>
	<li><a href="profile"><b>SETTINGS</b> </a> </li>
	</ul>
</nav>
</div>
</header>


<?php 
if(isset($data))
{
?>

<div class="editform">
	<center>update user</center>
	<center>
<?php echo form_open('eventspage/updateuser');?>
<form method="post" action="">
<input type="text" name="conference" id="f1" placeholder="conferences" value="<?php echo $data->conference;?>"></br>
<input type="text" name="description" id="f2" placeholder="description"value="<?php echo $data->description;?>"></br>
<input type="text" name="date" id="f3" placeholder="date"value="<?php echo $data->date;?>"></br>
<input type="text" name="sede" id="f4" placeholder="sede"value="<?php echo $data->sede;?>"></br>
<input type="text" name="confirmation" id="f5" placeholder="confirmation"value="<?php echo $data->confirmation;?>"></br></br>
<input type="submit" value="Update">
</form></center>
</div>


<?php
}
else
{
	?>
<div class="editform">
	<center>Add user</center>
	<center>

<form method="post" action="">
<input type="text" name="conference" id="f1" placeholder="conferences"></br>
<input type="text" name="description" id="f2" placeholder="description"></br>
<input type="text" name="date" id="f3" placeholder="date"></br>
<input type="text" name="sede" id="f4" placeholder="sede"></br>
<input type="text" name="confirmation" id="f5" placeholder="confirmation"></br></br>
<input type="submit" value="Add">
</form></center>
</div>

	<?php
}

?>