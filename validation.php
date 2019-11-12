<?php

session_start();
$con = mysqli_connect('localhost','id11363466_root','password');

mysqli_select_db($con,'id11363466_quizbase');

$name = $_POST['user'];
$pass = $_POST['password'];

$q = "select *from user where name = '$name' && password = '$pass'";

$result = mysqli_query($con,$q);
$num = mysqli_num_rows($result);
if($num==1)
{
	$_SESSION['username'] = $name;
	header('location:home.php');
}
else
	
{
	header('location:index.php');
}
?>