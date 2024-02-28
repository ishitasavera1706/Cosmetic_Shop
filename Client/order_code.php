<?php
     
      $conn = mysqli_connect("localhost","root","","cosmetic");
  

      if(isset($_POST['submit']))
      { 
        $product_name=$_POST['product_name'];
        $price=$_POST['price'];
        $customer_name =$_POST['customer_name']; 
        $city =$_POST['city'];
        $address =$_POST['addr'];
        $phone = $_POST['phone'];
       
       $query = "INSERT INTO `use_order` (`product_name`,`customer_name`,`city`,`addr`,`phone`,`price`) VALUES ('$product_name','$customer_name','$city','$address','$phone','$price')";
        
        if (mysqli_query($conn,$query)) 
        {
         
          header("location:payment.php");
        } 
        else 
        {
          echo "Error: " . $sql . "" . mysqli_error($conn);
        }

//echo "Resord Inserted Successfully";
      }
?>