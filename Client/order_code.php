<?php
     
  $conn = mysqli_connect("localhost","root","","cosmetic");
  

      if(isset($_POST['submit']))
      {
        $customer_name =$_POST['customer_name'];
        $city=$_POST['city'];
        $address=$_POST['address'];
        $phone=$_POST['phone'];
        $product_name=$_POST['product_name'];
        $price=$_POST['price']; 
        $filename = $_FILES["images"]["name"];
        $tempname = $_FILES["images"]["tmp_name"];    
        $folder = "../upload/".$filename;

// Now let's move the uploaded image into the folder: image
        if (move_uploaded_file($tempname, $folder))  
          {   $msg = "Image uploaded successfully";   }
        else
          {   $msg = "Failed to upload image";    }


        $sql = "INSERT INTO order (customer_name,city,address,phone,product_name,images,price,) VALUES ('$customer_name','$city','$address','$phone','$product_name','$filename','$price')";
        if (mysqli_query($conn,$sql)) 
        {
          
          header("Location:thank_you.php");
        } 
        else 
        {
          echo "Error: " . $sql . "" . mysqli_error($conn);
        }

//echo "Resord Inserted Successfully";
      }
?>