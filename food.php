<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
		body, html {
  height: 100%;
  margin: 0;
  font-family: Arial;
  color: indigo;
}
</style>
</head>
<body background="backr.jpg">
	<br><br><br><br><br><br>
	<form action = "" method="post">
	<center>
	<h2>Enter the category </h2>
	<b><i>Fruit/Vegetable/Grocery</i></b><br>
	<input type="text" name="category" id="category">
	</center>

<br><br>
	<center><button class="w3-btn w3-hover-purple">Submit</button></center>
</form>
<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ctfdb";
$con = new mysqli($servername,$username,$password,$dbname);


if(isset($_POST['category']))
{
//	echo "Hello";

$category = $_POST['category'];
$sql = "SELECT name,price,image from food where domain = '{$category}';";
$result = $con->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo  $row["name"]."  "."<br>"."  "."<br>".$row["price"]."  "."<br>"."<br>";
        echo '<img src="data:image/jpeg;base64,'.base64_encode( $row["image"] ).'"/>';
        echo '<br>'.'<br>';
    }
}
else
{
echo "o results";
}
}
$con->close();


?>