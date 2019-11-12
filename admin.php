<?php
session_start();
$con=mysqli_connect('localhost','id11363466_root','password');
mysqli_select_db($con,'id11363466_quizbase');
?>
<!DOCTYPE html>
<html>
<head>
	<title>admin login</title>
	<style>
		input
		{
			width: 100%;
			padding: 5px;
		}
		body
		{
			font-family: candara;
			background: grey;
			margin: 0px;
		}
		form
		{
			width: 50%;
			background: lightgrey;
			padding: 50px;
			margin-left: 20%;
			margin-top: 10%;
			border-radius: 10px 10px;
		}
		button
		{
			padding: 10px 50px;
			margin-left: 40%;
		}
	</style>
</head>
<body>
	<form action="validateadmin.php" method="post">
		Name <input type="text" name="aname" autofocus><br><br>
		Password <input type="password" name="apass"><br><br>
		<button type="submit">login</button>
	</form>
</body>
</html>