<html>
  <head>
    <title>Payment</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <style>
      * {
      box-sizing: border-box;
      }
      html, body {
      min-height: 100vh;
      padding: 0;
      margin: 0;
      font-family: Roboto, Arial, sans-serif;
      font-size: 14px; 
      color: #666;
      }
      input, textarea { 
      outline: none;
      }
      body {
      display: flex;
      justify-content: center;
      align-items: center;
      padding-left: 280px;
      padding-right: 280px;
      background:#ff8080;
      }
      h1 {
      margin-top: 0;
      font-weight: 500;
      }
      form {
      position: relative;
      width: 80%;
      border-radius: 30px;
      background: #fff;
      }
      .form-left-decoration,
      .form-right-decoration {
      content: "";
      position: absolute;
      width: 50px;
      height: 20px;
      border-radius: 20px;
      background: #ff8080;
      }
      .form-left-decoration {
      bottom: 60px;
      left: -30px;
      }
      .form-right-decoration {
      top: 60px;
      right: -30px;
      }
      .form-left-decoration:before,
      .form-left-decoration:after,
      .form-right-decoration:before,
      .form-right-decoration:after {
      content: "";
      position: absolute;
      width: 50px;
      height: 20px;
      border-radius: 30px;
      background: #fff;
      }
      .form-left-decoration:before {
      top: -20px;
      }
      .form-left-decoration:after {
      top: 20px;
      left: 10px;
      }
      .form-right-decoration:before {
      top: -20px;
      right: 0;
      }
      .form-right-decoration:after {
      top: 20px;
      right: 10px;
      }
      .circle {
      position: absolute;
      bottom: 80px;
      left: -55px;
      width: 20px;
      height: 20px;
      border-radius: 50%;
      background: #fff;
      }
      .form-inner {
      padding: 40px;
      }
      .form-inner input,
      .form-inner textarea {
      display: block;
      width: 100%;
      padding: 15px;
      margin-bottom: 10px;
      border: none;
      border-radius: 20px;
      background:#ccccb3;
      }
      .form-inner textarea {
      resize: none;
      }
      .button {
      width: 10%;
      padding: 10px;
      margin-top: 20px;
      margin-left: 10px;
      border-radius: 20px;
      border: none;
      border-bottom: 4px solid #gray;
      background: #000; 
      font-size: 16px;
      font-weight: 400;
      color: #fff;
      }
      } 
      @media (min-width: 568px) {
      form {
      width: 60%;
      }
      }
    </style>
  </head>
  <body>
    <form action="payment_code.php" method="post" class="decor">
      <div class="form-left-decoration"></div>
      <div class="form-right-decoration"></div>
      <div class="circle"></div>
      <div class="form-inner">
        <h1>Payment</h1>
        <label class="form-label"><b>Customer Name</b></label>
        <input type="text" name="customer_name" placeholder="Customer Name">
        <label class="form-label"><b>Card Number</b></label>
        <input type="text" name="card_number" class="form-control" placeholder="1234 5678 435678" required/>
        <label class="form-label"><b>Expiry</b></label>   
        <input type="month" name="expiry" class="form-control" placeholder="MM/YYYY" required/>
        <label class="form-label"><b>CVV/CVC</b></label>
        <input type="password" name="cvv_cvc" class="form-control" placeholder="***" required/>
                    
                            
        <button class="button" type="submit" name="submit">Submit</button>
        <button class="button" onclick="window.location.href='index.php';">Home</button>
      </div>
    </form>
  </body>
</html>
