<?php

	//var_dump($_GET);
	//echo "<br>";
	//var_dump($_POST);
	
	

	$signupEmailError = "";
	$signupEmail = "";
	
	//kas on üldse olemas
	if (isset ($_POST ["signupEmail"])) {
		
		//oli olemas, ehk keegi vajutas nuppu
		//kas oli tühi
		if (empty ($_POST ["signupEmail"])) {
			
			//oli tõesti tühi
			$signupEmailError = "See v2li on kohustuslik!"; 
		
		} else {
			//kõik korras, email ei ole tühi ja on olemas
			$signupEmail = $_POST ["signupEmail"];
			
		}	
		
	}
	
	$signupPasswordError = "";
	
	//kas on üldse olemas
	if (isset ($_POST ["signupPassword"])) {
		
		//oli olemas, ehk keegi vajutas nuppu
		//kas oli tühi
		if (empty ($_POST ["signupPassword"])) {
			
			//oli tõesti tühi
			$signupPasswordError = "Parool puudulik!"; 
			
		} else {
			//oli midagi, ei olnud tühi
			
			//kas pikkus vähemalt 8
			if (strlen ($_POST ["signupPassword"]) <8 ) {
				
				$signupPasswordError = "Parool peab olema v2hemalt 8 t2hem2rki!";
				
			}
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
		
			<label>E-post</label><br>
			<input name= "loginemail" type= "email"><?php echo $signupEmailError; ?>
			<input name loginemail type= "email" value="<?php echo $signupEmail;?> <?php echo $signupEmailError; ?>
			
			<br><br>
			
			<label>Parool</label><br>
			<input name="loginpassword" type="password">
			
			<br><br>
			
			<input type= "submit">
			
		</form>

	</body>
</html>
		<h1>Loo kasutaja</h1>
		
		<form method="POST"> 
		
			<label>Sisesta oma sünnikuupäev</label><br>
			<input type="date" name="birthday">
			
			<br><br>
			
			<label>Sisesta oma sugu</label><br>
			<input type="radio" name="gender" value="male" checked> Mees<br>
			<input type="radio" name="gender" value="female"> Naine<br>
			
			<br><br>
			
			<label>Sisesta oma e-mail</label><br>
			<input name= "signupEmail" type= "email"> <?php echo $signupEmailError; ?>
			
			<br><br>
			
			<label>Loo parool</label><br>
			<input name="signupPassword" type="password"> <?php echo $signupPasswordError;?>
			
			<br><br>
			
			
			<input type= "submit" value="Loo kasuta->">
			
		</form>

	</body>
</html>
