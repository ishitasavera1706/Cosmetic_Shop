<?php

if(isset($_POST['submit']))
{
  $customer_name=$_POST['customer_name'];
  $card_number=$_POST['card_number'];
  $expiry=$_POST['expiry'];
  $cvv_cvc=$_POST['cvv_cvc'];


  $connect=mysqli_connect("localhost","root","","cosmetic");

  $query="INSERT INTO payment (customer_name,card_number,expiry,cvv_cvc) VALUES ('$customer_name','$card_number','$expiry','$cvv_cvc')";

  $exe_query=mysqli_query($connect,$query);

  if($exe_query)
  {
    header("location:thank_you.php");
  }
  else 
  {
    echo "Error: " . $sql . "" . mysqli_error($connect);
  }
}
?>