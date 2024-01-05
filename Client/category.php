<?php include_once('partials/header.php') ?>
<?php include_once('partials/navbar.php') ?>
<section class="section mt-5" id="products">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading">
                        <h2>Our Latest Products</h2>
                        <span>Check out all of our products.</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                
        <?php
          //create sql quary to display category from database
          
          $conn=mysqli_connect("localhost","root","","cosmetic");
          $sql = "SELECT * FROM category";

          $res=mysqli_query($conn,$sql);

          //Count rows to check wether the category is available or not

          $count = mysqli_num_rows($res);

          if($count>0)
          {
            //category available
            while($row=mysqli_fetch_assoc($res))
            {
                //get value like id, name,image..
                ?>

                    <div class="col-lg-4">
                        <div class="item">
                            <div class="thumb">
                                <div class="hover-content">
                                    <ul>
                                        <li><a href="single-product.html"><i class="fa fa-eye"></i></a></li>
                                    </ul>
                                </div>
                               
                               <img src="localhost/Cosmetic/Client//<?php echo $row['images']; ?>" alt="Not found">
                            </div>
                            <div class="down-content">
                                <h4><?php echo $row['category_name']?></h4>
                            </div>
                        </div>
                    </div>

                <?php
            }
          }
          else
          {
            //category not available
            echo"<div class='error'>category not added.</div>";
          }
        ?>
        
            </div>
        </div>
    </section>
    
<?php include_once('partials/footer.php') ?>	