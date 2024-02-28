<?php 

  $conn=mysqli_connect("localhost","root","","cosmetic");

	if (isset($_POST["submit"])) 
	{
		$username=$_POST['username'];
		$password=$_POST['password'];

		$qry=mysqli_query($conn, "select * from register where username='$username' and password='$password'");

		$row=mysqli_num_rows($qry);

		if ($row==1) 
		{
			header("Location: product.php");
		}
		else
		{
			echo "<script>alert('Login Failed');</script>";
		}
	}
?>