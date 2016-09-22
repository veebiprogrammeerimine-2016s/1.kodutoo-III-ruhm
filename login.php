<?php
//var_dump($_POST);
//does stuff exist?
$signupEmailError = "";
$signupPasswordError = "";
$forgotEmailNotif = "";
if (isset ($_POST["forgotEmail"] ) ) {
	if (empty($_POST["forgotEmail"])){
		$forgotEmailNotif = "To reset your password, please enter your email.";
	} else {
		$forgotEmailNotif = "An email notification has been sent to you.";
	}
}
if (isset ($_POST["signupEmail"] ) ) {
	//somebody PRESSED THE BUTTON
	if (empty($_POST["signupEmail"])){
		$signupEmailError = "Please enter your e-mail";		
	}
}
if (isset ($_POST["signupPassword"] ) ) {
	if (empty($_POST["signupPassword"])){
		$signupPasswordError = "Please enter a password.";
	} else {
		// pikkus vähemalt kaheksa
		if (strlen ($_POST["signupPassword"]) < 8) { $signupPasswordError = "Please make sure your password is at least 8 characters long.";}
	}
}	
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Login Page</title>
	</head>
	<body>

		<h1>Log into the system</h1>
		<fieldset>
		<legend>Login information</legend>
		<form method="POST">
		<label>E-mail address</label>	
		<br>
		<input name="loginEmail" type="email" autofocus>
		<br><br>
		<label>Password</label>
		<br>
		<input name="loginPassword" type="password">
		<br><br>
		<input type="submit" value="Log in">
		</form>
		</fieldset>

		<h1>Create a user</h1>
		<fieldset>
		<legend>Information for creating a user</legend>
		<form method="POST">
		<label>E-mail address</label>
		<br>
		<input name="signupEmail" type="email"><?php echo $signupEmailError; ?>
		<br><br>
		<label>Password</label>
		<br>
		<input name="signupPassword" type="password"><?php echo $signupPasswordError; ?>
		<br><br>
		<input type="submit" value="Create user">
		</form>
		</fieldset>

		<h1>Forgot your password?</h1>
		<fieldset>
		<legend>Email information</legend>
		<form method="POST">
		<label>E-mail address</label>
		<br>
		<input name="forgotEmail" type="email"><?php echo $forgotEmailNotif; ?>
		<br><br>
		<input type="submit" value="Send email confirmation">
		</form>
		</fieldset>
	</body>
</html> 
