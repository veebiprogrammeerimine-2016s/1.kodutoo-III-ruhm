

<!DOCTYPE html>
<html>
<head>
<style>
.footer{
	text-align:center;
}
.regarea{
	vertical-align:center;
	width:50%;
	margin-left:auto;
	margin-right:auto;
	text-align:center;
}
.ufield{
	box-sizing: border-box;
	width:75%;
	border:solid black 1px;
	border-radius:3px;
	height: 30px;
	margin:1px;
	padding:5px;
	font-size:15px;
	vertical-align: center;
}
.ubox{
width:75%;
border:solid black 1px;
border-radius:3px;
height: 40px;
margin:2px;
padding:5px;
font-size:20px;
font-weight:bolder;
vertical-align: center;
margin-left:2px;
}

</style>
<title>reg</title>
</head>
<body>
<div class="regarea">
<h1> Registreeru kasutajaks</h1>
<?php include "inputVal.php"; ?>
<form method="post">
  <input class="ufield" type="e-mail" name="regEmail" placeholder="Meiliaadress" ><?php echo $regEmailError; ?></br>
  <input class="ufield" type="password" name="regPass" placeholder="Parool"><?php echo $regPassError; ?></br>
  <input class="ufield" type="text" name="regUserName" placeholder="Sinu nimi"><?php echo $regNameError; ?><br>
  <input class="ufield" type="text" name="regUserGroup" placeholder="Sinu õpperühm"><?php echo $regGroupError; ?><br>
  <input class="ubox"  Type="submit" name="submit" value="Registreeru">
  <br>
</form>
</div>

</body>
</html>
