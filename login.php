<?php

	require("../../config.php");

	//var_dump($_GET);
	//echo "<br>";
	//var_dump($_POST);
	
	$signupUsernameError="";
	$signupUsername="";
	
		if(isset ($_POST["signupUsername"]))
		
			if (empty ($_POST["signupUsername"])){
				$signupUsernameError="See vali on kohustuslik";
			}
			else {
				$signupUsername=$_POST["signupUsername"];
			}
	$signupEmailError="";
	$signupEmail = "";
	
	$gender = "";
	if(isset($_POST["gender"])) {
		if(!empty($_POST["gender"])){	
			$gender = $_POST["gender"];
		}
	}
	
	if(isset ($_POST["signupEmail"]))
		
		if (empty ($_POST["signupEmail"])){
			$signupEmailError="See vali on kohustuslik";
		}
		else {
			$signupEmail=$_POST["signupEmail"];
		}
		
	$signupPasswordError="";
	
	
	if(isset ($_POST["signupPassword"]))
		
		if (empty ($_POST["signupPassword"])){
			$signupPasswordError="See vali on kohustuslik";
		}	
	else
		if(strlen($_POST["signupPassword"]) < 8) {
			$signupPasswordError="Parool pole piisavalt pikk";
		}
		
	if (isset($_POST["signupUsername"]) &&
		isset($_POST["signupEmail"]) &&
		isset($_POST["signupPassword"]) &&
		$signupUsernameError == "" &&
		$signupEmailError == "" &&
		$signupPasswordError == ""
		) {
		
		echo "salvestan...<br>";
		echo "kasutaja ".$signupUsername."<br>";
		echo "email ".$signupEmail."<br>";
		echo "parool ".$_POST["signupPassword"]."<br>";
		$password = hash("sha512", $_POST["signupPassword"]);
		
		echo "räsi ".$password."<br>";
		
		$database = "if16_gerltoom";
		$mysqli = new mysqli($serverHost, $serverUsername, $serverPassword, $database);
		
		$stmt = $mysqli->prepare("INSERT INTO user_sample (username, email, password) VALUES(?, ?, ?)");
		
		$stmt->bind_param("sss", $signupUsername, $signupEmail, $password);
		
		if ($stmt->execute() ) {
			
			echo "salvestamine onnestus";
			
		}
		else {
			echo "ERROR".$stmt->error;
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
		<label>Email</label><br>
		<input name="loginEmail" type="text"><br><br>
		<label>Parool</label><br>
		<input name="loginPassword" type="password"><br><br>
		<input type="submit" value="Logi sisse"><br><br><br>
	</form>
	<h2>Loo kasutaja</h2><br>
		<form method="POST">
			
			<input placeholder="Kasjutajanimi" name="signupUsername" type="username" value="<?php echo $signupUsername ?>"><?php echo $signupUsernameError; ?><br><br>
			
			<input placeholder="Email" name="signupEmail" type="email" value="<?=$signupEmail;?>" > <?php echo $signupEmailError; ?>
			
			<br><br>
			
			<input placeholder="Parool" name="signupPassword" type="password"> <?php echo $signupPasswordError; ?>
						
			<br><br>
			
				<?php if ($gender == "female") { ?>
				<input type="radio" name="gender" value="female" checked > Naine<br>
			<?php } else { ?>
				<input type="radio" name="gender" value="female"> Naine<br>
			<?php } ?>
		
			
			
			<?php if ($gender == "male") { ?>
				<input type="radio" name="gender" value="male" checked > Mees<br>
			<?php } else { ?>
				<input type="radio" name="gender" value="male"> Mees<br><br>
			<?php } ?>
			
		
			<input type="submit" value="Loo kasutaja">
		
		</form>

</body>
</html>