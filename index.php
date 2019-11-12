<?php
//header('location:home.php');
session_start();

$con = mysqli_connect('localhost','id11363466_root','password');
mysqli_select_db($con,'id11363466_quizbase');
?>
<?php

$aa="select active from user";
$ra=mysqli_query($con,$aa);
while($rows=mysqli_fetch_array($ra))
{
	if($rows[0]==1)
	{
		$asd="update switch set status=1";
		mysqli_query($con,$asd);
		//echo "ok";
		//header('location:home.php');
	}
}

$e="update highscore set score=0 where rank=1 ";
mysqli_query($con,$e);
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="style.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
	<style>
		button
		{
			padding-top: 8px;
		}
		.f1
		{
			background: #ecf0f1;
			box-shadow: 2px 2px 5px lightgrey;
		}
		h1
		{
			font-family: 'Roboto';
		}
		body
		{
			
		}
	</style>
</head>
<body>
	
	<div class="row">
	<div class="col-12 header" ><span> Exam</span><span style="float: right;">test knowledge</span></div>
	</div>
	<div class="row">
		<div class="col-12">
			<h1 style="text-align: center;color: #ffa801#1e272e">welcome to Exam world!</h1><hr>
		</div>
	</div>
	<div class="row">

	<div class="col-1">
	</div>
	<div class="col-4 f1">
		<h2 style="text-align: center;">L o g i n</h2><hr>
		<form action="validation.php" method="post">
			<div class="fgroup">
				<label>username</label>
				<input type="text" name="user" required style="width: 100%;" required autofocus placeholder="name here">
			</div>
			<div class="fgroup">
				<label>password</label>
				<input type="password" name="password" required style="width: 100%;" placeholder="password">
			</div>
			<button type="submit" style="margin-left: 35%;">login</button>
		</form>
	</div>


	<div class="col-2	">
		<a href="admin.php" class="bua">Admin Login</a>
		<a href="leaderboard.php" class="bua">Leaderboard</a>
		<a href="about.html" class="bua">About</a>
		
	</div>


	<div class="col-4 f1">
		<h2 style="text-align: center;">S i g n u p</h2>
		<hr>
		<form action="registration.php" method="post">
			<div class="fgroup">
				<label>username</label>
				<input type="text" name="user" style="width: 100%;" required placeholder="id">
			</div>
			<div class="fgroup">
				<label>password</label>
				<input type="password" name="password" style="width: 100%;" required placeholder="password">
			</div>
			<button type="submit" style="margin-left: 35%;">signup</button>
		</form>
	</div>

	<div class="col-1">
	</div>
</div>
</body>
</html>