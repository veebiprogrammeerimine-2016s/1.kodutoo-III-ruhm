<?php

	//var_dump($_GET);
	//echo "<br>";
	//var_dump($_POST);
	//kas on üldse olemas
	
	$signupEmailError = "";
	
	if(isset($_POST["signupEmail"])) {
		
		//oli olemas, ehk keegi vajutas nuppu
		//kas oli tühi
		if (empty ($_POST["signupEmail"])) {
			
			//oli tühi 
			$signupEmailError = "you have to enter your email";
			
	
	
		}
	}

	$signupPasswordError = "";
	
	if(isset($_POST["signupPassword"])) {
		
		//oli olemas, ehk keegi vajutas nuppu
		//kas oli tühi
		if (empty ($_POST["signupPassword"])) {
			
			//oli tühi 
			$signupPasswordError = "you have to choose a password";
			
	} else {
		
		//ei olnud midagi
		
		//kas pikkus oli vähemalt 8 
		
		if (strlen ($_POST["signupPassword"]) < 8 ) {
			
			$signupPasswordError = "password must be at least 8 characters long";
			}
		}
		
	}



?>


<!DOCTYPE html>
<html>
	<head>
		<title>Login page</title>
	</head>
	<body>

		<h1>Log in</h1>
		
		<form method="POST">
		<!--kommentaar-->
			<input placeholder="email" name="loginEmail" type="email">
			
			<br><br>
			
			<input placeholder="password" name="loginPassword" type="password">
			
			<br><br>
			
			<input type="submit" value="Log in">
			
		
		</form>
		
		
		<h1>Sign up</h1>
		
		<form method="POST">
			
			<input placeholder="email" name="signupEmail" type="email"> <?php echo $signupEmailError; ?>
			
			<br><br>
			
			<input placeholder="password" name="signupPassword" type="password"> <?php echo $signupPasswordError; ?>
			
			<br><br>
			
			<input type="submit" value="sign up">
			
		
		</form>
		

	</body>
</html>