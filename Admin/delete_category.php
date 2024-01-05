
<?php
include "connect.php";


$query = "delete from category where category_id='" . $_GET["userid"] . "'";

if (mysqli_query($conn, $query)) 
{
  echo "<script>alert('Your Category deleted successfully !');</script>";
  header("Location: category.php");
} 
else 
{
    echo "Error deleting record: " . mysqli_error($conn);
}


?>