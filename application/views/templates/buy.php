<?php

echo "Records from database<br/>";
foreach($records as $rec){
  echo $rec->images." ".$rec->price." ".$rec->text."<br/>";

  
}

?>
<div class="cart1">
    <img src="<?php foreach($records as $rec){ echo $data['records'];} ?>" 
    	alt="cart_1-image" class="f1-image"/>
            
</div>
 