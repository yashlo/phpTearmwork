
<body>
	<?php
	session_start();
	if(!isset($_SESSION['email']))
	{
		header('location:login.php');
	}

?>
	<hr>
	<marquee>Welcome to Student Management System</marquee>
	<hr>
	||<a href="Student.php">student</a>||
	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	||<a href="Contact.php">Contact US</a>||
	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	||<a href="About.php">Abouut US</a>||
	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	||<a href="Feddback.php">Feedback</a>||
	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
		||<a href="logout.php">LOGOUT</a>||



	<hr>
	<hr>
	<h1>welcome <?php echo $_SESSION['email']; ?> </h1>
	<hr>
		<marquee>Thank You for wisiting this site</marquee>
	<hr>
</body>