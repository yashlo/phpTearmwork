<html>
	<body>
	<form action="registration2.php" method="POST" name="myForm">
		<hr>
	<marquee>Welcome to Student Management System</marquee>
	<hr>
	||<a href="Faculti.php">faculty</a>||
	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	||<a href="Feddback.php">Feedback</a>||
	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
		||<a href="logout.php">LOGOUT</a>||



	<hr>
	<hr>
			<table>
				<tr>
					<td>Nmae</td>
					<td><input type="text" name="name" onchange="Validate()"></td>
					 <TD><lable id="demo"></lable></td>
				</tr>
								<tr>
					<td>UserNmae</td>
					<td><input type="text" name="user"onchange="Validate1()"></td>
					 <TD><lable id="demo1"></lable></td>
				</tr>
					<TR>
			<TD>ADDRESS    :-</TD>
			<TD><TEXTAREA COLS="10"ROWS="3" name="add">
			</TEXTAREA></TD>
			</TR>
		<TR>
		<TD>GENDER     :-</TD>	
			<TD><INPUT 	TYPE="RADIO"NAME="gender"VALUE="MALE">MALE  <INPUT TYPE="RADIO"NAME="gender"VALUE="FEMALE">FEMALE </TD>
	</TR>
		<TR>
			<TD>Subject1</TD>
			<td><input type="text" name="sub1"  /></td>
				</tr>
				<TR>
			<TD>Subject2</TD>
			<td><input type="text" name="sub2" /></td>
				</tr>
				<tr>
					<TR>
			<TD>Subject3</TD>
			<td><input type="text" name="sub3" /></td>
				</tr>
				<tr>
				
			<TD>Password</TD>
     <td>   <input type="password" name="password"  /></td>
 </tr>
 	<tr>
 		<td>Email</td>
	  <td>    <input type="Email" name="email"  /></td>
    </tr>
    <tr>
 		<td>Phone</td>
	  <td>    <input type="phone" name="phone"  /></td>
    </tr>
 	<tr>
	  <td>    <input type="submit" name="Login" value="submit"/></td>
    </tr>
</table>
		</form>
<hr>
		<marquee>Thank You for wisiting this site</marquee>
	<hr>
	</body>
	<script>
				function Validate() {
							var str = document.forms["myForm"]["name"].value;
		if(str.length<1)
		{
			document.getElementById("demo").innerHTML="Name NOT be Null"
		}
    }
		function Validate1() {
							var str = document.forms["myForm"]["user"].value;
		if(str.length<1)
		{
			document.getElementById("demo1").innerHTML="User Name NOT be Null"
		}
    }
	</script>
</html>
