<?php
session_start();
$con = mysqli_connect('localhost','id11363466_root','password');
mysqli_select_db($con,'id11363466_quizbase');

$name=$_SESSION['username'];
$active="update user set active=0 where name='$name'";
mysqli_query($con,$active);

session_destroy();
header('location:index.php');
?>