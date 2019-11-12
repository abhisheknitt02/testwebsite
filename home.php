<?php
 
session_start();

$con = mysqli_connect('localhost','id11363466_root','password');
mysqli_select_db($con,'id11363466_quizbase');
?>
<?php
	

	if(!(isset($_SESSION['username'])))
		header('location:index.php');

	$asdf="select status from switch";
	$ree=mysqli_query($con,$asdf);
	$xaa=mysqli_fetch_array($ree);
	if(1)
	{
	$namet=$_SESSION['username'];
	$qu="select active from user where name='$namet'";
	$re=mysqli_query($con,$qu);
	$xa=mysqli_fetch_array($re);
	if($xa[0]==1)
	{
		session_destroy();
		header('location:index.php');
	}
	else
	{
		$active="update user set active=1 where name='$namet'";
		mysqli_query($con,$active);
	}
	}
	else
	{
		$assa="update switch set status=0";
		mysqli_query($con,$assa);
		echo "ok";
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<style>
		.logout
		{
			margin-left: 20px;
		}
		body{
			background: url("file.png") no-repeat right top;
		}
	</style>
</head>
<body class="op">

	<div class="row">
		<div class="col-12 header">
			<span>
				highscore 
				<?php
					$r="select score from highscore where rank=1";
					$w=mysqli_query($con,$r);
					$f=mysqli_fetch_assoc($w);
					$rt=$f['score'];
					echo "$rt";
				?>
			</span>
	<span style="color:white;float: right;">
		Hi <?php echo $_SESSION['username']; ?>
		<a href="logout.php" class="logout" style="float: right;color: black">LOGOUT</a>
	</span>
	</div>
	</div>
	<div class="row">
		<div class="col-12">
			<h1 style="text-align: center;color: #485460;">Lets start the Exam!</h1><hr>
		</div>
	</div>
	<div class="row">
	<div class="col-3">
	</div>
	<div class="col-6 maingame" style="box-shadow: 4px 6px 20px #485460;border-radius: 10px 10px;">
		<div style="text-align: center;color: #1e272e">Hi <?php echo $_SESSION['username'];?><br>Best of luck!. It is MCQ Exam. Select one out of 4.</div><br>
		


		<form action="check.php" method="post">
		<?php
		for($i=1;$i<=100;$i++)
		{
		$q = "select *from questions where qid=$i";
		$query = mysqli_query($con,$q);

		while($rows = mysqli_fetch_array($query)){
		?>
	

	<div class="que" style="background: snow;opacity: 1.0">
		<h4 class="had" style="background: #bdc3c7;padding: 5px 5px 5px 10px;">
			<?php echo $rows['question']	?>
		</h4>
		<?php

		$q = "select *from answers where ans_id=$i";
		$query = mysqli_query($con,$q);
		while($rows = mysqli_fetch_array($query)){
		?>
		<div>
			<input type="radio"  name="quizcheck[<?php echo $rows['ans_id'];?>]" value="<?php  echo $rows['aid']; ?>" style="cursor: pointer;">
			<?php echo $rows['answer']; ?>
		</div>
	
		

	<?php
	}
	}
	}
	?>
	<input type="submit" name="submit" value="SUBMIT" style="margin-left: 40%;padding: 20px 40px;color:white; border:none;background: #0be881;cursor: pointer;">
	</form>
	</div>
	</div>



	<div class="col-3">
	</div>
	</div>
	
</body>
</html>