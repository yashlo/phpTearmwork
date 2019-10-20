<HTML>
<style>
body {
    background-image: url("images.jpg");
}


</style>
<body>

        ][-<table bgcolor="blue" width="100%" height="100%">
         <form action="FacultiValidation.php" method="POST">
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
<a href="login.php">Admin User</a>&nbsp&nbsp&nbsp&nbsp
<a href="FacultiLogin.php">Faculti</a>
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
            var str =
                document.forms["myForm"]["password"].value;
            if (str.match(/[a-z]/g) && str.match(
                    /[A-Z]/g) && str.match(
                    /[0-9]/g) && str.match(
                    /[^a-zA-Z\d]/g) && str.length >= 8)
                document.getElementById("demo1").innerHTML = "Password is valid";
            else
                //res = "Password is in valid";
            document.getElementById("demo1").innerHTML = "Password is in valid";

        }
</script>