<?php
	$signupEmailError = "";
	$signupPasswordError = "";
	$signupTelephoneError = "";
	$signupUsernameError = "";
	
	if (isset ($_POST["signupEmail"])) {
		
		if (empty ($_POST["signupEmail"])) {
		
		$signupEmailError = "E-post on kohustuslik";
		
		}
			
	
	}
	$loginEmailError = "";
	
	
	if (isset ($_POST["loginEmail"])) {
		
		if (empty ($_POST["loginEmail"])) {
		
		$loginEmailError = "Vale E-post";
		
		}
			
	
	}
		$signupPasswordError = "";
	
	if (isset ($_POST["signupPassword"])) {
		
		if (empty ($_POST["signupPassword"])) {
		
		$signupPasswordError = "Parool on kohustuslik";
		
		} else {
			
			if (strlen ($_POST["signupPassword"]) < 5) {
				
				$signupPasswordError = "Parool miinimum 5 tähemärki";
				
			}
			
		}
			
	
	}
	if (isset ($_POST["signupUsername"])) {
		
		if (empty ($_POST["signupUsername"])) {
		
		$signupUsernameError = "Kasutajanimi on kohustuslik";
		
		} else {
			
			
			if (strlen ($_POST["signupUsername"]) < 4) {
				
				$signupUsernameError = "Miinimum 4 tähemärki";
			}	
			
		}
			
	
	}
	if (isset ($_POST["signupTelephone"])) {
		
		if (empty ($_POST["signupTelephone"])) {
		
		$signupTelephoneError = "Telefoninumber on kohustuslik";
		
		} else {
			
			if (strlen ($_POST["signupTelephone"]) < 7) {
				
				$signupUsernameError = "Miinimum 7 tähemärki";
			}	
			
		}
		
				
	}
	


//Mvp ideeks on leht , kus inimesed saavad autosid hinnata riikide järgi autosid, ehk siis inimene tuleb lehele valib listist omale sobivaima auto ja saab selle esitada enda valikuks
	
?>








<!DOCTYPE html>
<html>
	<head>
		<title>Sisselogimise leht</title>
	</head>
	<body>

		<h1>Logi Sisse</h1>
	
		<form method="POST">
			<label>E-post</label><br>
			<input name="loginEmail" type="email">
			
			<br><br>
			<label>Parool</label><br>
			<input name="loginPassword" type="password">
			
			<br><br>
			
			<input type="submit" value="Logi Sisse" >
		
		</form>

	</body>
</html>



<h1>Loo Kasutaja</h1>
	

	
		
	<html>
		
			<form method="POST">
		
			<label>Kasutajanimi</label><br>
			<input name="signupUsername" type="text"> <?php echo $signupUsernameError; ?>
			
			<br><br>
			<label>E-post</label><br>
			<input name="signupEmail" type="email"> <?php echo $signupEmailError; ?>
			
			<br><br>
			<label>Parool</label><br>
			<input name="signupPassword" type="password"> <?php echo $signupPasswordError; ?>
			
			<br><br>
			<label>Telefon</label><br>
			<input name="signupTelephone" type="tel"> <?php echo $signupTelephoneError; ?>
			
			<br><br>
			
			<input type="submit" value="Loo Kasutaja" >
			
			
		
		</form>
	
	</body>
</html>

