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
		$signupPasswordError = "See väli on kohustuslik";
			
			} else {
				
				//oli midagi, ei olnud tühi
				
				//kas pikkus vähemalt kui 8
				if (strlen ($_POST["signupPassword"]) < 8 ) {
				
				$signupPasswordError = "Kas parooli pikkus on 8 sümboli?";
				
			}
		
				if (empty($_POST["gender"])) {
				
				$genderErr = "See väli on kohustuslik";
			
				} else {
		
				$gender = test_input($_POST["gender"]);
			}
		
		}
	
?>		
	<h1>Kasutaja loomine</h1>
		
		<form method ="POST">
			
			<label>E-post</label>
			<input name="signupEmail" type="email"> <?php echo $signupeEmailError; ?>
		
			<br> <br>
			
			<label>Parool</label>
			<input name="signupPassword" type="password"> <?php echo $signupPasswordError; ?>
			
			<br> <br>
			
			<label>Sugu:</label>
			<input type="radio" name="gender" 
			<?php if (isset($gender) && $gender=="female") echo "checked";?> 
			value="female">Naine
			
			<input type="radio" name="gender"
			<?php if (isset($gender) && $gender=="male") echo "checked"; ?> 
			value="male">Mees
			
			<br> <br>
			
			<label>Teie komentaarid:</label>
			
			<textarea name="comment" rows="5" cols="40"> </textarea>
			
			<br> <br>
			
			<input type="submit" value="loo kasutaja">
			
			<br> <br>
		</form>

	</body>
</html>