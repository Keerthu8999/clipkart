<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body background="backg.jpg">
	<br><br><br><br><br><br><br><br><br><br><br><br>
	<center><form action="category.php"><button class="w3-btn w3-hover-black">Based on Category</button></form></center>
	<center><form action="price.php"><button class="w3-btn w3-hover-black">Based on Price</button></form></center> <br>
	<center><button class="w3-btn w3-hover-black" id="Submit">Submit</button></center>
<?php

$servername = "localhost";
$username = "root";
$password = "";
$con = mysql_connect($servername,$username,$password);
if($con)
echo 'Connected Successfully';
else
echo 'Unable to connect';


?>
</body>
</html>