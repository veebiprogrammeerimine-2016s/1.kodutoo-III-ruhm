<?php


	//var_dump($_GET);
	//echo "<br>";
	//var_dump($_POST);
	//kas on üldse olemas
	
	
	$signupeEmailError= "";
	
	if (isset ($_POST["signupEmail"])) {
		
	}
	
	//oli olemas, ehk keegi vajutas nuppu
	if (empty ($_POST["signupEmail"])) {
		
		//oli t2esti tühi
		$signupeEmailError = "See väli on kohustuslik";
		
		
	}
	
	
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Leht</title>
	</head>
	<body>

		<h1>Logi sisse</h1>
		
		<form method ="POST">
			
			<input placeholder="E-mail" name="loginEmail" type="email">
		
			<br> <br>
		
			<input placeholder= "Parool" name="loginPassword" type="password">
			
			<br> <br>
			
			<input type="submit">
			
			<br> <br>
		</form>
		
		
	<h1>Loo kasutaja</h1>
		
		<form method ="POST">
			
			<label>E-post</label>
			<input name="signupEmail" type="email"> <?php echo $signupeEmailError; ?>
		
			<br> <br>
			
			<label>Parool</label>
			<input name="signupPassword" type="password">
			
			<br> <br>
			
			<input type="submit" value="loo kasutaja">
			
			<br> <br>
		</form>

	</body>
</html>