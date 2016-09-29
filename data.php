<?php
require("functions.php");

//is the user meaning to log out?
if (isset($_GET["logout"])) {
	session_destroy();
	header("Location: login.php");
}

if (!isset($_SESSION["userId"])) {
header("Location: login.php");
}
?>

<h1>Data</h1>
<p>
Welcome, <?=$_SESSION["userEmail"]?>.
<a href="?logout=1">Log out</a>
</p>
