<?php
	session_start();
	if(!isset($_SESSION['username']))
	{
		header('location:login.php');
	}

?>
<style>
body {
	background-image: url("images.jpg");
} 

</style>
<body>
	<hr>
	<marquee>Welcome to Student Management System</marquee>
	<hr>
	||<a href="StudentSearch.php">student</a>||
	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	||<a href="About.php">Abouut US</a>||
	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	||<a href="Feddback.php">Feedback</a>||
	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
		||<a href="logout.php">LOGOUT</a>||



	<hr>
	<hr>
	<h1>welcome <?php echo $_SESSION['username']; ?> </h1>
	<hr>
		<marquee>Thank You for wisiting this site</marquee>
	<hr>
</body>