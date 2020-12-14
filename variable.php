<h1> My first code</h1>
<?php

            // PHP Syntax

// echo "pakistan1";
// Echo "pakistan2";
// ECHO "pakistan3"

           // PHP Case Sensitivity

// $var="apple";

// echo "this is ". $var ."<br>";
// echo "what is this  a ". $var ."<br>";


         // Comments in PHP

        // Multiple comment

/*
apple 
mango 
banana


*/

         // PHP text


// $text="text variable";

// echo $text;
       
// echo "<br>";
                // PHP integer variale

// $num1=10;
// $num2=20;

// $sum=$num1+$num2;
// echo $sum;

                // PHP float variale


// $num1=1.5;
// $num2=2;
// $sum=$num1+$num2;
// echo $num1+$num2;

// echo $sum;



      // PHP Variables Scope There is 3 types

    // 2local
    // 2global
    // 3static





?>


<h1>Global variable</h1>

<?php 
$var="global variable";



 function myfunction()
{
	echo "hello.";
	// echo $var;   
	// not work in functions
}

myfunction();

echo $var;

 ?>



 <h2>Local vriable</h2>
 <?php 

function myfun()
{
	$var="local variable ";

	echo"This is local a ".$var;
}

myfun();
// echo $var;


  ?>



  <h3>Global keyword</h3>

  <?php 
  $a=5;

function work(){
	global $a;
	echo $a;
}

work();
 ?>


