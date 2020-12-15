<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<h1>PHP Open File - fopen()</h1>
	<?php 
       // echo readfile('message.txt');

	?>
	<h4>readfile fopen same work</h4>



	<?php 

	// $file=fopen('message.txt', 'r') or die('error show');
	// echo fread($file, filesize('message.txt'));
	// fclose($file);

	?>
	<h4>PHP Read Single Line - fgets()</h4>
	<?php 

     // $file=fopen('message.txt','r') or die('no file');
     // echo fgets($file);
     // fclose($file);

	?>
	<h4>PHP Read Single Char - fgetc()</h4>
	<?php 

     // $file=fopen('message.txt','r') or die('no file');
     // echo fgetc($file);
     // fclose($file);

	?>
	<h4>PHP Check End-Of-File - feof()</h4>
	<?php 
	$file=fopen('message.txt', 'r') or die('error');

	while (!feof($file)) {
		echo fgets($file);
		echo "<br>";
	}
	fclose($file);

	?>
	


	
</body>
</html>