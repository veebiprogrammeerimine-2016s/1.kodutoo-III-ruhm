<?php

	//var_dump($_GET);
	//echo "<br>";
	var_dump($_POST);
	$signupEmailError = "";
	//on olemas
	if (isset ($_POST["signupEmail"], $_POST["signupPassword"])) {
		//oli tyhi
		if (empty($_POST["signupEmail"]) or empty($_POST["signupPassword"])) {
		
			$signupError = "This field is required";
		} 	
		//kas pikkus v'hemalt 8
		elseif(strlen($_POST["signupPassword"])) < 8) {
				
			$signupError = "Password must be at least 8 characters."
			
		}
		
	}
	
?>




<html>

	<head>
		<title>Login</title>
	</head>
	<body>
		<!-- wdwada -->
		<h1> Register </h1>
		<form method="POST">
			<label>E-mail *</label><br>
			<input name="signupEmail" type="email"> <?php echo $signupError; ?> <br>
			<label>Password *</label><br>
			<input placeholder="Password" type="password" name="signupPassword"><?php echo $signupError; ?>
			<br>
			<input type="radio" name="gender" value="male">Male<br>
			<input type="radio" name="gender" value="female">Female<br>
			<br><br>
			
			<labeL>
			<select name="Day">
				<option value="1"></option><br>
			<select name="Month">
				<option value="1"></option>
			<select name="Year">
				<option value="1990">1990</option>
			</select>
			<br><br>
			<input type="submit" value="Register">
		</form>
	</body>


</html>