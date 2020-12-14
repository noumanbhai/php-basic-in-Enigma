<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>

	<h1>php Math</h1>
	<h4>PHP pi() Function</h4>

	<?php 
    echo (pi());
	 ?>

	 <h4>PHP min() and max() Functions</h4>
	 <?php 
        echo (min(10,30,50,70,200,-5));
	  ?>
	  <br>
	  <?php 

       echo (max(20,50,30,1000,30,100));
	   ?>
	   <h4>PHP abs() Function </h4>
	   <p>convert positive number</p>
	   <?php 

      echo(abs(-6.7));
	    ?>
	    <h4>PHP Sqrt() Function</h4>
	    <?php 
         echo (sqrt(81));
	     ?>
	     <h4>PHP round()Function</h4>
	     <?php 
         echo(round(0.60));
         echo"<br>";
         echo(round(0.49));

	      ?>
	      <h4>Random Numbers</h4>
	      <?php 

          echo(rand());
          echo"<br>";
          echo(rand(1,6));

	       ?>

	       <h4></h4>


	
</body>
</html>