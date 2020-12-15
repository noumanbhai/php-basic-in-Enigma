<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<h4>PHP File Create/Write</h4>
	<h4>PHP File a use </h4>
	<?php 

        $file=fopen('messageb.txt','w') or die('not open');
     echo  fwrite($file,'Hello Pakistan ok');
     echo "<br>";



	 ?>
	
</body>
</html>