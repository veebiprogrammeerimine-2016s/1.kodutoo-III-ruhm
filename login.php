<?php


	//var_dump($_GET);
	//echo "<br>";
	//var_dump($_POST);
	
	$signupEmailError = "";
	
	//kas on üldse olemas?
	if(isset ($_POST["signupEmail"])) {
		
		//oli olemas, ehk keegi vajutas nuppu
		if (empty($_POST["signupEmail"])) {
			
			//oli tõesti tühi
			$signupEmailError = "See väli on kohustuslik";
		
		}
	
	}
?>

<?php


	//var_dump($_GET);
	//echo "<br>";
	//var_dump($_POST);
	
	$loginEmailError = "";
	
	//kas on üldse olemas?
	if(isset ($_POST["loginEmail"])) {
		
		//oli olemas, ehk keegi vajutas nuppu
		if (empty($_POST["loginEmail"])) {
			
			//oli tõesti tühi
			$loginEmailError = "See väli on kohustuslik";
		
		}
	
	}
?>

<?php


	//var_dump($_GET);
	//echo "<br>";
	//var_dump($_POST);
	
	$loginPasswordError = "";
	
	//kas on üldse olemas?
	if(isset ($_POST["loginPassword"])) {
		
		//oli olemas, ehk keegi vajutas nuppu
		if (empty($_POST["loginPassword"])) {
			
			//oli tõesti tühi
			$loginPasswordError = "See väli on kohustuslik";
		
		}
	
	}
?>

<?php


	//var_dump($_GET);
	//echo "<br>";
	//var_dump($_POST);
	
	$signupPasswordError = "";
	
	//kas on üldse olemas?
	if(isset ($_POST["signupPassword"])) {
		
		//oli olemas, ehk keegi vajutas nuppu
		if (empty($_POST["signupPassword"])) {
			
			//oli tõesti tühi
			$signupPasswordError = "See väli on kohustuslik";
		
		}
	
		 else {
		
		// oli midagi, ei olnud tühi
		
		// pikkus kas pikkus vähemalt 8
		if (strlen ($_POST["signupPassword"]) < 8 ) {
			
				$signupPasswordError = "Parool peab olema vähemalt 8 tähemärki pikk";
				
			}
		
		}	
	
	}
?>

<?php


	//var_dump($_GET);
	//echo "<br>";
	//var_dump($_POST);
	
	$nameError = "";
	
	//kas on üldse olemas?
	if(isset ($_POST["name"])) {
		
		//oli olemas, ehk keegi vajutas nuppu
		if (empty($_POST["name"])) {
			
			//oli tõesti tühi
			$nameError = "See väli on kohustuslik";
		
		}
	
		 else {
		
		// oli midagi, ei olnud tühi
		
		// pikkus kas pikkus vähemalt 8
		if (strlen ($_POST["name"]) < 8 ) {
			
				$nameError = "Parool peab olema vähemalt 8 tähemärki pikk";
				
			}
		
		}	
	
	}
?>

<?php


	//var_dump($_GET);
	//echo "<br>";
	//var_dump($_POST);
	
	$phonenumberError = "";
	
	//kas on üldse olemas?
	if(isset ($_POST["phonenumber"])) {
		
		//oli olemas, ehk keegi vajutas nuppu
		if (empty($_POST["phonenumber"])) {
			
			//oli tõesti tühi
			$phonenumberError = "See väli on kohustuslik";
		
		}
	
		 else {
		
		// oli midagi, ei olnud tühi
		
		// pikkus kas pikkus vähemalt 8
		if (strlen ($_POST["phonenumber"]) < 8 ) {
			
				$phonenumberError = "Parool peab olema vähemalt 8 tähemärki pikk";
				
			}
		
		}	
	
	}
?>

<!DOCTYPE html>

<html>
	<head>
		<title>Log in page</title>
	</head>
	<body>

		<h1>Log in</h1>
		
		<form method="POST">
		
		
		<input placeholder="E-mail" name="loginEmail" type="email"> <?php echo $loginEmailError; ?>
		
		<br><br> 
		
		
		<input placeholder="Password" name="loginPassword" type="password"> <?php echo $loginPasswordError; ?>
		
		<br><br>
		<input type="submit" value="Log in">
		
		
		
	</form>
	
	<h1>Sign up</h1>
		
		<form method="POST">
				
			<input placeholder="E-mail" name="signupEmail" type="email"> <?php echo $signupEmailError; ?>
		
			<br><br> 
			
			<input placeholder="Password" name="signupPassword" type="password"> <?php echo $signupPasswordError; ?>
		
			<br><br>
			
			<input type="submit" value="Create user">
		
		
		
		</form>
		
	<h1>Additional information</h1>
		
		<form method="POST">
				
			<input placeholder="Name" name="name" type="name"> <?php echo $nameError; ?>
		
			<br><br> 
			
			<input placeholder="Phone number" name="phonenumber" type="phonenumber"> <?php echo $phonenumberError; ?>
		
			<br><br>
			
			<input type="submit" value="Add information">
	</body>
</html>

