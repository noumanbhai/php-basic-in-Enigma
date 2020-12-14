<?php 

if (isset($_POST['submit'])) {
	// echo "ok";
    $name=$_POST['name'];
    $email=$_POST['email'];
	if (strlen($name)>=5 and strlen($email)>=5) {

		echo "Email is submit";
	}
		else{
		echo "name and email is must be 5 abouve char";

		}
		
	
}



 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<h1>PHP Form Validation</h1>

	<form action="" method="POST">
		
		<label for="name">Enter name:</label><br>
		<input type="text" id="name" name="name" required="name" placeholder="Enter your name"><br>
		<label for="email">Enter Email:</label><br>
		<input type="email" id="email" name="email" placeholder="Enter your email"><br><br>
		<button type="submit" name='submit'>Submit</button>

	</form>
	
</body>
</html>