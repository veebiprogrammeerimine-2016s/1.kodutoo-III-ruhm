<?php

	require("../../config.php");

	//var_dump($_GET);
	//echo "<br>";
	//var_dump($_POST);
	
	$signupEmailError = "";
	$signupEmail = "";
	
	//kas on üldse olemas?
	if(isset ($_POST["signupEmail"])) {
		
		//oli olemas, ehk keegi vajutas nuppu
		if (empty($_POST["signupEmail"])) {
			
			//oli tõesti tühi
			$signupEmailError = "See väli on kohustuslik";
		
		} else {
			
			//kõik korras, email ei ole tühi ja on olemas
			$signupEmail = $_POST["signupEmail"];
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
		
		} else {
		
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
			
				$nameError = "Kasutajanimi peab olema vähemalt 8 tähemärki pikk";
				
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
		
		} else {
		
		// oli midagi, ei olnud tühi
			
			// Panin, et tel nr pikkus peaks olema vahemalt 6 tahemarki
			if (strlen ($_POST["phonenumber"]) < 6 ) {
				
				$phonenumberError = "Tel nr peab olema vähemalt 6 tähemärki pikk";
				
			}
		
		}	
	
	}

	$gender = "";
	if(isset($_POST["gender"])) {
		if(!empty($_POST["gender"])){
		
			//on olemas ja ei ole tühi
			$gender = $_POST["gender"];
		}
	}
	
	
	
	
	if ( isset($_POST["signupEmail"]) && 
		 isset($_POST["signupPassword"]) && 
		 $signupEmailError == "" && 
		 empty($signupPasswordError)
		) {
		
		//ühtegi viga ei ole, kõik vajalik olemas
		echo "salvestan...<br>";
		echo "email ".$signupEmail."<br>";
		echo "parool ".$_POST["signupPassword"]."<br>";
		
		$password = hash("sha512", $_POST["signupPassword"]);
		
		echo hash("sha512", $_POST["signupPassword"]);
		
		//ühendus
		$database = "if16_rolatall_3";
		$mysqli = new mysqli($serverHost, $serverUsername, $serverPassword, $database);
		
		//käsk
		$stmt = $mysqli->prepare("INSERT INTO user_sample(email, password) VALUES (?, ?)");
		
		echo $mysqli->error;
		
		// s - string
		// i - interface_exists
		// d - decimal/double
		// iga küsimärgi jaoks üks täht, mis tüüpi on
		$stmt->bind_param("ss", $signupEmail, $password );
		
		//täida käsku	
		if ( $stmt->execute() ) {
		
			echo "salvestamine õnnestus";
	
		
		} else {
	
			echo "ERROR ".$stmt->error;
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
				
			<input placeholder="E-mail" name="signupEmail" type="email" value="<?php echo $signupEmail; ?>" > <?php echo $signupEmailError; ?>
		
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
			
			<?php if ($gender == "male") { ?>
 				<input type="radio" name="gender" value="male" checked > Mees<br>
 			<?php } else { ?>
 				<input type="radio" name="gender" value="male"> Mees<br>
 			<?php } ?>
 			
 			<?php if ($gender == "female") { ?>
 				<input type="radio" name="gender" value="female" checked > Naine<br>
 			<?php } else { ?>
 				<input type="radio" name="gender" value="female"> Naine<br>
 			<?php } ?>
 			
 			<?php if ($gender == "other") { ?>
 				<input type="radio" name="gender" value="other" checked > Muu<br>
 			<?php } else { ?>
 				<input type="radio" name="gender" value="other"> Muu<br>
 			<?php } ?>
 			
			<br><br>
			
			<input type="submit" value="Add information">
	</body>
</html>

