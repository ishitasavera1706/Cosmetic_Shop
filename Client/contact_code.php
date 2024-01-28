<?php

if(isset($_POST['submit']))
{
  $name=$_POST['name'];
  $email=$_POST['email'];
  $message=$_POST['message'];


  $connect=mysqli_connect("localhost","root","","cosmetic");

  $query="INSERT INTO `contact`(`name`,`email`,`message`) VALUES ('$name','$email','$message')";

  $exe_query=mysqli_query($connect,$query);

  if($exe_query)
  {
    echo "<script>alert('Your contact added successfully !');</script>";
  }
  else 
  {
    echo "Error: " . $sql . "" . mysqli_error($connect);
  }
}
?>