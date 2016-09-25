<?php

	//var_dump($_GET);
	//echo "<br>";
	//var_dump($_POST);
	
	$signupEmailError = "";
	
	//kas on üldse olemas
	if (isset ($_POST["signupEmail"])) {
		// oli olemas, ehk keegi vajutas nuppu
		if (empty($_POST["signupEmail"])) {
			//oli tõesti tühi
			$signupEmailError = "See väli on kohustuslik";
		}
	}

	$signupPasswordError = "";
	
	//kas on üldse olemas
	if (isset ($_POST["signupPassword"])) {
		// oli olemas, ehk keegi vajutas nuppu
		if (empty($_POST["signupPassword"])) {
			//oli tõesti tühi
			$signupPasswordError = "See väli on kohustuslik";
			
		} else {
			//oli midagi, ei olnud tühi
			//kas pikkust vähemalt 8
			
			if (strlen($_POST["signupPassword"]) < 8 ) {
				
				$signupPasswordError = "Parool peab olema vähemalt 8 tähemärki pikk";
				
			}
				
			
			
			
			
		}
	}
	$nrError = "";
	
	if (isset ($_POST["nr"])) {
		
		if (empty($_POST["nr"])) {
			$nrError = "See väli on kohustuslik";
		}
		
	}
	$cscnrError = "";
	
	if (isset($_POST["cscnr"])) {
		
		if (empty($_POST["cscnr"])) {
			$cscnrError = "See väli on kohustuslik";
		}
	}
	$tanavError = "";
	
	if (isset($_POST["tanav"])) {
		
		if (empty($_POST["tanav"])) {
			$tanavError = "See väli on kohustuslik";
		}
	}
	$linnvaldError = "";
	
	if (isset($_POST["linn/vald"])) {
		
		if (empty($_POST["linn/vald"])) {
			$linnvaldError = "See väli on kohustuslik";
		}
	}
	$postiindeksError = "";
	
	if (isset($_POST["postiindeks"])) {
		
		if (empty($_POST["postiindeks"])) {
			$postiindeksError = "See väli on kohustuslik";
		}
	}

?>
<!DOCTYPE html>
<html>
	<head>
		<title>Sisselogimis leht</title>
	</head>
	<body background="https://farm1.staticflickr.com/691/20664938416_4e4b224684_h.jpg">

		<h1>Logi sisse</h1>
		
		<form method="POST">
			
			
			<input placeholder="E-mail" name="loginEmail" type="email">
			
			<br><br>
			
			<input placeholder="Parool" name="loginPassword" type="password">
			
			
			<br><br>
			
			<input type="submit">
		
		</form>

		<h1>Loo kasutaja</h1>
		
		<form method="POST">
		
			<input placeholder="E-mail" name="signupEmail" type="email"> <?php echo $signupEmailError; ?>
			
			<br><br>
			
			<input placeholder="Parool" name="signupPassword" type="password"> <?php echo $signupPasswordError; ?>
			
			
			<br><br>
			<Krediitkaardiinfo
			<br><br>
			<input placeholder="Krediitkaardi nr." name="nr" type="number"> <?php echo $nrError; ?>
			<br><br>
			<input placeholder="CSC" name="cscnr" type="number"> <?php echo $cscnrError; ?>
			<br><br>
			Aadress
			<br><br>
			<input placeholder="Tänav" name="tanav" type="text"> <?php echo $tanavError; ?>
			<br><br>
			<input placeholder="Linn/vald" name="linn/vald"  type="text"> <?php echo $linnvaldError; ?>
			<br><br>
			<input placeholder="Postiindeks" name="postiindeks" type="text"> <?php echo $postiindeksError; ?>
			<br><br>
			<input type="submit" value="Loo kasutaja">
		
		</form>
	</body>
</html>