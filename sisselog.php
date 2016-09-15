<?php

//var_dump($_GET);
//echo "<br>";
//var_dump($_POST);

//kas on üldse olemas

$signupEmailError = "*";
if (isset ($_POST["signupEmail"])) {
	
if (empty ($_POST["signupEmail"])) {
	$signupEmailError = "see väli on kohustuslik";
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
	
		<lable>E-post</lable><br>
		<input name="loginEmail" type="email">
		<br><br>
		<lable>Password</lable><br>
		<input name="loginPassword" type="password">
		
		<br><br>
		<input type="submit">
	</form>

</body>
</html>


<h1>Loo kasutaja</h1>

	<form method="POST">
	
		<labe>E-post</lable><br>
		<input name="loginEmail" type="signupemail" type="email"> <?php echo $signupEmailError; ?>
		<br><br>
		<label>Password</lable><br>
		<input name="loginPassword" type="signuppassword">
		
		<br><br>
		<input type="submit" value="Loo kasutaja">
	</form>

</body>
</html>