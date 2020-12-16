<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<h1>PHP Callback Functions</h1>

	<?php 
	function myfun($a)
	{
		return strlen($a);	
	}
        // echo myfun('pakistan');
	$strings=['apple','mango','banana','orange'];
	$lenths=array_map("myfun",$strings );
	print_r($lenths);

	?>

	<br>
	<h4>same work php 7 include</h4>
	<?php 
	$strings=['apple','mango','banana','orange'];
	$lenth=array_map(function($item)
		{return strlen($item);}, $strings);
	print_r($lenth);




	?>
	
</body>
</html>