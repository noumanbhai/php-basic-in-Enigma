<?php
$errorname=$gooda=$erroremail=$goodb='';
if (isset($_POST['email'])==true && empty($_POST['email'])==false) {
	$emails=$_POST['email'];
	if (filter_var($emails,FILTER_VALIDATE_EMAIL)==true) {
		$goodb="Email is True";
	} else {
		$erroremail="email is false";

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
		

 
<label for="email">Enter email:</label><br>
<input type="text" id="email" name="email" placeholder="Enter your email"><br>
<span style="color:red"><?php echo $erroremail; ?></span>
<span style="color:green"><?php echo $goodb; ?></span><br>


<button type="submit" type="submit">Submit</button>
</form>
	
</body>
</html>