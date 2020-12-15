<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>

	<h1>PHP Date and Time</h1>

	<h4>The PHP Date() Function</h4>
	<?php 
// current day year month 
// echo date("l");
// echo date("y");
// echo date("y/m/d");
// echo date("d.m.y");
// echo date("l");
	?>
	<h4>PHP Tip - Automatic Copyright Year</h4>
	<footer style="color:red"> 
		&copy; 2012-<?php  echo "20".  date('y'); ?>
	</footer>
	<br>
	<h4>Get a Time</h4>
	<?php echo "The time is ".date('h:i:sa') ?>
	<h4>Get Your Time Zone</h4>
	<?php 
	date_default_timezone_set("America/New_York");
	echo "The tim e is New work". date('h:i:sa');
	?>
	<h4>Create a Date With mktime()</h4>
	<?php 
	$d=mktime(11,44,55,16);
	echo "create date is".date('y-m-d h:i:sa',$d); 
	?>
	<h4>strtotime</h4>
	<?php
	$d=strtotime("10:30pm April 15 2014");
	echo "Created date is " . date("Y-m-d h:i:sa", $d);
	?> 

</body>
</html>