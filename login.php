<!doctype html>
<html>
<head>
<title>Login</title>
</head>
<body background="img.jpg">
<p>
<h3 align="center"><font size=5 color =white>ONLINE E- VOTING SYSTEM</h3></font>
<form action="" method="POST">
<table align=center>
<tr><td><font size=4 color=#FFE87C><b>Username/VOTER ID No:</b></td><td> <input type="text" name="user"><br /></font></td></tr>
<tr><td><b><font size=4 color=#FFE87C>Password: </b></td><td><input type="password" name="pass"><br />	</td></tr></font>
<tr><td align=right><input type="submit" value="Login" name="submit" /></td>
<td><p align=center><a href="register.php"><font size=4 color=#FFE87C><b>Signup</b></font></a> </p></td></tr>
</table>
</form>
<center>
<font size=3 color=#FFE5B4>
<?php
if(isset($_POST["submit"])){

if(!empty($_POST['user']) && !empty($_POST['pass'])) {
	$user=$_POST['user'];
	$pass=$_POST['pass'];

	$con=mysql_connect('localhost','root','') or die(mysql_error());
	mysql_select_db('mani') or die("cannot select DB");

	$query=mysql_query("SELECT * FROM login WHERE username='".$user."' AND password='".$pass."'");
	$numrows=mysql_num_rows($query);
	if($numrows!=0)
	{
	while($row=mysql_fetch_assoc($query))
	{
	$dbusername=$row['username'];
	$dbpassword=$row['password'];
	}

	if($user == $dbusername && $pass == $dbpassword)
	{
	session_start();
	$_SESSION['sess_user']=$user;

	/* Redirect browser */
	header("Location: member.php");
	}
	} else {
	echo "Invalid username or password!";
	}

} else {
	echo "All fields are required!";
}
}
?>
</center>
</font>
</body>
</html>