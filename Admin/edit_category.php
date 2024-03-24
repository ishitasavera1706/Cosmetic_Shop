<?php
$conn=mysqli_connect("localhost","root","","cosmetic");   

$qry = "select * from category where category_id='" . $_GET['userid'] . "'";
$records= mysqli_query($conn,$qry);
$data = mysqli_fetch_array($records);

if(isset($_POST['submit']))
{

    $category_name =$_POST['category_name'];
    $sql =" UPDATE category SET category_name='$category_name' WHERE category_id ='". $_GET["userid"]."'"; 

    if (!empty($_FILES['img'])) {
        $filename = $_FILES["img"]["name"];
        $tempname = $_FILES["img"]["tmp_name"];    
        $folder = "upload/".$filename;
        move_uploaded_file($tempname, $folder);
        $sql_file_upload =" UPDATE category SET images='$filename' WHERE category_id ='". $_GET["userid"]."'";
        mysqli_query($conn,$sql_file_upload);
    }

    if (mysqli_query($conn, $sql)) 
    {
        echo "<script>alert('Your Category UPDATED successfully !');</script>";
        header('Location:category.php');
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

                <?php if (!empty($data['images'])): ?>

                    <div>
                        <img class="img-fluid w-25 mb-3" src="./upload/<?= $data['images'] ?>" alt="">
                        <a href="delete_category_attachment.php?id=<?= $data['category_id'] ?>">&#10060;</a>
                    </div>


                <?php else: ?>

                    <div class="form-group">
                        <label>File upload</label>
                        <input type="file" name="img" class="file-upload-default">
                        <div class="input-group col-xs-12">
                            <input type="text" name="img" value="<?php echo $data['images']; ?>" class="form-control" placeholder="Upload Image">
                            <span class="input-group-append">
                                <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                            </span>
                        </div>
                    </div>

                <?php endif ?>

                <div>
                    <input type="submit" name="submit" value="Update" class="btn btn-primary mr-2">
                </div>
            </form> 
        </div>
    </div>
</div>
<?php include_once('partials/footer.php') ?>    