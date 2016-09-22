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
	$signupUsernameError = "";
	
	if(isset($_POST["signupUsername"])) {
		
			if (empty ($_POST["signupUsername"])) {
				
				$signupNameError = "you have to enter a username";
			}
	}
	$signupNameError = "";
	
	if(isset($_POST["signupName"])) {
		
			if (empty ($_POST["signupName"])) {
				
				$signupNameError = "you have to enter your name";
			}
	}
	$signupPasswordError = "";
	$signupPasswordConfirmError = "";
	//$signupPassword = "";
	//$signupPassword = $_POST["signupPassword"];
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
		
		//lilith
		if ($_POST["signupPassword"] != $_POST["signupPasswordConfirm"]){
			$signupPasswordConfirmError = "password has to match";
			
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
			<input placeholder="username" name="loginUsername" type="text">
			
			<br><br>
			
			<input placeholder="password" name="loginPassword" type="password">
			
			<br><br>
			
			<input type="submit" value="Log in">
			
		
		</form>
		
		
		<h1>Sign up</h1>
		
		<form method="POST">
			
			<input placeholder="email" name="signupEmail" type="email"> <?php echo $signupEmailError; ?>
			
			<br><br>
			
			<input placeholder="username" name="signupUsername type="text">
			
			<br><br>
			
			<input placeholder="password" name="signupPassword" type="password">
			
			<input placeholder="confirm your password" name="signupPasswordConfirm" type="password">
			
			<br><br>
			
			<?php echo $signupPasswordError; ?>
			<?php echo $signupPasswordConfirmError; ?>
			
			
			<br><br>
			
			<input placeholder="your name" name="signupName" type="text"> <?php echo $signupNameError; ?>
			
			<br><br>
			
			
		
			<input type="submit" value="sign up">
			
			
		</form>
		
		<br><br>

			<h2>MVP</h2>
			
				<p> My idea for a MVP is a website where people can write whatever they wish anonymously, as long as their story fits in 666 characters.</p>
				<p> The page would be an endless scroll and the latest post would be on top of the page.</p>
	</body>
</html>

