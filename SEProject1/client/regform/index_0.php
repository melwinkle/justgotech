<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Sign In</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<!-- MATERIAL DESIGN ICONIC FONT -->
		<link rel="stylesheet" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">

		<!-- STYLE CSS -->
		<link rel="stylesheet" href="css/style.css">
		
	</head>

	<body>
		
		<div class="wrapper" style="background-image: url('images/bg-registration-form-1.jpg');">
			
			<div class="inner">
				<div class="image-holder">
					<h3>       </h3>
					<img src="images/registration-form-1.jpg" alt="">
					
				</div>
				<div >
			<a href="/justgotech/SEProject1/client/landingpage/index.html">HOME</a>
		</div>
				
				<form method="post" action="login_auth.php">
					<h3>Sign In</h3>	
					<div class="form-wrapper">
						<input name="username" type="text" placeholder="Username" class="form-control">
						<i class="zmdi zmdi-account"></i>
					</div>
					<div class="form-wrapper">
						<input name="email" type="text" placeholder="Email Address" class="form-control">
						<i class="zmdi zmdi-email"></i>
					</div>
					<div class="form-wrapper">
						<input name="password" type="password" placeholder="Password" class="form-control">
						<i class="zmdi zmdi-lock"></i>
					</div>
                    <a href="index_1.html" class="forgot">Forgot your password?</a>
					<button name="submit" type="submit"> Sign In
						<i class="zmdi zmdi-arrow-right"></i>
					</button>
                    <div class="register">Don't have an account? <a href="index.php" class="in_">Register!</a></div>
				</form>
                
			</div>
            
		</div>
		
	</body>
</html>