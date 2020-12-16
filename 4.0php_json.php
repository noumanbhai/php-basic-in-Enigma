<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<h1>What is JSON?</h1>
	<?php 

     // $user=['name'=>'nouman','class'=>10,'city'=>'bwp'];
	$user = array('name'=>'nouman','class'=>10,'city'=>'bwp');

	$jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';
	echo json_encode($user);
	echo "<br>";
	print_r(json_decode($jsonobj));

	?>
	<br>
	<h4>PHP - Accessing the Decoded Valuesh</h4>
	<?php 
	$jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';

	$obj=json_decode($jsonobj);
	echo $obj->Peter;
	echo "<br>";
	echo $obj->Ben;
	echo "<br>";
	echo $obj->Joe;

	?>
	<h4>PHP - Looping Through the Values</h4>
	<?php 

	<?php
	$jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';

	$obj = json_decode($jsonobj);

	foreach($obj as $key => $value) {
		echo $key . " => " . $value . "<br>";
	}
	?>




	?>
	<br>
</body>
</html>