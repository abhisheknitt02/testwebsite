<?php

session_start();
$con = mysqli_connect('localhost','id11363466_root','password');

mysqli_select_db($con,'id11363466_quizbase');
?>
<?php
	$ques=$_POST['ques'];
	$qno=$_POST['quesno'];
	$ans=$_POST['ans'];
	$l="insert into questions values($qno,'$ques',($qno-1)*4+$ans)";
	mysqli_query($con,$l);
	$opt1 = $_POST['op1'];
	$opt2 = $_POST['op2'];
	$opt3 = $_POST['op3'];
	$opt4 = $_POST['op4'];
	$ai=$_POST['quesno'];
	$m="insert into answers values(($qno-1)*4+1,'$opt1',$ai)";
	mysqli_query($con,$m);
	$m="insert into answers values(($qno-1)*4+2,'$opt2',$ai)";
	mysqli_query($con,$m);
	$m="insert into answers values(($qno-1)*4+3,'$opt3',$ai)";
	mysqli_query($con,$m);
	$m="insert into answers values(($qno-1)*4+4,'$opt4',$ai)";
	mysqli_query($con,$m);

	echo "<h1>$ques inserted</h1>";
?>
	<a href="index.php" style="box-shadow: 2px 2px 4px grey;padding: 10px 20px;">back</a>