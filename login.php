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
			
				$signupPasswordError = "Parool peab olema vähemalt 8tm pikk";
				
			}
			
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

		<h1>Logi sisse</h1>
		
		<form method="POST">
			<label>E-post</label>
			<input name="loginEmail" type="email"> <?php echo $loginEmailError; ?>
			<br><br>
			<label>Parool</label>
			<input name="loginPassword" type="password"> <?php echo $loginPasswordError; ?>
			<br><br>
			<input type="submit" value="Logi sisse">
			
		</form>

	</body>
	
		<body>

		<h1>Loo kasutaja</h1>
		
		<form method="POST">
			<label>E-post</label>
			<input name="signupEmail" type="email"> <?php echo $signupEmailError; ?>
			<br><br>
			<label>Parool</label>
			<input name="signupPassword" type="password"> <?php echo $signupPasswordError; ?>
			<br><br>
			<input type="submit" value="Loo kasutaja">
			
		</form>

	</body>
	
	
</html>

