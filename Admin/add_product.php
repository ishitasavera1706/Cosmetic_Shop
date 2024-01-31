<?php include_once('partials/main.php') ?>
<div class="col-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title">Add Product</h4>
      <form class="forms-sample" method="post" enctype="multipart/form-data">
        <div class="form-group">
          <label for="exampleInputName1">Category Name</label>
          <select class="form-control" name="category">
            <?php
            include('connect.php');
            $query = "select * from category";
            $result = mysqli_query($conn,$query);
            while($category=mysqli_fetch_array($result,MYSQLI_ASSOC)):;
              ?>
              <option value="<?php echo $category["category_id"];?>">
                <?php echo $category["category_name"];?>
              </option>
              <?php
            endwhile;  
            ?>
          </select>
        </div>
        <div class="form-group">
          <label for="exampleInputName1">Product Name</label>
          <input type="text" name="product_name" class="form-control" placeholder="Product Name">
        </div>
        <div class="form-group">
          <label for="exampleInputName1">Price</label>
          <input type="text" name="price" class="form-control" placeholder="Price">
        </div> 
           <div class="form-group">
          <label for="exampleInputName1">Description</label>
          <textarea name="description" class="form-control" placeholder="Description" rows="5" cols="5">
          </textarea>
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
        $category =$_POST['category'];
        $product_name=$_POST['product_name'];
        $price=$_POST['price'];
        $description=$_POST['description'];
        $filename = $_FILES["img"]["name"];
        $tempname = $_FILES["img"]["tmp_name"];    
        $folder = "../upload/".$filename;

// Now let's move the uploaded image into the folder: image
        if (move_uploaded_file($tempname, $folder))  
          {   $msg = "Image uploaded successfully";   }
        else
          {   $msg = "Failed to upload image";    }


        $sql = "INSERT INTO product (category_id,product_name,price,description,images) VALUES ('$category','$product_name','$price','$description','$filename')";
        if (mysqli_query($conn,$sql)) 
        {
          echo "<script>alert('Your Product added successfully !');</script>";

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
