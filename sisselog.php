<?php 
	//var_dump($_GET);
	//echo "<br>";
	//var_dump($_POST);
	
	$signupEmailError = "";
	
	//kas on üldse olemas
	if (isset ($_POST["signupEmail"])) {
		
		// oli olemas, ehk keegi vajutas nuppu
		// kas oli tühi
		if (empty ($_POST["signupEmail"])) {
			
			//oli tõesti tühi
			$signupEmailError = "See väli on kohustuslik";
			
		}
		
	}
	
	$signupPasswordError = "";
	
	//kas on üldse olemas
	if (isset ($_POST["signupPassword"])) {
		
		// oli olemas, ehk keegi vajutas nuppu
		// kas oli tühi
		if (empty ($_POST["signupPassword"])) {
			
			//oli tõesti tühi
			$signupPasswordError = "See väli on kohustuslik";
			
		} else {
			
			// oli midagi, ei olnud tühi
			
			// kas pikkus vähemalt 8
			if (strlen ($_POST["signupPassword"]) < 8 ) {
				
				$signupPasswordError = "Parool peab olema vähemalt 8 tm pikk";
				
			}
			
		}

		if (isset ( $_POST["comment"] ) ) {
		
		if ( empty ( $_POST["comment"] ) ) {
			
			//kommentaar oli tühi
			$signupCommentError = "See väli on kohustuslik!" ;
		}
		
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
			
			<label>E-post</label><br>
			<input name="loginEmail" type="email">
			
			<br><br>
			
			<label>Parool</label><br>
			<input name="loginPassword" type="password">
						
			<br><br>
			
			<input type="submit" value="Logi sisse">
		
		</form>
		
		<h1>Loo kasutaja</h1>
		
		<form method="POST">
			
			<label>E-post</label><br>
			<input name="signupEmail" type="email"> <?php echo $signupEmailError; ?>
			
			<br><br>
			
			<input placeholder="Parool" name="signupPassword" type="password"> <?php echo $signupPasswordError; ?>
						
			<br><br>
		
  			<input type="radio" name="gender" value="male" checked> Male<br>
  			<input type="radio" name="gender" value="female"> Female<br>
  			<input type="radio" name="gender" value="other"> Other

			<br><br>

			<label>Kommentaar</label><br>
			<textarea name="comment" rows="5" cols="40"></textarea> <?php echo $signupCommentError; ?>
			
			<br><br>

			<label>Homepage</label><br>
			<input type="text" name="website">

			<br><br>

			<input type="submit" value="Loo kasutaja">
			
			//IDEE:Foorum kus kasutajad jagavad kontsertide elamusi, pilte, soovitusi, pileteid ja merchandise'i.

		</form>


	</body>
</html>
