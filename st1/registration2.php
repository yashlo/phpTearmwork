<?php
		$con = mysqli_connect('localhost','root','');
mysqli_select_db($con,'userregistration');
$name1 = $_POST['name'];
$name = $_POST['user'];
$area = $_POST['add'];
$gen = $_POST['gender'];
$stb1 = $_POST['sub1'];
$stb2 = $_POST['sub2'];
$stb3 = $_POST['sub3'];
$pass = $_POST['password'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$i=1;
	$reg="insert into facultireigster values('$name1','$name','$area','$gen','$stb1','$stb2','$stb3','$pass','$email',$phone) ";
	mysqli_query($con,$reg);
	echo "registration sucess ful";
	$i=0;
if($i=0)
{
	echo"Registration is not sucessful";
}
?>