<?php
  
  $age = 5;
  
  if  ($age < 18) {
	
	//true - on väiksem kui 18
	   echo "alaealine";
  
  } else {
	   //muul juhul
	   echo "täisealine"; 
   }

   
?>

<br>

<?php

    for ($i = 1; $i <= $age; $i = $i + 1) {
		
		echo $i."palju ";
	
		
	}
	
	echo "õnne!";
?>

<br>

<?php

  echo date("d.m.Y");
  
  echo "<br>";
  
  echo date("z/365");
  
  ?>
  
  