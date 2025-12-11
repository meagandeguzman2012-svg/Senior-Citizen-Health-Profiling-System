<?php 
session_start();
if(!isset($_SESSION["sess_user"])){
	header("location:login.php");
} else {
?>
<!doctype html>
<html>
<head>
<title>Welcome</title>
</head>
<body background="img.jpg">
<font color=#EDDA74><h2 >Welcome, <?=$_SESSION['sess_user'];?>! </font><a href="logout.php"><font color=#F5F5DC>Logout</a></h2></font>
<font size=3 color=#FFE5B4>

<b>Seletion Of Party</b>
<br>
<form action="test2.php" method="post">
Please Select your Party to vote:<br>
<input type="radio" name="party" value="DMK">DMK<br>
<input type="radio" name="party" value="ADMK">ADMK<br>
<input type="radio" name="party" value="BJP">BJP<br>
<input type="radio" name="party" value="CNG">CNG<br>
<input type="radio" name="party" value="NOTA">NOTA<br>
<input type="submit" value="Submit">
</form>
</font>
</body>
</html>
<?php
}
?>


