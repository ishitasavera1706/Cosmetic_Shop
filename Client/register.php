<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title></title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<!-- MATERIAL DESIGN ICONIC FONT -->
		<link rel="stylesheet" href="assets/login/fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">

		<!-- STYLE CSS -->
		<link rel="stylesheet" href="assets/login/css/style.css">
	</head>

	<body>

		<div class="wrapper" style="background-color:Gray;">
			<div class="inner">
				<div class="image-holder">
					<img src="assets/images/register.jpg" alt="">
				</div>
				<form action="register_code.php" method="post">
					<h3>Registration Form</h3>
					<div class="form-group">
						<input type="text" name="fname" placeholder="First Name" class="form-control">
						<input type="text" name="lname" placeholder="Last Name" class="form-control">
					</div>
					<div class="form-wrapper">
						<input type="text" name="username" placeholder="Username" class="form-control">
						<i class="zmdi zmdi-account"></i>
					</div>
					<div class="form-wrapper">
						<input type="text" name="email" placeholder="Email Address" class="form-control">
						<i class="zmdi zmdi-email"></i>
					</div>
					<div class="form-wrapper">
						<input type="password" name="password" placeholder="Password" class="form-control">
						<i class="zmdi zmdi-lock"></i>
					</div>
					<div class="form-wrapper">
						<input type="text" name="phone" placeholder="phone Number" class="form-control">
						<i class="zmdi zmdi-whatsapp"></i>
					</div>
					<button type="submit" name="submit">Register
						<i class="zmdi zmdi-arrow-right"></i>
					</button></br></br>
					<h5>Are you already member ?<a href="login.php">&nbsp;Login</a></h5>&nbsp;&nbsp;<h5><a href="index.php">Home</a></h5>
				</form>
			</div>
		</div>
		
	</body>
</html>


	