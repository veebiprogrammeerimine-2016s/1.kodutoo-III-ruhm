<?Php
	
	//var_dump($_GET);
	//echo "<br>";
	//var_dump ($_POST);
	
	
	$signupEmailError = "";
	
	//kas on üldse olemas
	if (isset ($_POST ["signupEmail"])){
		
		//oli olemas, ehk keegi vajutas nuppu
		//kas oli tühi
		if (empty ($_POST ["signupEmail"])){
			
			//oli tõesti tühi
			$signupEmailError = "See väli on kohustuslik";
		}
		
	}
	
	$signupPasswordError = "";
	
	//kas on üldse olemas
	if (isset ($_POST ["signupPassword"])){
		
		//oli olemas, ehk keegi vajutas nuppu
		//kas oli tühi
		if (empty ($_POST ["signupPassword"])){
			
			//oli tõesti tühi
			$signupPasswordError = "See väli on kohustuslik";
		} else {
			// oli midagi ei olnud tühi
			
			// kas pikkus vähemalt 8
			if(strlen ($_POST ["signupPassword"]) < 8 ){
				
				$signupPasswordError = "Salasõna peab olema vähemalt 8 tähemärki pikk";
				
			}
		}
	}
	$signupLastNameError = "";
		
	//kas on üldse olemas
	if (isset ($_POST ["signupLastName"])){
		
		//oli olemas, ehk keegi vajutas nuppu
		//kas oli tühi
		if (empty ($_POST ["signupLastName"])){
			
			//oli tõesti tühi
			$signupLastNameError = "See väli on kohustuslik";
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
			<!--label>E-post</label>-->
			<input placeholder= "E-post" name="loginEmail" type="email"> <input placeholder= "Salasõna" name="loginPassword" type="password">
			<input type="submit" value="Logi sisse">
		</form>
		
		<h1>Liitu</h1>
		
		<form method="POST">
			<input placeholder= "Eesnimi" name="loginEmail" type="eesnimi"> <input placeholder= "Perekonnanimi" name="signupLastName" type="lastname"><?php echo $signupLastNameError; ?>
			
			<br> <br>
			<!--label>E-post</label>-->
			<input placeholder= "E-post" name="signupEmail" type="email"><?php echo $signupEmailError; ?>
			<br> <br>
			<!--label>E-post</label>-->
			<input placeholder= "Sisesta uuesti oma e-post" name="signupEmail" type="email"><?php echo $signupEmailError; ?>
			
			<br> <br>
			<!--label>Salasõna</label>-->
			<input placeholder= "Salasõna" name="signupPassword" type="password"><?php echo $signupPasswordError; ?>
			
			<br> <br>
			
			<input type="submit" value="Liitu">
		</form>
	</body>
</html>

MPV - kodulehele lüüa nn broneerimissüsteem, et saaks tuba reserveerida