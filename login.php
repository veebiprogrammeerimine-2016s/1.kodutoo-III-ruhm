<?php 

//var_dump($_GET); 
//echo "<br>";
//var_dump ($_POST);

$signupPasswordError = "";

//kas on �ldse olemas
If (isset ($_POST["signupPassword"])) {
	
	//oli olemas, ehk keegi vajutas nuppu
	if (empty ($_POST["signupPassword"])) {
		//oli t�esti t�hi
		$signupPasswordError = "see v�li on t�itmata";
	} else {
		//oli midagi ei olnud t�hi
		
		// kas pikkus v�hemalt 8 
		if (strlen ($_POST["signupPassword"]) < 8 ) {
			$signupPasswordError = "Parool peab olema v�hemalt 8 tm pikk";
		}
	}
}
?>


<?php 

//var_dump($_GET); 
//echo "<br>";
//var_dump ($_POST);

$signupEmailError = "";

//kas on �ldse olemas
If (isset ($_POST["signupEmail"])) {
	
	//oli olemas, ehk keegi vajutas nuppu
	if (empty ($_POST["signupEmail"])) {
		//oli t�esti t�hi
		$signupEmailError = "see v�li on kohustuslik";
	}
}
?>
<!DOCTYPE html>
<html>
     <head>
          <title>Sisselogimise leht</title>
     </head>
      <body>

          <h1>Logi sisse</h1>
         
		 <form method="POST">
		 
		     <input placeholder="E-post" name="loginEmail" type="email">
		     
			 <br><br>
			 
		     <input placeholder="parool" name="loginPassword" type="password">
             
			 
			 <br><br>
			 
			 <input type="submit">
			 
		 </form>

     </body>
</html>



 <h1>Loo kasutaja</h1>
         
		 <form method="POST">
		 
		 
		      
		     <input placeholder="E-post" name="signupEmail" type="email"> <?php echo $signupEmailError; ?>
		     
			 <br><br>
			 
		     <input placeholder="parool" name="signupPassword" type="password"> <?php echo $signupPasswordError; ?>
             
			 
			 <br><br>
			 
			 <input type="submit" value="Loo kasutaja">
			 
		 </form>

     </body>
</html>