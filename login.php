<?php

	//var_dump($_GET);
	//echo "<br>";
	//var_dump($_POST);
	
	$signupEmailError = "";

	//kas on üldse olemas
	if (isset ($_POST["signupEmail"])) {
		
		//oli olemas, ehk keegi vajutas nuppu
		if (empty ($_POST["signupEmail"])) {
			
			//oli tõesti tühi
			$signupEmailError = "See väli on kohustuslik";
		}
	}
	

	$signupPasswordError = "";

	//kas on üldse olemas
	if (isset ($_POST["signupPassword"])) {
		
		//oli olemas, ehk keegi vajutas nuppu
		if (empty ($_POST["signupPassword"])) {
			
			//oli tõesti tühi
			$signupPasswordError = "See väli on kohustuslik";
			
		} else {
			
			//oli midagi, ei olnud tühi
			
			//kas pikkus vähemalt 8
			
			if (strlen ($_POST["signupPassword"]) < 8 ) {
			
				$signupPasswordError = "Parool peab olema vähemalt 8 tähemärki pikk";
				
			}
			
		}
		
	}
	
	$signupLastnameError = "";

	//kas on üldse olemas
	if (isset ($_POST["signupLastname"])) {
		
		//oli olemas, ehk keegi vajutas nuppu
		if (empty ($_POST["signupLastname"])) {
			
			//oli tõesti tühi
			$signupLastnameError = "See väli on kohustuslik";
			
		} else {
			
			//oli midagi, ei olnud tühi
			
			//kas pikkus vähemalt 8
			
			if (strlen ($_POST["signupLastname"]) > 50 ) {
			
				$signupLastnameError = "Perekonnanimi ei saa olla pikkem kui 50 tähemärki.";
				
			}
			
		}
		
	}
	
	$signupFirstnameError = "";

	//kas on üldse olemas
	if (isset ($_POST["signupFirstname"])) {
		
		//oli olemas, ehk keegi vajutas nuppu
		if (empty ($_POST["signupFirstname"])) {
			
			//oli tõesti tühi
			$signupFirstnameError = "See väli on kohustuslik";
			
		} else {
			
			//oli midagi, ei olnud tühi
			
			//kas pikkus vähemalt 8
			
			if (strlen ($_POST["signupFirstname"]) > 50 ) {
			
				$signupFirstnameError = "Eesnimi ei saa olla pikkem kui 50 tähemärki";
				
			}
			
		}
		
	}
	
	$signupDateError = "";

	//kas on üldse olemas
	if (isset ($_POST["signupDate"])) {
		
		//oli olemas, ehk keegi vajutas nuppu
		if (empty ($_POST["signupDate"])) {
			
			//oli tõesti tühi
			$signupDateError = "See väli on kohustuslik";
		}
	}
	
	
	$loginEmailError = "";

	//kas on üldse olemas
	if (isset ($_POST["loginEmail"])) {
		
		//oli olemas, ehk keegi vajutas nuppu
		if (empty ($_POST["loginEmail"])) {
			
			//oli tõesti tühi
			$loginEmailError = "See väli on kohustuslik";
		}
	}
	
	
	$loginPasswordError = "";

	//kas on üldse olemas
	if (isset ($_POST["loginPassword"])) {
		
		//oli olemas, ehk keegi vajutas nuppu
		if (empty ($_POST["loginPassword"])) {
			
			//oli tõesti tühi
			$loginPasswordError = "See väli on kohustuslik";
		}
	}
	
		
?>

<!DOCTYPE html>
<html>
	
	<head>
		<title>Sisselogimise leht</title>
	</head>
	
	<body>
		<fieldset>
		<legend><h1>Sisselogimine</h1></legend>
		
		<form method="POST">
			<input placeholder="E-post" name="loginEmail" type="email"> <font style="color:red">  <?php echo $loginEmailError; ?> </font>
			<br><br>
			<input placeholder="Parool" name="loginPassword" type="password"> <font style="color:red">   <?php echo $loginPasswordError; ?>  </font>
			<br><br>
			<input type="submit" value="Logi sisse">
			
		</form>
		</fieldset>
	</body>
	
	<br>
	
	<body>
		<fieldset>
		<legend><h1>Registreerimine</h1></legend>
		
		<form method="POST">
			<input placeholder="E-post" name="signupEmail" type="email"> <font style="color:red">  <?php echo $signupEmailError;  ?>  </font>
			<br><br>
			<input placeholder="Parool" name="signupPassword" type="password"> <font style="color:red">   <?php echo $signupPasswordError; ?>  </font>
			<br><br><br>
			<input placeholder="Eesnimi" name="signupFirstname" type="text"> <font style="color:red">  <?php echo $signupFirstnameError; ?>  </font>
			<br><br>
			<input placeholder="Perekonnanimi" name="signupLastname" type="text"> <font style="color:red"> <?php echo $signupLastnameError; ?> </font>
			<br><br>
			<label> <b>Sugu: </b> </label>           
			<input type="radio" name="gender" value="male" checked> Mees 
			<input type="radio" name="gender" value="female"> Naine 
			<br><br>
			<label> <b>Sünnikuupäev:  </b></label>
			<input name="signupDate" type="date">  <font style="color:red"> <?php echo $signupDateError; ?> </font>
			<br><br>
			<input placeholder="Telefon" name="phonenumber" type="tel">
			<br><br>
			<input type="submit" value="Loo kasutaja">
		</form>
		</fieldset>
	</body>

	
</html>

<style>

body {
	background: #FAFAFA;
	font-family: Arial;
}

</style>
