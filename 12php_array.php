<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<h1>PHP Arrays</h1>

	<?php 
      
      $names=array('kamran','nouman','ehsan','shoaib');
      echo "your name is :".$names[0].",".$names[1].",".$names[2].",".$names[3];; 

?>

<h4>The count() Function in array
</h4>

<?php 
$cars = array('bmw','volvo','toyota','honda' );

echo count($cars);

 ?>
 <br>
 <h4>Loop Through an Indexed Array
</h4>
<?php 
$car =array('bmw','volvo','toyota','honda' );
$arrlength =count($car);
for ($c=0; $c <$arrlength ; $c++) { 
	echo $c.$car[$c];
	echo "<br>";
}


 ?>
 <h4>PHP Associative Arrays
</h4>
 <?php 
   $name = array('nouman' =>'25','ehsan' =>'24','shoaib' =>'22' );
   echo "nouman age is :".$name['nouman'];

  ?>
  <h4>Loop Through an Associative Array</h4>
<?php 
  $name = array('nouman' =>'25','ehsan' =>'24','shoaib' =>'22' );
  foreach ($name as $v => $c_value) {
      echo "key=: ".$v;
      echo "value =:".$c_value;
      echo "<br>";
  }
?>
<!-- <h4>multi d array not work.</h4> -->
<br>
<!-- <h4>PHP - Sort Functions For Arrays
</h4> -->




	
</body>
</html>