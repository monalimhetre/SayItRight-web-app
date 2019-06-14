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
<h1 class="list"> List of Events</h1></center>
<div class="wtable">
 
  <a href="<?php echo base_url('eventspage/add')?>"><button>ADD</button></a>  
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
           if($this->uri->segment(2) == "inserted")  
           {  
            echo '<p class="text-success">Data Inserted</p>';  
           }  
           if($this->uri->segment(2) == "updated")  
           {  
                echo '<p class="text-success">Data Updated</p>';  
           }  
           ?> 

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

<td><a href="#" class="insert_data" name="hidden" id="<?php echo $row->id; ?>"><button>ADD</button></a></td>

<td><a href="#" class="delete_data" id="<?php echo $row->id; ?>"><button>DELETE</button></a></td>  

<td><a href="eventspage/edit/<?php echo $row->id;?>"><button>EDIT</button></a></td>
</tr>

 <?php       
                }  
           }?>




</table>
</div>


<script type="text/javascript">
	$(document).ready(function(){  
           $('.delete_data').click(function(){  
                var id = $(this).attr("id");  
                if(confirm("Are you sure you want to delete this?"))  
                {  
                     window.location="<?php echo base_url(); ?>eventspage/delete_data/"+id;  
                }  
                else  
                {  
                     return false;  
                }  
           });  
      });  
      </script>  