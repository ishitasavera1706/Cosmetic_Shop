
<?php
include "connect.php";


$query = "delete from payment where payment_id='" . $_GET["userid"] . "'";

if (mysqli_query($conn, $query)) 
{
  echo "<script>alert('Your Payment deleted successfully !');</script>";
  header("Location: payment.php");
} 
else 
{
    echo "Error deleting record: " . mysqli_error($conn);
}


?>