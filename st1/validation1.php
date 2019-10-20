<?php
session_start();
$con = mysqli_connect('localhost','root','');
mysqli_select_db($con,'userregistration');
$email=$_POST['Email'];
$pass = $_POST['password'];
//$s = "select * from studentreigster where email='$email' && password='$pass'";
$s = "select * from usertable where name='$email' && password='$pass'";
$result=mysqli_query($con,$s);
$num=mysqli_num_rows($result);
#$re=$conn->query($s);
if ($num == 1 )
{
	$_SESSION['email']=$email;
	header('location:homestud.php');
}
else
{
	#header('location:login.php');
	echo "You are not successfuly login";
}
?>
