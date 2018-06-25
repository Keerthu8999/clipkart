
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<style type="text/css">
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
	<form action = "" method="POST">
	<center>
	<h2>Enter the domain of Gadget</h2>
	<b><i>Mobiles/laptops/camera</i></b><br>
	<input type="text" name="category">
	</center>

	<center>
	<h2>Enter the price</h2>
	<input type="number" name="price">
	</center>	
	<br>
	<center>
		<button class="w3-btn w3-hover-purple" name="submit">Submit</button></center>
	</form> 
	<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ctfdb";
$con = new mysqli($servername,$username,$password,$dbname);


if(isset($_POST['category'],$_POST['price']))
{
//	echo "Hello";
$category = $_POST['category'];
$price = $_POST['price'];
//echo $price;
$sql = "SELECT name,price,image,domain,spec from gadgets where domain = '{$category}' and price <= '{$price}';";
$result = $con->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo  $row["name"]."  "."<br>"."  "."<br>".$row["price"]."  "."<br>".$row["spec"]."<br>"."<br>";
        echo '<img src="data:image/jpeg;base64,'.base64_encode( $row["image"] ).'"/>';
    }
}
else
{
echo "o results";
}
}
$con->close();

?>
	


</body>
</html>