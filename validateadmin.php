<?php
$con=mysqli_connect('localhost','id11363466_root','password','id11363466_quizbase');
?>
<?php
$name = $_POST['aname'];
$pass = $_POST['apass'];

$q = "select *from admin where name='$name' && password='$pass'";
$res = mysqli_query($con,$q);
$row = mysqli_num_rows($res);

if($row==1)
{
	header('location:about.php');
}
else
echo "wrong credentials!";
?>