<?php


require("functions.php");

if(isset($_SESSION["userId"])) {
header("Location: data.php");
}
$signupEmailError = "";
$signupNameError = "";
$signupBUError = "";
$signupPasswordError = "";
$controlPasswordError = "";
$forgotEmailNotif = "";
$signupEmail = "";
$loginEmail = "";
if (isset ($_POST["loginEmail"] ) ) {
	if (!empty($_POST["loginEmail"])){
		$loginEmail = $_POST["loginEmail"];	
	}
}
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
	} else {
		$signupEmail = $_POST["signupEmail"];
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
if (isset ($_POST["signupName"])){
	if (empty($_POST["signupName"])) {
		$signupNameError = "Please enter your display name.";
	}
}
if (isset ($_POST["controlPassword"])){
    if (empty($_POST["controlPassword"])){
        $controlPasswordError = "Please retype your password for security purposes";
    } else {
        if ($_POST["signupPassword"] != $_POST["controlPassword"]){
        $controlPasswordError = "The passwords you have typed are not the same";
        }
    }

}
if (isset ($_POST["signupBUEmail"])){
	if (empty($_POST["signupBUEmail"])){
		$signupBUError = "Please enter a backup email account.";
	} else {
		if ($_POST["signupEmail"]==$_POST["signupBUEmail"]){
			$signupBUError = "Your regular email and backup email cannot be the same.";
		}
	}
}	
if (isset($_POST["signupEmail"]) && isset($_POST["signupPassword"]) && isset($_POST["controlPassword"]) && empty($signupEmailError) && empty($signupPasswordError) && empty($signupNameError) && empty($signupBUError) && empty($controlPasswordError)){
	echo "Saving information...";
	echo "E-mail: ".$signupEmail."<br>";
	echo "Passwd: ".$_POST["signupPassword"]."<br>";
	$password = hash("sha512", $_POST["signupPassword"]);
	echo "Hashed ".$password."<br>";


	signUp($signupEmail, $password, $_POST["signupName"], $_POST["signupBUEmail"]);
	//connect to MariaDB
}

if (isset($_POST["loginEmail"]) && isset($_POST["loginPassword"]) && !empty($_POST["loginEmail"]) && !empty(["loginPassword"])) {
	login($_POST["loginEmail"], $_POST["loginPassword"]);
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
		<input name="loginEmail" type="email" value="<?php echo $loginEmail; ?>" autofocus>
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
		<input name="signupEmail" type="email" value="<?php echo $signupEmail; ?>"><?php echo $signupEmailError; ?>
		<br><br>
		<label>Password</label>
		<br>
		<input name="signupPassword" type="password"><?php echo $signupPasswordError; ?>
		<br><br>
		<label>Retype your Password</label>
		<br>
		<input name="controlPassword" type="password"><?php echo $controlPasswordError; ?>
		<br><br>
		<label>Display name</label>
		<br>
		<input name="signupName" type="text"><?php echo $signupNameError; ?>
		<br><br>
		<label>Backup email address</label>
		<br>
		<input name="signupBUEmail" type="text"><?php echo $signupBUError; ?>
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
