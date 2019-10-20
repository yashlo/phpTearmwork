<html>
	<body>
	<form action="registration1.php" method="POST" name="myForm">
		<hr>
	<marquee>Welcome to Student Management System</marquee>
	<hr>
	||<a href="Student.php">student</a>||
	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	||<a href="Feddback.php">Feedback</a>||
	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
		||<a href="logout.php">LOGOUT</a>||



	<hr>
	<hr>
			<table>
				<tr>
					<td>Nmae</td>
					<td><input type="text" name="name" ></td>
				</tr>
								<tr>
					<td>UserNmae</td>
					<td><input type="text" name="user" onchange="myFunction()"></td><br>
					<label id="demo">	</label>
				</tr>
					<TR>
			<TD>ADDRESS    :-</TD>
			<TD><TEXTAREA COLS="10"ROWS="3" name="add" onchange="myAddress()">
			</TEXTAREA></TD>
			<td><label id="demo3">	</label></td>
			</TR>
		<TR>
		<TD>GENDER     :-</TD>	
			<TD><INPUT 	TYPE="RADIO"NAME="gender"VALUE="MALE">MALE  <INPUT TYPE="RADIO"NAME="gender"VALUE="FEMALE">FEMALE </TD>
	</TR>
		<TR>
			<TD>STD</TD>
			<td><input type="text" name="std" required></td>
				</tr>
				<tr>
			<TD>Password</TD>
     <td>   <input type="password" name="password" onchange="myFunction1()"></td>
     <td><label id="demo1">	</label></td>
 </tr>
 	<tr>
 		<td>Email</td>
	  <td>    <input type="Email" name="email" onchange="validateEmail(this)"></td>
	  	<td><label id="demo2">	</label></td>
    </tr>
    <tr>
 		<td>Phone</td>
	  <td>    <input type="phone" name="phone" required /></td>
    </tr>
 	<tr>
	  <td>    <input type="submit" name="Login" value="submit"></td>
    </tr>
</table>
		</form>
		
	</body>
	<script>
			function myFunction()
	{
		var str = document.forms["myForm"]["user"].value;
		document.getElementById("demo").innerHTML=str;
		if(str.length<4)
		{
			document.getElementById("demo").innerHTML="User Name NOT be Null"
		}
	}
	function	myAddress()
	{
		var str = document.forms["myForm"]["add"].value;
		document.getElementById("demo3").innerHTML=str;
		if(str.length<10)
		{
			document.getElementById("demo3").innerHTML="User Name NOT be Null"
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
                document.getElementById("demo1").innerHTML = "Password is valid"; 
            else 
                  document.getElementById("demo1").innerHTML = "Password is in  valid"; 
  
        } 
        function validateEmail(emailField){
        var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;

        if (reg.test(emailField.value) == false) 
        {
              document.getElementById("demo2").innerHTML = "Invalid Email id"; 
           // return false;
        }
        else
        {
        	 document.getElementById("demo2").innerHTML = "valid Email id"; 
        }

}
	</script>
</html>
