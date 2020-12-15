<?php 
if (isset($_FILES['image'])) {
	// echo "<pre>";
	// print_r($_FILES);
	// echo "</pre>";

	$message=$error="";
	$file=$_FILES['image']['name'];
	$temp=$_FILES['image']['tmp_name'];
// echo $file;
	if (move_uploaded_file($temp,"upload_images/".$file)) {
		$message= "file upload successfully";
	} else {
		$error="not file upload";
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

	<h1>Create The HTML Form File uploadin</h1>
	<form action="" method="POST" enctype="multipart/form-data">
		<label for="upload">File upload</label>
		<br>
		<input type="file" id="upload" name="image"><br>
		<button type="submit">Submit</button>
		<span style="color:green;"><?php echo $message; ?></span> 
		<span style="color:red;"><?php echo $error; ?></span>
	</form>	
</body>
</html>