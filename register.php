<?php

	//var_dump($_GET);
	//echo "<br>";
	//var_dump($_POST);
	$signupEmailError = "";
	$signupGenderError = '';
	$signupPasswordError = '';
	$signupBirthdateError = '';
	//on olemas
	if (isset ($_POST["signupEmail"], $_POST["signupPassword"])) {
		//oli tyhi
		if (empty($_POST["signupEmail"])) {
		
			$signupEmailError = "This field is required.";
		}
		if (empty($_POST["gender"])) {
			
			$signupGenderError = "This field is required.";
		}
		//kas pikkus v'hemalt 8
		if ((strlen($_POST["signupPassword"])) < 8) {
				
			$signupPasswordError = "Password must be at least 8 characters.";
		}
		if (($_POST['Day'] == 'Day') or ($_POST['Month'] == 'Month') or ($_POST['Year'] == 'Year')){
			$signupBirthdateError = 'Enter your date of birth.';
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
			<input name="signupEmail" type="email"> 
			<b><?php echo $signupEmailError; ?></b> <br>
			<label>Password *</label><br>
			<input placeholder="Password" type="password" name="signupPassword">
			<b><?php echo $signupPasswordError; ?></b>
			<br><br>
			<input type="radio" name="gender" value="male">Male 
			<input type="radio" name="gender" value="female">Female 
			<b><?php echo $signupGenderError; ?></b>
			<br><br>
			
			<select name="Day">
			<option value = "Day"> Day </option> 
			<?php
			for($i=1; $i<=31; $i++){
				echo '<option value='.$i.'>'.$i.'</option>';
			}
			?>
			</select>
			<select name="Month">
			<option value = "Month"> Month </option>
			<?php
			for($i=1; $i<=12; $i++){
				echo '<option value='.$i.'>'.$i.'</option>';
			}
			?>
			</select>
			<select name="Year">
			<option value="Year"> Year </option>
			<?php
			for($i=1930; $i<=2010; $i++)
				echo '<option value='.$i.'>'.$i.'</option>';
			?>
			</select>
			<b><?php echo $signupBirthdateError; ?></b>
			<br><br>
			<input type="submit" value="Register">
		</form>
		<br><br>
		<p>MVP idee: Isiklik portfoolio lehekulg, kuhu saan lisada enda programmeerimise projektid.</p>
	</body>
</html>