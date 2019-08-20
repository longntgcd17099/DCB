<?php 
if(!isset($_SESSION)) session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Home - Tran Ngoc Thanh</title>
	<link rel="shortcut icon" href="images/favicon.ico">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
	<script src="js/jquery.min.js"></script>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<a class="navbar-brand" href="#"><button class="btn btn-outline-success my-2 my-sm-0" type="submit">Today's special Offers !</button></a>
		<form class="form-inline mr-auto">
			<input class="header_search form-control" type="search" placeholder="Search" aria-label="Search" size=70>
			<button class="btn btn-outline-secondary my-2 my-sm-0" type="submit">Search</button>
		</form>
		<div class="form-inline my-2 my-lg-0 header_rightt">
			<?php if (isset($_SESSION["isLogin"]) && $_SESSION["isLogin"] == true): ?>
				<div class="dropdown">
				<button class="btn btn-danger dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Hello, <?php echo $_SESSION['user'][3] . $_SESSION['user'][2]; ?></button>
				<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
					<a class="dropdown-item" href="logout.php">Logout</a>
				</div>
			</div>
			<?php else: ?>
				<div class="dropdown">
				<button class="btn btn-danger dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Login\SignUp</button>
				<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
					<a class="dropdown-item" href="login.php">Login</a>
					<a class="dropdown-item" href="register.php">SignUp</a>
				</div>
			</div>
			<?php endif ?>
			
		</div>
		<div class="form-inline my-2 my-lg-0">
			<button class="btn btn-outline-danger" type="submit">Contact Us</button>
		</div>
	</nav>

	<div class="logo_products">
		<div class="container">
			<div class="w3ls_logo_products_left">
				<h1><a href="index.html"><span>Grocery</span> Store</a></h1>
			</div>
			<div class="w3ls_logo_products_left1">
				<ul class="special_items">
					<li><a href="events.html">Events</a><i>/</i></li>
					<li><a href="about.html">About Us</a><i>/</i></li>
					<li><a href="products.html">Best Deals</a><i>/</i></li>
					<li><a href="services.html">Services</a></li>
					<li><i class="fa fa-phone" aria-hidden="true"></i>(+0123) 234 567</li>
					<li><i class="fa fa-envelope-o" aria-hidden="true"></i><a href="mailto:store@grocery.com">store@grocery.com</a></li>
				</ul>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>

	<div class="container">
		<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
			<ol class="carousel-indicators">
				<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
			</ol>
			<div class="carousel-inner">
				<div class="carousel-item active">
					<img class="d-block w-100" src="images/banner3.png" alt="First slide" height="450">
					<div class="carousel-caption d-none d-md-block">
						<h5>MAKE YOUR FOOD WITH SPICY.</h5>
						<p>Have Fun !</p>
						<button type="button" class="btn btn-success">Shop now !</button>
					</div>
				</div>
				<div class="carousel-item">
					<img class="d-block w-100" src="images/banner.png" alt="Second slide" height="450">
					<div class="carousel-caption d-none d-md-block">
						<h5>MAKE YOUR FOOD WITH SPICY.</h5>
						<p>Have Fun !</p>
						<button type="button" class="btn btn-success">Shop now !</button>
					</div>
				</div>
				<div class="carousel-item">
					<img class="d-block w-100" src="images/banner2.png" alt="Third slide" height="450">
					<div class="carousel-caption d-none d-md-block">
						<h5>MAKE YOUR FOOD WITH SPICY.</h5>
						<p>Have Fun !</p>
						<button type="button" class="btn btn-success">Shop now !</button>
					</div>
				</div>
			</div>
			<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
	</div>

	<div class="hotoffers">
		<div class="container text-center">
			<div class="border-bottom">
				<p class="h1">Hot Offers</p>
			</div>
			<div style="padding-top: 2em;"></div>
			<div class="row">
				<div class="col-lg-3 col-sm-6 col-xs-12">
					<div class="agile_top_brand_left_grid">
						<div class="agile_top_brand_left_grid1">
							<figure>
								<a href="single.html"><img title=" " alt=" " src="images/1.png" /></a>		
								<p>fortune sunflower oil</p>
								<h5>$14.99 <span class="line-through">$33.00</span></h5>
								<button type="button" class="btn btn-danger button">Add To Card</button>
							</figure>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6 col-xs-12">
					<div class="agile_top_brand_left_grid">
						<div class="agile_top_brand_left_grid1">
							<figure>
								<a href="single.html"><img title=" " alt=" " src="images/3.png" /></a>		
								<p>basmati rise (5 Kg)</p>
								<h5>$11.99 <span class="line-through">$15.00</span></h5>
								<button type="button" class="btn btn-danger button">Add To Card</button>
							</figure>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6 col-xs-12">
					<div class="agile_top_brand_left_grid">
						<div class="agile_top_brand_left_grid1">
							<figure>
								<a href="single.html"><img src="images/2.png" alt=" " class="img-responsive" /></a>
								<p>Pepsi soft drink (2 Ltr)</p>
								<h5>$12.99 <span class="line-through">$19.00</span></h5>
								<button type="button" class="btn btn-danger button">Add To Cards</button>
							</figure>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6 col-xs-12">
					<div class="agile_top_brand_left_grid">
						<div class="agile_top_brand_left_grid1">
							<figure>
								<a href="single.html"><img src="images/4.png" alt=" " class="img-responsive" /></a>
								<p>dogs food (4 Kg)</p>
								<h5>$9.99 <span class="line-through">$15.00</span></h5>
								<button type="button" class="btn btn-danger button">Add To Cards</button>
							</figure>
						</div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>

	<div class="top_product">
		<div class="container ">
			<div class="border-bottom text-center">
				<p class="h1 ">Top Products</p>
			</div>
			<div style="padding-top: 2em;"></div>
			<div class="hotoffers topproduct_list">
				<div class="row text-left">
					<div class="col-xs-12 col-sm-12 col-md-4">
						<div class="list-group">
							<button type="button" class="list-group-item list-group-item-action"><i class="fa fa-angle-double-right" aria-hidden="true"></i><span>All Brands</span></button>
							<button type="button" class="list-group-item list-group-item-action"><i class="fa fa-angle-double-right" aria-hidden="true"></i><span>Vegetables</span></button>
							<button type="button" class="list-group-item list-group-item-action"><i class="fa fa-angle-double-right" aria-hidden="true"></i><span>Fruits</span></button>
							<button type="button" class="list-group-item list-group-item-action"><i class="fa fa-angle-double-right" aria-hidden="true"></i><span>Juices</span></button>
							<button type="button" class="list-group-item list-group-item-action"><i class="fa fa-angle-double-right" aria-hidden="true"></i><span>Pet Food</span></button>
							<button type="button" class="list-group-item list-group-item-action"><i class="fa fa-angle-double-right" aria-hidden="true"></i><span>Bread & Bakery</span></button>
							<button type="button" class="list-group-item list-group-item-action"><i class="fa fa-angle-double-right" aria-hidden="true"></i><span>Cleaning</span></button>
							<button type="button" class="list-group-item list-group-item-action"><i class="fa fa-angle-double-right" aria-hidden="true"></i><span>Spices</span></button>
							<button type="button" class="list-group-item list-group-item-action"><i class="fa fa-angle-double-right" aria-hidden="true"></i><span>Dry Fruits</span></button>
							<button type="button" class="list-group-item list-group-item-action"><i class="fa fa-angle-double-right" aria-hidden="true"></i><span>Dry Products</span></button>
						</div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-8">
						<div class="row"> 
							<div class="column">
								<img src="images/8.jpg">
							</div>
							<div class="column">
								<img src="images/7.jpg">
								<img src="images/9.jpg">
							</div> 
							<div class="column">
								<img src="images/10.jpg">
								<img src="images/11.jpg">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="newsletter">
		<div class="container">
			<div class="row text-center text-xs-center text-sm-left text-md-left">
				<div class="col-xs-12 col-sm-5 col-md-5 text-center">
					<p class="h3 text-white">Sign up for our newsletter</p>
				</div>
				<div class="col-xs-12 col-sm-5 col-md-7">
					<div class="input-group">
						<input type="email" class="form-control" name="Email" value="Input your Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
						<div class="input-group-append">
							<button class="btn btn-danger" type="submit">Submit</button> 
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>



	<section id="footer">
		<div class="container">
			<div class="row text-center text-xs-center text-sm-left text-md-left">
				<div class="col-lg-3 col-sm-6 col-xs-12">
					<h5>INFORMATION</h5>
					<ul class="list-unstyled quick-links">
						<li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Events</a></li>
						<li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>About Us</a></li>
						<li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Best Deals</a></li>
						<li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Services</a></li>
						<li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Short Codes</a></li>
					</ul>
				</div>
				<div class="col-lg-3 col-sm-6 col-xs-12">
					<h5>POLICY INFO</h5>
					<ul class="list-unstyled quick-links">
						<li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>FAQ</a></li>
						<li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Privacy Policy</a></li>
						<li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Teams Of Use</a></li>
					</ul>
				</div>
				<div class="col-lg-3 col-sm-6 col-xs-12">
					<h5>WHAT IN STORES</h5>
					<ul class="list-unstyled quick-links">
						<li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Pet Food</a></li>
						<li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Prozen Snacks</a></li>
						<li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Kitchen</a></li>
						<li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Braned Foods</a></li>
						<li><a href="https://wwwe.sunlimetech.com" title="Design and developed by"><i class="fa fa-angle-double-right"></i>House Holds</a></li>
					</ul>
				</div>
				<div class="col-lg-3 col-sm-6 col-xs-12">
					<h5>TWITTER POSTS</h5>
					<ul class="list-unstyled quick-links">
						<li><p class="text-success">01 day ago</p>
							<p><a href="#" class="text-secondary">Non numquam http://sd.ds/13jklf# eius modi tempora incidunt ut labore et http://sd.ds/1389kjklf#quo nulla.</a></p>
						</li>
						<li><p class="text-success">02 day ago</p>
							<p><a href="#" class="text-secondary">Con numquam http://fd.uf/56hfg# eius modi tempora incidunt ut labore et http://fd.uf/56hfg#quo nulla.</a></p>
						</li>
					</ul>
				</div>
			</div>
			<div class="row border-top border-white">
				<div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-2 text-center text-white">
					<br>
					<p class="h6">&2018 Grocery Store. All rights reserved</p>
				</div>
			</div>	
		</div>
	</section>

	<!-- ./Footer -->
	<script src="js/jquery-3.2.1.slim.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>	
