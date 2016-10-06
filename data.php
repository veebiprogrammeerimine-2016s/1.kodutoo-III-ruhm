<?php
require("functions.php");
require("config.php");

//is the user meaning to log out?
if (isset($_GET["logout"])) {
	session_destroy();
	header("Location: login.php");
}

if (!isset($_SESSION["userId"])) {
header("Location: login.php");
}

if (isset($_POST["note"]) and isset($_POST["notecolor"])) {
	if (!empty($_POST["note"]) and !empty($_POST["notecolor"])) {
		echo("WHY IS THIS SO");
		$note = $_POST["note"];
		$color = $_POST["notecolor"];
		echo($note." ".$color);
		saveNote($note, $color);
	}
}
?>


<h1>Data</h1>
<p>
Welcome, <?=$_SESSION["userEmail"]?>.
<a href="?logout=1">Log out</a>
</p>

	
	<h1>Enter some notes!</h1>
	<fieldset>
	<legend>Enter notes!</legend>
	<form method="POST">
	<label>Note</label>	
	<br>
	<textarea name="note" type="text" autofocus rows="4" cols="50">
	</textarea>
	<br><br> 
	<label>Note color</label>
	<br>
	<input name="notecolor" type="color">
	<br><br>
	<input type="submit" value="Save your note">
	</form>
	</fieldset>
