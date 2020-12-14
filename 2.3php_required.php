<?php
$errorname=$gooda=$erroremail=$goodb='';
if ($_SERVER['REQUEST_METHOD']=='POST'){
	if (empty($_POST['name']) and empty($_POST['email'])) {
		$errorname="name is required ";
		$erroremail="email is required ";
	} else {
		$gooda="name is submit";
		$goodb="name is submit";
	}
	


	
}


?>

</html><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<h1>PHP Form REQUIRED</h1>

	<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
		
<label for="name">Enter name:</label><br>
<input type="text" id="name" name="name" placeholder="Enter your name"><br>
<span style="color:red"><?php echo $errorname; ?></span>
<span style="color:green"><?php echo $gooda; ?></span><br>
 
<label for="email">Enter email:</label><br>
<input type="email" id="email" name="email" placeholder="Enter your email"><br>
<span style="color:red"><?php echo $erroremail; ?></span>
<span style="color:green"><?php echo $goodb; ?></span><br>


<button type="submit" type="submit">Submit</button>
</form>
	
</body>
</html>