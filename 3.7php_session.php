<?php 
// Start section
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<h1>PHP Sessions</h1>
	<?php 

   // not deep learning but work flow is know

	$_SESSION['name']="nouman";
	$_SESSION['password']='pakistan123';


	print_r($_SESSION);  



	?>


	
</body>
</html>