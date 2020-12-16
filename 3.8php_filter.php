<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<h1>PHP Filters</h1>
	<h4>The PHP Filter Extension </h4>


	<table>
		<tr>
			<td> <u>Filter Name</u></td>
			<td><u>Filter ID</u></td>
		</tr>
		

		<?php 
		foreach (filter_list() as $id => $filter) {
			echo '<tr><td>'.$filter .'</td><td>' 
			.filter_id($filter) .'</td></tr>';
		}
		?>
	</table>
	<br>
	<h4>Sanitize a String</h4>
	<?php  

	$message="<h1>Hellow Pakistan</h>";

	$new=filter_var($message,FILTER_SANITIZE_STRING);
	echo $new;
	?>
	<h4>Validate an Integer</h4>
	<?php 
	$integer="100.5";
	if (filter_var($integer,FILTER_VALIDATE_INT)==true) {
		echo "this is integer";
	} else {
		echo "this is  float";
	}
	

	?>
	<h4>Validate an IP Address</h4>
	<?php
	$ip = "127.0.0.1";

	if (filter_var($ip, FILTER_VALIDATE_IP) == true) {
		echo "$ip is a valid IP address";
	} else {
		echo "$ip is not a valid IP address";
	}
	?> 
	<h4>Validate Email</h4>
	<?php 

	$mail="nouman@gmail.com";
	if (filter_var($mail,FILTER_VALIDATE_EMAIL)==true) {
		echo "$mail email is true";
	} else {
		echo "$mail email is false";
	}

	?>
	<h4>Sanitize and Validate a URL</h4>
	<?php
	$url = "https://www.w3schools.com";

// Remove all illegal characters from a url
	$url = filter_var($url, FILTER_SANITIZE_URL);

// Validate url
	if (!filter_var($url, FILTER_VALIDATE_URL) === false) {
		echo("$url is a valid URL");
	} else {
		echo("$url is not a valid URL");
	}
	?> 





	
</body>
</html>