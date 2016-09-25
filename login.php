<?php
//github.com/veebiprogrammeerimine-2016s/1.kodutoo-III-ruhm
//github.com/veebiprogrammeerimine-2016s/1.kodutoo-III-ruhm
	//var_dump($_GET);
	//echo"<br>";
	//var_dump($_POST);
	
	$signupEmailError = "";
	
	//kas on üldse olemas
	if (isset ($_POST["signupEmail"])){
		
		//oli olemas, ehk keegi vajutas nuppu
		//kas oli tühi
		if (empty ($_POST["signupEmail"])){
			//oli tõesti tühi 
			$signupEmailError = "See väli on kohustuslik";
		}
	}
	$signupPasswordError = "";
	
	//kas on üldse olemas
	if (isset ($_POST["signupPassword"])){
		
		//oli olemas, ehk keegi vajutas nuppu
		//kas oli tühi
		if (empty ($_POST["signupPassword"])){
			//oli tõesti tühi 
			$signupPasswordError = "See väli on kohustuslik";
		} else {
			
			//oli midagi, ei olnud tühi
			
			//kas pikkus vähemalt 8
			if (strlen ($_POST["signupPassword"]) < 8 ){
				
				$signupPasswordError = " Parool peab olema vähemalt 8 tähemärki pikk";
				
			}
			
		}
		

	}
	$gender = "";
	if(isset($_POST["gender"])) {
		if(!empty($_POST["gender"])){
			
			//on olemas ja ei ole tühi
			$gender = $_POST["gender"];
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
				
				<input placeholder="Email" name= "loginEmail" type="email">
				<br><br>
				<input placeholder="Parool" name="loginpassword" type="password">
				<br><br>
				<input type="submit">
				
			</form>
		<h1>Loo kasutaja</h1>
			<form method="POST">
				
				<label for="email">Email  </label>
				
				<input placeholder="example@gmail.com" name= "signupEmail" type="email"> <?php echo $signupEmailError; ?>
				<br><br>
				<label for="parool">Password </label>
				
				<input placeholder="&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;" name="signupPassword" type="password"><?php echo $signupPasswordError; ?>
				<br><br>
				<label for="kuupäev">Date of birth  </label>
				
				<input placeholder="day/month/year" name="sünnikuupäev"  >
				<br><br>
			
				
				<?php if ($gender == "male") { ?>
				<input type="radio" name="gender" value="male" checked > Mees<br>
				<?php } else { ?>
					<input type="radio" name="gender" value="male"> Mees<br>
				<?php } ?>
			
				<?php if ($gender == "female") { ?>
					<input type="radio" name="gender" value="female" checked > Naine<br>
				<?php } else { ?>
					<input type="radio" name="gender" value="female"> Naine<br>
				<?php } ?>
			
				<?php if ($gender == "other") { ?>
					<input type="radio" name="gender" value="other" checked > Muu<br>
				<?php } else { ?>
					<input type="radio" name="gender" value="other"> Muu<br>
				<?php } ?>
				
				<br><br>
				
				<input type="submit" value="Loo kasutaja">
			</form>	
		
		

	</body>
</html>