

<?php
$servername = "localhost";
$username = "root";
$password = "";
echo 'Hello';
$conn = mysql_connect($servername, $username, $password) or die ("unable to connect");
echo 'Connected successfully';
$db = mysql_select_db('trainingdb' , $conn);
if(isset($_POST['submit']))
{
$fname = $_POST['first'];
$lname = $_POST['last'];
$email = $_POST['email'];
$comments = $_POST['comments'];
echo "HEllo";
$sql = "INSERT INTO contact (fname,lname,email,comments) values ('{$fname}','{$lname}','{$email}','{$comments}')";
if(mysql_query($sql))
echo '1 record added';
else
echo 'Not Inserted';
mysql_close($conn);
}
?>

