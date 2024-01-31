
<?php
include "connect.php";


$query = "delete from product where product_id='" . $_GET["userid"] . "'";

if (mysqli_query($conn, $query)) 
{
  echo "<script>alert('Your Product deleted successfully !');</script>";
  header("Location: product.php");
} 
else 
{
    echo "Error deleting record: " . mysqli_error($conn);
}


?>