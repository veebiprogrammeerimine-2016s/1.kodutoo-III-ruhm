<?php
	$age=5;

	if($age<18){
		//true - on väiksem kui 18
		echo "alaealine";
	}

	else{
		//muul juhul
		echo "täisealine";
	}
?>

<br>

<?php
	echo "<table><tr>";
	//hakkame vanuse kohta v'ljatrykki tegema
	/*
	1) yks alguses $i=0
	2) iga kord enne sisu (siinkohal kas $i on v'iksem kui vanus)
	3) iga kord p'rast sisu

	1)kas i on v'iksem kui tegur
	2)kui jah siis toimub tegevus
	3) liidame i-le yhe


	*/
	for($i=1; $i<=$age; $i=$i+1 ){
		echo  $i . "palju ";
	}
	echo "õnne!";
?>
<br>
<?php

echo date('w , d , M , Y , h:m:s');

?>