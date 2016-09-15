<?php
/*var_dump($_GET);
echo "<br>";
var_dump($_POST);
*/
$signupEmailError="placeholder='Meiliaadress'";
//kontrollin väärtuste olemasolu
	if(isset($_POST["signupEmail"])) {

		if(empty($_POST['signupEmail'])){
			$signupEmailError = "placeholder='Sisesta meiliaadress!'";
		}

	}




	$signupPassError="placeholder='Parool'";
//kontrollin väärtuste olemasolu
	if(isset($_POST["signupPass"])) {

		if(empty($_POST['signupPass'])){
			$signupPassError = "placeholder='Sisesta parool!'";
		}
		else {

			if (strlen($_POST['signupPass'])<8){
				$signupPassError="placeholder='Parool peab olema vähemalt 8 märki!'";
			}
		}
	}

	$loginEmailError="placeholder='Meiliaadress'";
//kontrollin väärtuste olemasolu
	if(isset($_POST["loginEmail"])) {

		if(empty($_POST['loginEmail'])){
			$loginEmailError = "placeholder='Sisesta meiliaadress!'";
		}
	}



	$loginPassError="placeholder='Parool'";
//kontrollin väärtuste olemasolu
	if(isset($_POST["loginPass"])) {

		if(empty($_POST['loginPass'])){
			$loginPassError = "placeholder='Sisesta parool!'";
		}
	}




?>

<!DOCTYPE html>
<html>
<head>
	<title>Logi sisse!</title>
    <link rel="stylesheet" type="text/css" href="css/style.css"></link>
</head>
	<body>
		<h1>Logi sisse!</h1>
		<div class="loginarea">
		<form method="post">
			<input class="loginfield" type="email" name="loginEmail" <?php echo $loginEmailError ?>> 
			<br>
			<input class="loginfield" type="password" name="loginPass" <?php echo $loginPassError ?>>
			<br>
			<input class="loginbutton" type="submit" name="loginBtn" value="Logi sisse">
		</form>
		</div>	

		<h1>Registreeru!</h1>
		<div class="signuparea">
		<form method="post">
			<input class="loginfield" type="email" name="signupEmail" <?php echo $signupEmailError ?>>
			<br>
			<input class="loginfield" type="password" name="signupPass" <?php echo $signupPassError ?>>
			<br>
			<input class="loginbutton" type="submit" name="signupBtn" value="Registreeru">
		</form>
		</div>	

	</body>
</html>