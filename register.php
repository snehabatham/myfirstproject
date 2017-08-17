<!Doctype Html>
<html>
<head>

	<title>Book Doctor's Appoinment</title>
	<link rel="stylesheet" type="text/css" href="script.css">
	</head>
	<body>
<div class="head">
	<div class="home"><a href="index.php">Home</a></div>
	<div class="reg1"><a href="login.php">Login</a></div>
</div>

<div class="container">
	<form method="post" action="valueregis.php">
<div class="container1">

<h1>Sign Up</h1>
<div class="val">
<div class="leftval">
<div class="val1">First Name</div>
<div class="val1">Last Name</div>
<div class="val1">User Name</div>
<div class="val1">Password</div>
<div class="val1">Email Address</div>
<div class="val1">Gender</div>
<div class="val1">Date of Birth</div>
<div class="val1">Phone</div>
<div class="val1">City</div>
<div class="val1">Country</div>

</div>
<div class="rigval">
<div class="val2"><input type="text" name="fname" class="fname"></div>
<div class="val2"><input type="text" name="lname" class="lname"></div>
<div class="val2"><input type="text" name="uname" class="uname1"></div>
<div class="val2"><input type="password" name="pass" class="pass1"></div>
<div class="val2"><input type="text" name="email" class="email"></div>
<div class="val2">Female<input type="radio" name="gender" checked="checked" value="Female">Male<input type="radio" name="gender" value="Male"></div>
<div class="val2"><input type="date" name="dob"></div>
<div class="val2"><input type="text" name="phone" class="phone"></div>
<div class="val2"><input type="text" name="city" class="city"></div>
<div class="val2"><select class="country" name="country"><option>Select</option>
<option>Afghanistan</option>
<option>Albania</option>
<option>Belize</option>
<option>Canada</option>
<option>India</option>
<option>Japan</option>
<option>Kuwait</option>
<option>New Zealand</option></select></div>
<input type="submit" value="Register" class="fil" name="submit"></div></div></div>

</form></div>
<div class="footer"></div>
</body>
</html>

