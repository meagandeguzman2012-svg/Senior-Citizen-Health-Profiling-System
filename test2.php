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
<font color=#EDDA74><h2 >Thank You <?=$_SESSION['sess_user'];?>! </font><a href="logout.php"><font color=#F5F5DC>Logout</a></h2></font>

<?php
}
$con = mysql_connect("127.0.0.1","root","");
if (!$con)
{
die('Could not connect: ' . mysql_error());
}
mysql_select_db("mani",$con);
/*$sql="create table countvotes(party varchar(10))";
if (!mysql_query($sql,$con))
{
die('Error: ' . mysql_error());
}*/
$part=$_POST['party'];
$sql="INSERT INTO countvotes VALUES('$part')";
if (!mysql_query($sql,$con))
{
die('Error: ' . mysql_error());
}
echo "<font size=3 color=#FFE5B4>
Your Vote Recorded Successfully</font>
";
mysql_close($con);
?>
</body>
</html>