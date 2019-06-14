<?php
echo "Records from database<br/>";
foreach($records as $rec){
	echo $rec->id." ".$rec->name." ".$rec->age."<br/>";
}
?>