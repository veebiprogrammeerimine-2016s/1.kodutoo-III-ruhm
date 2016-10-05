<?php


	//var_dump($_GET);
	//echo "<br>";
	//var_dump($_POST);
	//kas on üldse olemas
	
	
	$signupeEmailError= "";
	$signupEmail = "";

	if (isset ($_POST["signupEmail"])) {
		
	}
	
	//oli olemas, ehk keegi vajutas nuppu
	if (empty ($_POST["signupEmail"])) {
		
		//oli t2esti tühi
		$signupeEmailError = "*";
		
		
	}
	$signupfirstnameError = "";
	$signupfirstname = "";
	
	if (isset ($_POST["signupfirstname"])) {
		
	}
	
	if (empty ($_POST["signupfirstname"])) {
		
		$signupfirstnameError = "This field is optional";
	}
	
	$signuplastnameError="";
	$signuplastname="";
	
	if (isset ($_POST["signuplastname"])) {
	
	}
	
	if (empty ($_POST["signuplastname"])) {
		
		$signuplastnameError = "This field is optional";
	}
	$signupgenerError = "";
	$signupgender = "";
	
	if (isset ($_POST["signupgender"])) {
		
	}
	
	if (empty ($_POST ["signupgender"])) {
		
		$signupgenderError = "*";
	}
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Page</title>
	</head>
	<body>

		<h1>Log in</h1>
		
		<form method ="POST">
			
			<input placeholder="E-mail" name="loginEmail" type="email">
		
			<br> <br>
		
			<input placeholder= "Password" name="loginPassword" type="password">
			
			<br> <br>
			
			<input type="submit">
			
			<br> <br>
		</form>
		
<?php	
	
	//var_dump($_GET);
	//echo "<br>";
	//var_dump($_POST);
	//kas on üldse olemas
	
	
	$signupPasswordError= "";
	
	if (isset ($_POST["signupPassword"])) {
		
	}
	
	//oli olemas, ehk keegi vajutas nuppu
	if (empty ($_POST["signupPassword"])) {
		
		//oli t2esti tühi
		$signupPasswordError = "*";
			
			} else {
				
				//oli midagi, ei olnud tühi
				
				//kas pikkus vähemalt kui 8
				if (strlen ($_POST["signupPassword"]) < 8 ) {
				
				$signupPasswordError = "Does your password consist of at least 8 symbols?";
				
			}
		
				if (empty($_POST["gender"])) {
				
				$genderErr = "*";
			
				} else {
		
				$gender = test_input($_POST["gender"]);
			}
		
		}
	$gender = "";
	if(isset($_POST["gender"])) {
		if(!empty($_POST["gender"])){
			
			//on olemas ja ei ole tühi
			$gender = $_POST["gender"];
		}
	}
?>		
	<h1>Sign up</h1>
		
		<?php echo "* required"; ?>
		<br><br>
		
		<form method ="POST">
			
			<label>E-mail</label>
			<br><input name="signupEmail" type="email"> <?php echo $signupeEmailError; ?>
		
			<br> <br>
			
			<label>Password</label>
			<br><input name="signupPassword" type="password"> <?php echo $signupPasswordError; ?>
			
			<br> <br>
			<label>Firstame</label>
			 <br><input name="signupfisrtname" type="text"> <?php echo $signupfirstnameError ?>
		
			<br> <br>
			
			<label>Surname</label>
			 <br><input name="signuplastname" type="text"> <?php echo $signuplastnameError ?>
			
			
			<br> <br>
			
			<label>Gender:</label> <?php echo $signupgenderError ?>
			<br>
			
			<?php if ($gender == "male") { ?> 
				<input type="radio" name="gender" value="male" checked > Male<br>
			<?php } else { ?>
				<input type="radio" name="gender" value="male"> Male<br>
			<?php } ?>
			
			<?php if ($gender == "female") { ?>
				<input type="radio" name="gender" value="female" checked > Female<br>
			<?php } else { ?>
				<input type="radio" name="gender" value="female"> Female<br>
			<?php } ?>
			
			<?php if ($gender == "other") { ?>
				<input type="radio" name="gender" value="other" checked > Other<br>
			<?php } else { ?>
				<input type="radio" name="gender" value="other"> Other<br>
			<?php } ?>
			
			<br> <br>
			
			<label>Comments:</label>
			
			<br> <br>
			
			<textarea name="comment" rows="5" cols="40"> </textarea>
			
			<br> <br>
			
			<input type="submit" value="Sign up">
			
			<br> <br>
		</form>

	</body>
</html>
