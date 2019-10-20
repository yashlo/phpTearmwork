<?php
		$con = mysqli_connect('localhost','root','');
mysqli_select_db($con,'userregistration');
$name1 = $_POST['name'];
$name = $_POST['user'];
$area = $_POST['add'];
$gen = $_POST['gender'];
$std = $_POST['std'];
$pass = $_POST['password'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$s = "select * from studentreigster where email='$email'";
$result=mysqli_query($con,$s);
$num=mysqli_num_rows($result);
$i=1;
if ($num == 1 )
{
	echo "User name is already taken";
	#header('location:login.php');
}
else
{
	$reg="insert into studentreigster values('$name1','$name','$area','$gen',$std,'$pass','$email',$phone) ";
	mysqli_query($con,$reg);
	echo "registration sucess ful";
	$i=0;
}
if ($i == 0)
{
	$s = "select * from usertable where name='$name'";

		$con = mysqli_connect('localhost','root','');
mysqli_select_db($con,'userregistration');
$name = $_POST['user'];
$pass = $_POST['password'];
$s = "select * from usertable where name='$name'";
$result=mysqli_query($con,$s);
$num=mysqli_num_rows($result);
if ($num == 1 )
{
	echo "User name is already taken";
	#header('location:login.php');
}
else
{
	$reg="insert into usertable(name,password) values('$name','$pass') ";
	mysqli_query($con,$reg);
	echo "registration sucess ful";
}
}


?>