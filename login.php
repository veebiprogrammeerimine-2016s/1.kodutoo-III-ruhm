<?php

	//var_dump($_GET);
	//echo "<br>";
	//var_dump($_POST);
	
	$signupEmailError="";
	
	if(isset ($_POST["signupEmail"]))
		
	if (empty ($_POST["signupEmail"])){
		$signupEmailError="See vali on kohustuslik";
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
?>
<!DOCTYPE html>
<html>
<head>
	<title>Sisselogimise leht</title>
</head>
<body>

	<h1>Logi sisse</h1><br>
	<form method="POST">
		<input placeholder="Email" name="loginEmail" type="email"><br><br>
		<input placeholder="Parool" name="loginPassword" type="password"><br><br>
		<input type="submit" value="Logi sisse">
	</form>
	<h1>Loo kasutaja</h1><br>
	<form method="POST">
		<input placeholder="Email" name="signupEmail" type="email"><?php echo $signupEmailError; ?><br><br>
		<input placeholder="Parool" name="signupPassword" type="password"><?php echo $signupPasswordError; ?><br><br>
		<input type="submit" value="Loo kasutaja">
	</form>

</body>
</html>