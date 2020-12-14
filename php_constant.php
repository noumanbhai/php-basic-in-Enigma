<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>

	<h1>PHP Constant</h1>
	<p>a value there is not bechange</p>
	<p><u>Create a PHP Constant</u>
To create a constant, use the define() function.d</p>

<?php 
define("name","Nouman");
echo name;
echo"<br>";
define("ROLLNO","55",true);
echo rollno;
 ?>
 <h4>PHP Constant Arrays</h4>
<?php 
define("a",["kamran","nouman","ehsan"]);
echo a[0];
echo "<br>";
echo a[1];
 ?>
 <br>
 <h4>Constants are Global</h4>
 <?php 
define("yourname","hello nouman");

function myfunction()
{
	echo yourname;
}

myfunction();
  ?>





	
</body>
</html>