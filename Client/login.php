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
					<img src="assets/images/login.webp" alt="">
				</div>
				<form action="login_code.php" method="post">
					<h3>Login</h3>
					<div class="form-wrapper">
						<input type="text" name="username" placeholder="Username" class="form-control">
						<i class="zmdi zmdi-account"></i>
					</div>
					<div class="form-wrapper">
						<input type="password" name="password" placeholder="Password" class="form-control">
						<i class="zmdi zmdi-lock"></i>
					</div>
					<button type="syubmit" name="submit">Login
						<i class="zmdi zmdi-arrow-right"></i>
					</button></br></br>
					<h5>Not a Member ?<a href="register.php">&nbsp;Register</a></h5>&nbsp;&nbsp;<h5><a href="index.php">Home</a></h5>
					
				</form>
			</div>
		</div>
		
	</body>
</html>

