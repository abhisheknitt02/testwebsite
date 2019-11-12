<?php
 
session_start();

$con = mysqli_connect('localhost','id11363466_root','password');
mysqli_select_db($con,'id11363466_quizbase');
?>
<!DOCTYPE html>
<html>
<head>
	<title>check</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<style type="text/css">
		h4
		{
			text-align:center;
		}
		.here
		{
			box-shadow: 2px 2px 10px grey;
			margin-top: 20px;
		}
	</style>
</head>
<body>

	<div class="row">
	<div class="col-12 header" style="box-shadow: 2px 0px grey;">
		<h2 style="text-align: center;color: black;">
			Score sheet
		</h2>
	</div>
</div>
<div class="row">
	<div class="col-4">
	</div>
	<div class="col-4 here">
	Hi<?php
	$name=$_SESSION['username'];
	$f = "select highscore from user where name='$name'";
	$qp= mysqli_query($con,$f);
	$qpa = mysqli_fetch_array($qp);
	echo " ".$_SESSION['username'];
	$y=0;
	$k="select score from highscore where rank=1";
	$j=mysqli_query($con,$k);
	$highscore=mysqli_fetch_assoc($j);
	$h=$highscore['score'];
	if(isset($_POST['quizcheck']))
	$x = $_POST['quizcheck'];
	$one="select answer from questions";
	$two=mysqli_query($con,$one);
	$i=1;
	while($rows=mysqli_fetch_array($two))
	{
		if(isset($x[$i]))
		if($rows[0]==$x[$i])
			$y++;
		$i++;
	}
	if ($h<$y)
	{
		$c = "update highscore set score=$y";
		mysqli_query($con,$c);
	}
	if($y>$qpa[0])
	{

		$a = "update user set highscore = $y where name='$name'";
		mysqli_query($con,$a);
	}

	
	$active="update user set active=0 where name='$name'";
	mysqli_query($con,$active);
	


	echo " "."<b>your score is $y</b>";
	session_destroy();
	?>
	<a href="index.php">HOME</a>
</div>

</div>
</body>
</html>