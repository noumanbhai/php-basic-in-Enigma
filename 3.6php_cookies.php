<?php 
$cookie_name="emigma";
$cookie_value="Hellow pakistani Cookie";
    //       name  ,    value         ,time(),60s ,path
setcookie($cookie_name,$cookie_value,time()+(60),"/");

 ?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<h1>PHP Cookies</h1>

	<h4>cookie check</h4>
<?php 


echo $_COOKIE[$cookie_name];

 ?>


	
</body>
</html>