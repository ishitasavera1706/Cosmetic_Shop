
<?php
$servername='localhost';
$username='root';
$password='';
$dbname= "cosmetic";

//create connection
$conn=mysqli_connect($servername, $username, $password, "$dbname");

//check connection
if(!$conn)
{
	die('Could not connect My sql:' .mysql_error());
	
}
else{
	//echo "Database connected successfully";
}
?>