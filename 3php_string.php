<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<h1>PHP String Functions</h1>
	<h4>1 strlen()</h4>
	<?php 
    echo strlen("hello");
	 ?>
	<h4>2 str_word_count()</h4>
	<?php 

    echo str_word_count("pakistan");
	 ?>

	 <h4>3 strrev() - Reverse a String</h4>
	 <?php 

      echo strrev("pakistan");

	  ?>
	   <h4>4 strpos() - Search For a Text Within a String</h4>
	  <?php 
    echo strpos("salman nouman","nouman");
	   ?>
	  <h4>5 str_replace() - Replace Text Within a String</h4>
	  <?php 
      
     echo str_replace("hello", "dubai", "Hello pakistan!");
	   ?>




</body>
</html>