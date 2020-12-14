<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	
<h1>PHP Datatype</h1>

   <h4>1 String</h4>
<?php 

   $var="books";
   $var2='pen';
   // print($var);
   var_dump($var);
   echo "<br>";
   print($var);
   echo "<br>";
   echo $var2;

 ?>
<br>

    <h4>2 Integer</h4>

    <?php 

     $var=10;
     var_dump($var);
     ?>
    <h4>3 Float (floating point numbers - also called double)</h4>
    <?php 
    $var =155.55;
    echo $var;

     ?>
    <h4>3 Boolean</h4>
    <?php 
    $vara=true;

    var_dump($vara);
    ?>
    <h4>4 Array</h4>
    <?php 
      $books=array("c","c++","java","php");
      print_r($books);
      echo"<br>";
      var_dump($books);
     ?>
    <h4>5 Object</h4> 
   <h1>This topic is not start tis time</h1>
    <h4>6 NULL</h4> 
    <?php 

    $var="books";
    $var=null;
    var_dump($var);
     ?>
    <h4>7 Resource</h4> 
<p>This is use for the database called</p>



</body>
</html>						