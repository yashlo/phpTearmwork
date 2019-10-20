<script>
	function myFunction()
	{
		
	}
</script>
<?php
session_start();
header('location:use.php');
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
	header('location:login.php');
}
else
{
	$reg="insert into usertable(name,password) values('$name','$pass') ";
	mysqli_query($con,$reg);
	echo "registration sucess ful";
}
?>