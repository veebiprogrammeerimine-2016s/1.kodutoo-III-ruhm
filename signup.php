<?php
	//var_dump($_GET);
	//echo "<br>";
	//var_dump($_POST);
	
	$FirstnameError= "";
	
	//kas on üldse olemas
	if (isset ($_POST["Firstname"])) {
		
		// oli olemas, ehk keegi vajutas nuppu
		//kas oli tühi
		if (empty ($_POST["Firstname"])) {
			
			//oli tõesti tühi
			$FirstnameError = "See väli on kohustuslik";
			
		}
	
	}
	
	$LastnameError = "";
	
	//kas on üldse olemas
	if (isset ($_POST["Lastname"])) {
		
		// oli olemas, ehk keegi vajutas nuppu
		//kas oli tühi
		if (empty ($_POST["Lastname"])) {
			
			//oli tõesti tühi
			$LastnameError = "See väli on kohustuslik";
				
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
			
			<input placeholder="E-mail" name="loginEmail" type="email">
			
			<br><br>
			
			<input placeholder="Parool" name="loginPassword" type="password">
			
			
			<br><br>
			
			<input type="submit">
			
		
		</form>

	</body>
</html>


<html>
	<head>
		<title>Sisselogimise leht</title>
	</head>
	<body>

		<h1>Loo kasutaja</h1>
		
		
		<form method="POST">
			<label>Eesnimi</label><br>
			<input name="Firstname" type="text"> <?php echo $FirstnameError; ?> 	

			<br><br>
			
			<label>Perekonnanimi</label><br>
			<input name="Lastname" type="text"> <?php echo $LastnameError; ?>

			<br><br>
			
			<label>E-mail</label><br>
			<input type="E-mail" name="signupEmail">

			<br><br>

			<label>Mobiiltelefoni number</label><br>
			<input type="number" name="mobilenumber">

			<br><br>
			
			<label>Parool</label><br>
			<input type="text" name="signupPassword">

			<br><br>

			<label>Parool uuesti</label><br>
			<input type="text" name="signupPassword">
			
			<br><br>

			<label>Sünnipäev</label><br>
			<input type="date" name="birthday">
			
			<br><br>

			<label>Sugu</label><br>
			<input type="radio" name="gender" value="Mees" checked> Mees <br>
			<input type="radio" name="gender" value="Naine"> Naine <br>
			<input type="radio" name="gender" value="Muu"> Muu <br>

			<input type="submit" value="Loo kasutaja">
		
		</form>

	</body>
</html>