<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<h1>PHP Operators</h1>
    <h4>PHP Arithmetic Operators</h4>
	<?php 

 $a=5;
 $b=5;
 $add=$a+$b;
 echo "Addition :". $add;
 echo"<br>";
 
 $sub=$a-$b;
 echo "Subtraction :". $sub;
 echo"<br>";

  $mul=$a*$b;
 echo "Multiplication:". $mul;
 echo"<br>";

  $div=$a/$b;
 echo "Division:". $div;
 echo"<br>";

  $mod=$a%$b;
 echo "Modulus:". $mod;
 echo"<br>";

   $expo=$a**$b;
 echo "Exponentiation:". $expo;
 echo"<br>";
?>
<h4>PHP Assignment Operators</h4>
<?php 
// left to right
$a=12;
echo $a;
echo "<br>";
// addition
$x=10;
$x +=20;
echo $x;
echo "<br>";
// substration
$x -=20;
echo $x;
echo "<br>";
// multiplication
$x *=20;
echo $x;
echo "<br>";
// division
$v=10;
$v /=10;
echo $v;
echo "<br>";
// modulus
$v %=10;
echo $v;
?>
<h4>PHP Comparison Operators</h4>

<?php 
$m=5;
$n=5;
$o="5";
// Equal
var_dump($m==$n);
echo "<br>";
// Identical
var_dump($m===$o);
echo "<br>";
// Not equal
$m=5;
$n=10;
var_dump($m!=$n);
echo "<br>";
//Greater than
$m=50;
$n=20;
var_dump($m>$n);
echo "<br>";
// Less than
$m=5;
$n=5;
var_dump($m<$n);
echo "<br>";
//Greater than or equal to
$m=5;
$n=5;
var_dump($m>=$n);
echo "<br>";
// Less than or equal to
$m=5;
$n=5;
var_dump($m<=$n);
echo "<br>";
$m=5;
$n=4;
// Spaceship
var_dump($m<=>$n);
echo "<br>";
 ?>
 <h4>PHP Increment / Decrement Operators</h4>
 <?php 
// Pre-increment
 $c=5;
 echo ++$c;
 echo "<br>";
 // Pre-decrement
 $f=4;
 echo --$f;
 echo "<br>";
 // Post-increment
  $f=4;
 echo $f++;
 echo "<br>";
  // Post-decrement
  $g=4;
 echo $g--;
 echo "<br>";
?>
<h4>PHP Logical Operators</h4>
<?php 
$o=10;
$p=5;
if ($o==10 and $p==5) {
	echo "true condition";
}
echo"<br>";
if ($o==10 or $p==50) {
	echo "true condition";
}
 ?>
 <h4>PHP String Operators</h4>
 <?php 
$g=" hello";
$h=" pakistan";
echo $g. $h;
echo"<br>";

echo $g.= $h;
?>
<h4>PHP Conditional Assignment Operators</h4>
<?php 
$user="";
echo $status=(empty($user)) ? "deactive" : "active";
echo "<br>";
$user="login";
echo $status=(empty($user)) ? "deactive" : "active";
echo "<br>";

echo $user=$_GET["user"] ?? "login";

echo ("<br>");

echo $color=$color ?? "active";



 ?>


</body>
</html>