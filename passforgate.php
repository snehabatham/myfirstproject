<?php
include('config.php');
if(isset($_POST['submit']))
{
	$to=$_POST['mail'];
	$subject="fvgfdgvdfgvfd";
	$header="From:dfwsd@gmail.com";
	$msg="dsfvdvgrgfv";
	$ret=mail($to, $subject, $msg, $header);
	if($ret==true)
	{
       echo "<script>alert('mail succesfully send')</script>";
	}
	else
	{
       echo "<script>alert('mail can not be send')</script>";
	}

}
?>




<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="script.css">
</head>
<body>
	<div class="conta">
		<form action="" method="post">
			<h1>Forgate Password</h1>
		Email:-<input type="text" name="mail"></br></br>
		<input type="submit" name="submit" value="Submit">
	</div>
</body>
</html>