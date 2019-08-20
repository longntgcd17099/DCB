<html>
<head>
	<title>Database Test</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
	<link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="row">
		<div class="col-12">
			<div class="container">
				<div class="d-flex justify-content-center h-100">
					<div class="card">
						<div class="card-header">
							<h3>Sign In</h3>
							<div class="d-flex justify-content-end social_icon">
								<a href="https://www.facebook.com/ngocthanh.tran.3954"><span><i class="fab fa-facebook-square"></i></span></a>
								<a href="https://www.gmail.com"><span><i class="fab fa-google-plus-square"></i></span></a>
								<a href="https://twitter.com"><span><i class="fab fa-twitter-square"></i></span></a>
							</div>
						</div>
						<div class="card-body">
							<form method="post" action="\ConnectToDB.php">
								<div class="input-group form-group">
									<div class="input-group-prepend">
										<span class="input-group-text"><i class="fas fa-user"></i></span>
									</div>
									<input type="text" class="form-control" placeholder="username">

								</div>
								<div class="input-group form-group">
									<div class="input-group-prepend">
										<span class="input-group-text"><i class="fas fa-key"></i></span>
									</div>
									<input type="password" class="form-control" placeholder="password">
								</div>
								<div class="form-group">
									<input type="submit" value="Login" class="btn float-right login_btn">
								</div>
							</form>
						</div>
						<div class="card-footer">
							<div class="d-flex justify-content-center links">
								Don't have an account?<a href="#">Sign Up</a>
							</div>
							<div class="d-flex justify-content-center">
								<a href="#">Forgot your password?</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>