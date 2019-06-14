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
<center>
<h1 class="list"> List of Conferences</h1></center>
<div class="wtable">

<table id="customers">
<tr>
<th>Conferences</th>
<th>Description</th>
<th>Date</th>
<th>Sede</th>
<th>Confirmation</th>
<th>Add</th>
<th>Delete</th>
<th>Edit</th>
</tr>


<?php 
   if($fetch_data->num_rows() > 0)  
      {  
        foreach($fetch_data->result() as $row)  
                {  
           ?> 
<tr>
<td><?php echo $row->conferences;?></td>
<td><?php echo $row->description;?></td>
<td><?php echo $row->date;?></td>
<td><?php echo $row->sede;?></td>
<td><?php echo $row->confirmation;?></td>
<th><button type="button">ADD</button></th>
<th><button type="button">DELETE</button></th>
<th><button type="button">EDIT</button></th>
</tr>

 <?php       
                }  
           }?>




</table>
</div>