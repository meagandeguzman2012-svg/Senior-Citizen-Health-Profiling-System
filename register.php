<!doctype html>
<html>
<head>
<title>Register</title>
</head>
<body background="img.jpg">

<h3 align="center"><font size=5 color =white>Registration Form</h3></font>
<form action="" method="POST">
<table align=center>
<tr><td><font size=4 color=#FFE87C><b>Username:</b></font></td><td> <input type="text" name="user"><br /></td></tr>
<tr><td><font size=4 color=#FFE87C><b>Password: </b></font></td><td><input type="password" name="pass"><br />	</td></tr>
<tr><td align=center><input type="submit" value="Register" name="submit" /></td>
	<td align=center><a href="login.php"><font size=4 color=#FFE87C><b>Login</b></font></a></td></tr>
</form>
</table>
<center>
<font size=3 color=#FFE5B4>

<?php
if(isset($_POST["submit"])){

if(!empty($_POST['user']) && !empty($_POST['pass'])) {
	$user=$_POST['user'];
	$pass=$_POST['pass'];

	$con=mysql_connect('localhost','root','') or die('jj');
	mysql_select_db('mani') or die("cannot select DB");

	$query=mysql_query("SELECT * FROM login WHERE username='".$user."'");
	$numrows=mysql_num_rows($query);
	if($numrows==0)
	{
	$sql="INSERT INTO login(username,password) VALUES('$user','$pass')";

	$result=mysql_query($sql);


	if($result){
	echo "Account Successfully Created";
	} else {
	echo "Failure!";
	}

	} else {
	echo "That username already exists! Please try again with another.";
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