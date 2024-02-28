<?php include_once('partials/header.php') ?>
<?php include_once('partials/navbar.php') ?>
<!-- ***** Main Banner Area Start ***** -->
    <div class="main-banner" id="top">
        <div class="container-fluid">
            <div class="row">
                <?php
                    $conn = mysqli_connect("localhost","root","","cosmetic");
                    $query = "select * from product";

                    $records = mysqli_query($conn,$query);

                    while($data=mysqli_fetch_array($records))
                    {
                        ?>
                            <div class="col-lg-3 pl-5">
                    <div class="right-content">
                        <div class="row">
                        <div class="card mr-2 ml-1 mb-4" style="width: 18rem;border-color:black;border-width: 3px;">
                            <img src="<?php echo '../upload/'.$data['images'] ?>" class="card-img-top" alt="..." height="250px">
                            <hr style="width:100%;text-align:left;margin-left:0;border-color:black;">
                            <div class="card-body">
                                <h5 class="card-title"><b><?php echo $data['product_name'];?></b></h5>
                                <p><?php echo $data['description'];?></p>
                                <h4>&#x20B9;<?php echo $data['price'];?></h4><br/>
                                <a href="order.php?productid=<?php echo $data["product_id"]; ?>" class="btn btn-dark">Order</a>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
                        <?php
                    }
                ?>
                
                

            </div>
        </div>
    </div>
    <!-- ***** Main Banner Area End ***** -->
<?php include_once('partials/footer.php') ?>	
	