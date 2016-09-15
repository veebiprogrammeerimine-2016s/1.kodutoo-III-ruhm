<?php

//var_dump($_GET) ;
//echo "<br>"
//var_dump ($_POST) ;

$signupEmailError = "";



//kas on üldse olemas
if (isset($_POST["signupEmail"]))  { 
	//oli olemas, ehk keegi vajutas nuppu
	//kas oli tühi
	if (empty ($_POST["signupEmail"]))  { 
		//oli tõesti tühi"
		$signupEmailError = "Email oli tühi";

}
    }

?>



<?php

//var_dump($_GET) ;
//echo "<br>"
//var_dump ($_POST) ;

$signupPasswordError = "";



//kas on üldse olemas
if (isset($_POST["signupPassword"]))  { 
	//oli olemas, ehk keegi vajutas nuppu
	//kas oli tühi
	if (empty ($_POST["signupPassword"]))  { 
		//oli tõesti tühi"
		$signupPasswordError = "Parool oli tühi";

	} else { 
		// oli midagi, ei olnud tühi
		// kas pikkus vähemalt 8
		if (strlen ($_POST["signupPassword"]) < 8 )  { 
				$signupPasswordError = "Parool peab olema vähemalt 8 tm pikk";
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

	<h1>Loo kasutaja1</h1>

	<form method="POST">

		<label>E-post</label><br>

		<br>


		<input placeholder="E-mail" name="signupEmail" type= "Email">      <?php echo $signupEmailError; ?>
		<br>
		<br>
		<label>Parool</label><br>

		<br>

		<input placeholder="Parool" "signupPassword" type= "Password"> <?php echo $signupPasswordError; ?>

		<br><br>

		<input type= "Submit" value= "Loo kasutaja">

	</form>

	<h1>Logi sisse</h1>

	<form method="POST">

		<label>E-post</label><br>

		<br>


		<input placeholder="E-mail" name="loginEmail" type= "Email">
		<br>
		<br>
		<label>Parool</label><br>

		<br>

		<input  placeholder="Parool" "loginPassword" type= "Password">

		<br><br>

		<input type= "Submit" 

	</form>

</body>
</html>