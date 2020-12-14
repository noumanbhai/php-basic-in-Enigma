<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<h1>Switch Case</h1>
	<?php 
	$marks='50';
	switch ($marks) {
		case '100':
			echo "Your marks 100%";
			break;
             case '50':
			echo "Your marks 50%";
			break;
		default:
			echo "Fail";
			break;
	}

	 ?>

	 
	
</body>
</html>