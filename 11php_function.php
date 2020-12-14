<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<h1>PHP Functions</h1>
	<h4>Create a User Defined Function in PHP</h4>

	<?php 
     function myfunction()
     {
        echo "This is  a funcion";
     }

     myfunction();
     echo "<br>";
     myfunction();

	 ?>
	 <h4>PHP Function Arguments</h4>
	 <?php 
        function names($name)
        {
        echo "Hello sir my name is :".$name ."<br>";
        }
        names('Nouman');
        names('Ehsan');
        names('Kaleem');
	  ?>
	  <br>
	  <h1>function with two arguments</h1>
	  <?php 
          function data($name,$age)
          {
          	echo "Hello sir my name is :".$name ." my age is :".$age;
          }
          data('Nouman','26');
	   ?>
	   <br>
	   <?php 
       function add($a,$b)
       {
       	return $a+$b;
       }
       echo add(5,50);

	    ?>
	<h4>strict </h4>
	<p>not work</p>

	<?php 

 function floatnum(float $a,float $b) :float
 {
 	return $a +$b;

 }
 echo floatnum(1.5,2.6);

	 ?>
	 <br>
	 <?php 
      function addinteger(float $a, float $b) : int {
      	return (int)($a + $b);


      	}
      	echo addinteger(1.2, 5.2);

 ?>

 



</body>
</html>