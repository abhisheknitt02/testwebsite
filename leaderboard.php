<?php
$con=mysqli_connect('localhost','id11363466_root','password','id11363466_quizbase');
?>
<!DOCTYPE html>
<html>
<head>
	<title>leaderboard</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<style type="text/css">
		body
		{
			font-family: verdana;
		}
		h3
		{
			background: orange;
			border-radius: 10px;
			opacity: 0.6;
			color: snow;
			padding: 10px;
			width: 20%;
			margin-left: 38%;
			transition: opacity 0.3s;
		}
		h3:hover
		{
			opacity: 1.0;
		}
	</style>
</head>
<body>
	<div class="row">
		<div class="col-12 header">
			<span style="color:black;">Welcome </span><span>watch your rankings!</span>
		</div>
	</div>
	<?php
	$q="select name,highscore from user order by highscore desc";
	$r=mysqli_query($con,$q);
	while($rows=mysqli_fetch_array($r))
	{
		echo "<h3>$rows[0] $rows[1]</h3>";
	}
	?>
</body>
</html>