<HTML>
<style>
body {
    background-image: url("images.jpg");
} 

</style>
<body>
   
        <table bgcolor="blue" width="100%" height="100%">
         <form action="validation.php" method="POST">
        <tr>
        <td>
        <H2>Login Here</H2>
        <label>User Name</label>
        <input type="text" name="user" required><br>
        <label>Password</label>&nbsp&nbsp&nbsp
        <input type="password" name="password" required><br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        <input type="submit" name="Login" value="Login">
        <hr>

    </form>
    </td>
    <td>
         <form action="#" method="POST" name="myForm">
        <tr>
        <td>
        <H2>Registered Here</H2>
        <label>User Name</label>
        <input type="text" name="user" onchange="myFunction()"><br>
		<label id="demo"></label>
        <label>Password</label>&nbsp&nbsp&nbsp
        <input type="password" name="password" onchange="myFunction1()" required><br><label id="demo1"></label><br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        <input type="submit" name="Registered" value="Registered">
        
    </form>
    </td>
<a href="normaluser.php">Normal User</a>
</body>
<script>
	function myFunction()
	{
		var str = document.forms["myForm"]["user"].value;
		if(str.length<1)
		{
			document.getElementById("demo").innerHTML="User Name NOT be Null"
		}
	}
	function  myFunction1() { 
            var res; 
            var str = 
                document.forms["myForm"]["password"].value; 
            if (str.match(/[a-z]/g) && str.match( 
                    /[A-Z]/g) && str.match( 
                    /[0-9]/g) && str.match( 
                    /[^a-zA-Z\d]/g) && str.length >= 8) 
                res = "Password is valid"; 
            else 
                res = "Password is in valid"; 
            document.getElementById("demo1").innerHTML = res; 
  
        } 
</script>
<?php
session_start();
header('location:index.php');
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
	header('location:index.php');
}
else
{
	$reg="insert into usertable(name,password) values('$name','$pass') ";
	mysqli_query($con,$reg);
	echo "registration sucess ful";
}
?>