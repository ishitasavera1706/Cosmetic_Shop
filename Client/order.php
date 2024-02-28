<?php
  $conn=mysqli_connect("localhost","root","","cosmetic");   
 
  $qry = "select * from product where product_id='" . $_GET['productid'] . "'";
  $records= mysqli_query($conn,$qry);
  $data = mysqli_fetch_array($records);
?>

<?php include_once('partials/header.php') ?>
<?php include_once('partials/navbar.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="assets/css/order.css">
</head>
<body>
  <div class="testbox container top">
    <form action="order_code.php" method="post">
      <div class="banner">
        <img class="banner" src="assets/images/order_page.jpg">
        <h1>Order Form</h1>
      </div>
      <div class="item">
        <label for="name">Customer Name<span>*</span></label>
        <input type="text" name="customer_name" required/>
      </div>
      <div class="item">
        <label for="city">city<span>*</span></label>
        <input type="text" name="city" required/>
      </div>
      <div class="item">
        <label for="address">Address<span>*</span></label>
        <textarea name="addr" required></textarea>
      </div>
      <div class="item">
        <label for="phone">Phone<span>*</span></label>
        <input type="text" name="phone" required/>
      </div>
      <div class="item">
        <label for="product">Product<span>*</span></label>
        <input type="text" value="<?php echo $data['product_name'];?>" name="product_name" required/>
      </div>
      <div class="item">
        <label for="price">Price<span>*</span></label>
        <input type="text" value="<?php echo $data['price'];?>" name="price" required/>
      </div>
      <div class="item">
        <label for="image">Image<span>*</span></label>
        <img src="<?php echo '../upload/'.$data['images'];?>" alt="..." height="250px" width="250px">
      </div>
      <div class="btn-block">
        <button type="submit" name="submit"><h4>Payment</h4></button>
      </div>
    </form>
  </div>
</body>
</html>
<?php include_once('partials/footer.php') ?>  