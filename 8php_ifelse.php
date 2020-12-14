<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<h1>PHP Conditional Statements</h1>
	<h4>if</h4>
<?php 
$time=date("H");
if ($time < "20") {
	echo "Good Day";
}
 ?>
<br>
 <h4>else</h4>

 <?php 

 $time=12;
 // $time=13;
 if ($time <= 12) {
 	echo "good day";
 }
 else {
 	echo "good night";
 }

 ?>

<h4>if elseif</h4>
<?php 


$marks=10;
if ($marks>=80) {
	echo "80%";
}
elseif ($marks>=60) {
echo "60%";
}
else{
	echo "Fail";
}
?>
  

	
</body>
</html>