<?php
    $conn=mysqli_connect("localhost","root","","cosmetic");   
 
	$qry = "select * from category where category_id='" . $_GET['userid'] . "'";
	$records= mysqli_query($conn,$qry);
	$data = mysqli_fetch_array($records);
                                       
	
    if(isset($_POST['submit']))
    {
       
		
        $category_name =$_POST['category_name'];
		

		$filename = $_FILES["img"]["name"];
        $tempname = $_FILES["img"]["tmp_name"];    
        $folder = "upload/".$filename;
		
        if ($tempname!="") 
        {
            
        }
        $sql =" UPDATE category SET category_name='$category_name',images='$filename' WHERE category_id ='". $_GET["userid"]."'"; 
        
        if (move_uploaded_file($tempname, $folder))  
        {   $msg = "Image uploaded successfully";} 
        else
        {   $msg = "Failed to upload image";    }
        if (mysqli_query($conn, $sql)) 
        {
            echo "<script>alert('Your Category UPDATED successfully !');</script>";
        } 
        else 
        {
            echo "Error: " . $sql . "" . mysqli_error($conn);
        }       
    }
    
?>
<?php include_once('partials/main.php') ?>
<div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Edit Category</h4>
                     <form class="forms-sample" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="exampleInputName1">Category Name</label>
                                <input type="text" name="category_name" value="<?php echo $data['category_name']; ?>" class="form-control" id="exampleInputName1" placeholder="Name">
                        </div>
                        <div class="form-group">
                                <label>File upload</label>
                                <input type="file" name="img" class="file-upload-default">
                                <div class="input-group col-xs-12">
                                  <input type="text" name="img" value="<?php echo $data['images']; ?>" class="form-control file-upload-info" placeholder="Upload Image">
                                  <span class="input-group-append">
                                    <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                                  </span>
                                </div>
                        </div>
                        <div>
                            <input type="submit" name="submit" value="Edit" class="btn btn-primary mr-2">
                        </div>
                  </form> 
            </div>
        </div>
</div>
<?php include_once('partials/footer.php') ?>    