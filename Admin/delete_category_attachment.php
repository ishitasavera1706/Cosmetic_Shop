<?php
    $conn=mysqli_connect("localhost","root","","cosmetic");   
 
	$qry = "select * from category where category_id='" . $_GET['id'] . "'";
	$records= mysqli_query($conn,$qry);
	$data = mysqli_fetch_array($records);

	if (!empty($data) && !empty($data['images'])) {
		$path = './upload/'.$data['images'];

		if (file_exists($path)) {
			if (unlink($path)) {
				$delete_image_qry = "UPDATE category SET images = '' WHERE category_id = '".$_GET['id']."'";
				if(mysqli_query($conn,$delete_image_qry)){
					header('Refresh:0; edit_category.php?userid='.$_GET['id']);
				}
			}
		}
	}