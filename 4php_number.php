<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
<h4>PHP Numbers</h4>
<p>One thing to notice about PHP is that it provides automatic data type conversion.</p>

	<h4>1 PHP Integers</h4>

	<?php 
	$a=515;
	var_dump(is_int($a));
 echo "<br>";
	$b=5.15;
	var_dump(is_int($b));
?>

<h4>Float</h4>
<?php 
$var=15.44;
var_dump(is_float($var));
 ?>
 <h4>PHP Infinity</h4>
 <?php 
$var=144.64e555;
var_dump($var);
?>
<h4>php nan</h4>
<?php 
$var=acos(8);
var_dump($var);
 ?>
 <h4>PHP Numerical Strings</h4>
 <?php 
$a=555;
var_dump(is_numeric($a));
echo "<br>";
$a=55.5;
var_dump(is_numeric($a));
echo "<br>";

$b="pakistan";
var_dump(is_numeric($b));

  ?>
<h4>PHP Casting Strings and Floats to Integers</h4>

<?php 
$var=555.55;
$int_cast=(int)$var;
echo $int_cast;

echo "<br>";
$var="55.66";
$int_cast=(int)$var;
echo $int_cast;



 ?>










	
</body>
</html>