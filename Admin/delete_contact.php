
<?php
include "connect.php";


$query = "delete from contact where contact_id='" . $_GET["userid"] . "'";

if (mysqli_query($conn, $query)) 
{
  echo "<script>alert('Your Contact deleted successfully !');</script>";
  header("Location: contact.php");
} 
else 
{
    echo "Error deleting record: " . mysqli_error($conn);
}


?>