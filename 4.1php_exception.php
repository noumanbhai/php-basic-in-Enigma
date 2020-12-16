<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<?php 
	$a=5;
	try {
		if ($a>=50) {
			echo "a is 50;";
		} else {
			throw new Exception("Enter the value Greater then 50");

		}


	} catch (Exception $e) {
		echo $e->getMessage();

	}
	finally{

		echo "good";
	}

	?>
	
</body>
</html>