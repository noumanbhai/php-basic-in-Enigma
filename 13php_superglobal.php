<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<h1>PHP Global Variables - Superglobals

		<h4>Globals</h4>
	</h1>
	<?php 
	$x=12;
	$y=55;
	function add()
	{
		return $GLOBALS['z']=$GLOBALS['x']+$GLOBALS['y'];
	}
	echo add();

	?>

	<br>

	<?php 
	$a="Global variable";
	function myfunction()
	{
		echo $GLOBALS['a'];
	}

	myfunction();
	?>

	<br>
	<br>
	<h2>Form Data</h2>
	<h4>Post</h4>
	<br>
	<h4>Get</h4>
		<br>
	<h4>Request</h4>
	<br>
	<h4>Server</h4>

	<!-- <form action="home.php" method="GET"> -->
	<form action="home.php" method="POST">
		<label for="name">Enter your name:</label>
		<br>
		<input type="text" id="name" name="name" placeholder="Enter your name">
		<br>
		<label for="age">Enter your age:</label>
		<br>
		<input type="number" name="age" placeholder="Enter your age">
		<br><br>
		<button type="submit" name="save">Save</button>
	</form>
</body>
</html>