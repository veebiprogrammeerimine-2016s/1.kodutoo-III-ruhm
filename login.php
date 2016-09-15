<?php

	//var_dump($_GET);
	//echo "<br>";
	//var_dump($_POST);

	$signupEmailError = "";
	$signupPasswordError = "";
	
	//kas on olemas
	if (isset ($_POST["signupEmail"])) {
		
		//oli olemas, vajutati nuppu
		if (empty ($_POST["signupEmail"])) {
		
		//oli tõesti tühi
		$signupEmailError = "See väli on kohustuslik";
		
		}
			
	
	}
	$loginEmailError = "";
	
	//kas on olemas
	if (isset ($_POST["loginEmail"])) {
		
		//oli olemas, vajutati nuppu
		if (empty ($_POST["loginEmail"])) {
		
		//oli tõesti tühi
		$loginEmailError = "See väli on kohustuslik";
		
		}
			
	
	}
		$signupPasswordError = "";
	
	//kas on olemas
	if (isset ($_POST["signupPassword"])) {
		
		//oli olemas, vajutati nuppu
		if (empty ($_POST["signupPassword"])) {
		
		//oli tõesti tühi
		$signupPasswordError = "See väli on kohustuslik";
		
		} else {
			
			//oli midagi, mitte tühi
			
			//kas pikkus vähemalt 8
			if (strlen ($_POST["signupPassword"]) < 8) {
				
				$signupPasswordError = "Parool peab olema vähemalt 8 tähemärki pikk";
				
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

		<h1>Logi Sisse</h1>
	
		<form method="POST">
			<label>E-post</label><br>
			<input name="loginEmail" type="email">
			
			<br><br>
			<label>Parool</label><br>
			<input name="loginPassword" type="password">
			
			<br><br>
			
			<input type="submit" value="Logi Sisse" >
		
		</form>

	</body>
</html>



<h1>Loo Kasutaja</h1>
	
		<form method="POST">
		
			<label>E-post</label><br>
			<input name="signupEmail" type="email"> <?php echo $signupEmailError; ?>
			
			<br><br>
			<label>Parool</label><br>
			<input name="signupPassword" type="password"> <?php echo $signupPasswordError; ?>
			
			<br><br>
			
			<input type="submit" value="Loo Kasutaja" >
		
		</form>
	
	</body>
</html>