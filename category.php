<html>
<head>
	<style type="text/css">
	</style>
</head>
<body>
	<center>
	<h4>Enter the domain of Gadget</h4>
	<input type="text" name="category" id="category">
	</center>

	<center>
	<h4>Enter the company</h4>
	<input type="text" name="company" id="company">
	</center>	

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