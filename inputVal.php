<?php
 //Input validation. Will yell at user if fields left blank/special characters in e-mail/password <6 or >16 characters
 //Additionally, cancels registration SQL query if any of the fields are empty
	$connectionAbort="validation unsuccessful";

	$regEmailError="";
	if(isset($_POST["regEmail"])) {
		if(empty($_POST['regEmail'])){
			$regEmailError = "<br>Palun sisesta meiliaadress!";
			  $connectionAbort = TRUE;}
    else {
      $email = $_POST["regEmail"];
      if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $regEmailError = "<br>Palun sisesta õiges formaadis meiliaadress";
        $connectionAbort = TRUE;}}}

  $regPassError="";
  	if(isset($_POST["regPass"])) {
  		if(empty($_POST['regPass'])){
  			$regPassError = "<br>Palun sisesta parool!";}
      else {if(strlen($_POST['regPass'])<6 or strlen($_POST['regPass'])>16){
        $regPassError= "<br>Parooli pikkus peab olema 6-16 tähemärki!";}
        }}

 $regNameError="";
      if(isset($_POST["regUserName"])) {
        if(empty($_POST['regUserName'])){
          $regNameError = "<br>Palun sisesta oma nimi!";
      }}

  $regGroupError="";
		if(isset($_POST["regUserGroup"])) {
	  	if(empty($_POST['regUserGroup'])){
	      $regGroupError = "<br>Palun sisesta oma õpperühm!";
	    }}

if($regEmailError=="" && $regPassError=="" && $regNameError=="" && $regGroupError==""){
	$connectionAbort="validation passed";
}

?>
