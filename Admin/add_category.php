<?php include_once('partials/main.php') ?>
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Add Category</h4>
                    <form class="forms-sample" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="exampleInputName1">Category Name</label>
                                <input type="text" name="category_name" class="form-control" id="exampleInputName1" placeholder="Name">
                            </div>
                        <div class="form-group">
                            <label>File upload</label>
                            <input type="file" name="img" class="file-upload-default">
                            <div class="input-group col-xs-12">
                                <input type="file" name="img" class="form-control file-upload-info" placeholder="Upload Image">
                            </div>
                        </div>
                        <input type="submit" name="submit" value="Submit" class="btn btn-primary mr-2">
                    </form>
                    <?php

					    include('connect.php');

					    
					    if(isset($_POST['submit']))
					    {
					        $category_name =$_POST['category_name'];

                            $filename = $_FILES["img"]["name"];
                            $tempname = $_FILES["img"]["tmp_name"];    
                            $folder = "upload/".$filename;
                                
                                // Now let's move the uploaded image into the folder: image
                                if (move_uploaded_file($tempname, $folder))  
                                    {   $msg = "Image uploaded successfully";   }
                                else
                                    {   $msg = "Failed to upload image";    }
                               
					      
					        $sql = "INSERT INTO category (category_name,images) VALUES ('$category_name','$filename')";
					        if (mysqli_query($conn,$sql)) 
					        {
					            echo "<script>alert('Your Category added successfully !');</script>";
                                
					        } 
					        else 
					        {
					            echo "Error: " . $sql . "" . mysqli_error($conn);
					        }

					        //echo "Resord Inserted Successfully";
					    }
                       
					?>
            </div>
        </div>
    </div>
<?php include_once('partials/footer.php') ?>    