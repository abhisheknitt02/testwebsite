<?php

session_start();
header('location:index.php');


$con = mysqli_connect('localhost','id11363466_root','password');
if($con)
	echo "wow connection successfull";
else
	echo "no unsuccessfull!";
mysqli_select_db($con,'id11363466_quizbase');

$name = $_POST['user'];
$pass = $_POST['password'];

$q = "select *from user where name = '$name'";
$result = mysqli_query($con,$q);
$num = mysqli_num_rows($result);
if($num)
{
	echo "<br><h1>duplicate data</h1>";
}
else
{
	$qy = "insert into user(name,password) values('$name','$pass')";
mysqli_query($con,$qy);
}
?>