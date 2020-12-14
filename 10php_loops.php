<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
<h1>PHP Loops</h1>
<h4>The PHP while Loop</h4>
<?php 
$var=1;
while ($var<= 10) {
	echo "The number is  :".$var;
echo  "<br>";
	$var++;
}
 ?>
<h6>.....................</h6>
 <?php 
$a=0;
while ( $a<= 10) {
	echo "The number is :".$a;
	$a+=2;
	echo "<br>";
}
?>
<h4>PHP do while Loop</h4>
<?php 
$z=1;
do {
	echo "Pakistan :".$z;
	$z++;
	echo "<br>";
} while ($z <= 10);
?>
<h6>..........</h6>
<?php 
$z=0;
do {
	echo "Pakistan :".$z;
	$z++;
	echo "<br>";
} while ($z <= 1);
?>
<h4>PHP for Loop</h4>
<?php 
for ($d=1; $d <20; $d++) { 
	echo ",".$d;
}
 ?>
 <h6>...............</h6>
 <?php 
for ($i=0; $i < 100; $i+=5) { 
	echo $i;
	echo "<br>";
}

  ?>
  <h1>PHP foreach Loop</h1>
  <?php 

  $names=array('kamran','nouman','ehsan','shoaib');
foreach ($names as $name) {

	echo $name;
	echo "<br>";
}
   ?>
   <h6>............</h6>
     <?php 

  $names=array('kamran'=>'28','nouman'=>'26','ehsan'=>'24','shoaib'=>'22');
foreach ($names as $x=> $name) {

	// echo $x."=".$name;
	// echo "<br>";

	echo "$x=$name <br>";
}
   ?>
   <h4>PHP Break and Continue</h4>
   <?php 
     for ($i=0; $i < 10; $i++) { 
     		if ($i==5) {
     			break;
     		}
     		echo "This numbeer is :".$i;
     		echo "<br>";
     }
    ?>
    <h6>.............</h6>
    <h4>PHP Continue</h4>
    <?php
    for ($g=1; $g <= 10; $g++) { 
     	if ($g==5) {
     		continue;
     	}
     	echo "number is start 5 is not include :".$g;
     	echo "<br>";
     } 

     ?>



	
</body>
</html>