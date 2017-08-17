<?php
include('config.php');
if(isset($_POST['login']))
{
	$username=$_POST['uname'];
	$password=$_POST['pass'];
	if($username=='' or $password=='')
	{
		echo "<script>alert('Please fill all field')</script>";
	}
	else
	{
		$que="select * from registration where username='$username' && password='$password'";
		$res=mysql_query($que);
		$cnt=mysql_num_rows($res);
		if($cnt==0)
		{
			echo "<script type=text/javascript>alert('username or password invalid')</script>";
		} 
		else
		{
			header('location:welcome.php');
		}
	}
}

?>
<!Doctype Html>
<html>
<head>

	<title>Book Doctor's Appoinment</title>
	<link rel="stylesheet" type="text/css" href="script.css">
	</head>
	<body>
<div class="head">
	<div class="home"><a href="index.php">Home</a></div>
	<div class="reg1"><a href="register.php">Sign Up</a></div>
</div>

<div class="container">
<div class="midcontainer">
<div class="cenconateiner">
<h1>Login</h1>
<form method="post" action="">
<div class="form1">
Username:-<input type="text" class="uname" name="uname"><br/>
Password:-<input type="password" class="pass" name="pass">

<input type="submit" value="Login" class="log"name="login">
<a href="passforgate.php" class="for">Forgate Password</a>
</div>

</form></div></div></div>
<div class="footer"></div>
</body>
</html>