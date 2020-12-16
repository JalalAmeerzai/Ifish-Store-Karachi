
<?php
include './files/productInfo.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>iFish Store: We deliver the finest and export quality seafood to your doorstep</title>
		<!-- Favicons (created with http://realfavicongenerator.net/)-->
	<link rel="apple-touch-icon" sizes="57x57" href="img/favicons/apple-touch-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="img/favicons/apple-touch-icon-60x60.png">
	<link rel="icon" type="image/png" href="img/favicons/favicon-32x32.png" sizes="32x32">
	<link rel="icon" type="image/png" href="img/favicons/favicon-16x16.png" sizes="16x16">
	<link rel="manifest" href="img/favicons/manifest.json">
	<link rel="shortcut icon" href="img/favicons/favicon.ico">
	<meta name="msapplication-TileColor" content="#00a8ff">
	<meta name="msapplication-config" content="img/favicons/browserconfig.xml">
	<meta name="theme-color" content="#ffffff">
	<!-- Normalize -->
	<link rel="stylesheet" type="text/css" href="css/normalize.css">
	<!-- Bootstrap -->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<!-- Owl -->
	<link rel="stylesheet" type="text/css" href="css/owl.css">
	<!-- Animate.css -->
	<link rel="stylesheet" type="text/css" href="css/animate.css">
	<!-- Font Awesome -->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.1.0/css/font-awesome.min.css">
	<!-- Elegant Icons -->
	<link rel="stylesheet" type="text/css" href="fonts/eleganticons/et-icons.css">
	<!-- Main style -->
	<link rel="stylesheet" type="text/css" href="css/cardio.css">
</head>

<body>
	
	<nav class="navbar">
		<div class="container">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">
					<div>
						<img src="img/logo.png" data-active-url="img/logo-active.png" alt="" 								width="120" height="47" style="float:left">
						
						<h3 id="logoName">iFish Store</h3>
					</div>
				</a>
			</div>
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav navbar-right main-nav">
					<li><a href="#intro">Home</a></li>
					<li><a href="#services">About Us</a></li>
					<li><a href="#team">Products</a></li>
					<li><a href="#pricing">Latest</a></li>
					
				</ul>
			</div>
			<!-- /.navbar-collapse -->
		</div>
		<!-- /.container-fluid -->
	</nav>
	<header id="intro">
		<div class="container">
			<div class="table">
				<div class="header-text">
					<div class="row">
						<div class="col-md-12 text-center">
							<h3 class="light white"></h3>
							<h3 class="light white"></h3>
							<h3 class="light white"></h3>
							<h3 class="light white">From shore to your doorstep,</h3>
							<h1 class="white typed">The very fresh SEAFOOD caught from the deep Arabian Sea to YOUR Doorstep.</h1>
							<span class="typed-cursor">|</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
	
	<section id="services" class="section section-padded">
		<div class="container">
			<div class="row text-center title">
				<h2>About Us</h2>
				<br>
				<h4 class="light muted">We deliver the finest and export quality seafood to your doorstep.</h4>
				<br>
				<h4 class="light muted">Sourcing the good quality seafood in Karachi has always been a hurdle for citizens therefore iFish team had made the effort so that you dont have to!</h4>
			</div>
			<div class="row services">
				<div class="col-md-4">
					<div class="service">
						<div class="icon-holder">
							<img src="img/icons/fishingic.png" alt="" class="icon">
						</div>
						<h4 class="heading">Fresh Seafood</h4>
						<p class="description">We provide to you the freshest seasfood items at reasonable prices.</p>
					</div>
				</div>
				<div class="col-md-4">
					<div class="service">
						<div class="icon-holder">
							<img src="img/icons/deliveryic.png" alt="" class="icon">
						</div>
						<h4 class="heading">Free Delivery</h4>
						<p class="description">We deliver the very fresh seafood to your doorstep free of cost.</p>
					</div>
				</div>
				<div class="col-md-4">
					<div class="service">
						<div class="icon-holder">
							<img src="img/icons/customercareic.png" alt="" class="icon">
						</div>
						<h4 class="heading">Customer Care</h4>
						<p class="description">We are always available via phones to answer your queries.</p>
					</div>
				</div>
			</div>
		</div>
		<div class=""></div>
	</section>
	<section id="team" class="section gray-bg">
		<div class="container">
			<div class="row title text-center">
				<h2 class="">Products</h2>
				<br>
				<h4 class="light muted">Presenting to you the finest quality seafood in town.</h4>
			</div>
			
			
			
			<div class="row">
				
				<hr>
				<br>
				<h3 class="heading text-center">Premium</h3>
				
				<div class="col-md-3">
					<div class="team text-center">
						<div class="cover" style="background:url('img/products/product5.jpg'); background-size:cover;">
							<div class="overlay text-center">
								<h3 class="white">Rs <?php echo $productPrice["product5"]; ?> </h3>
								<h5 class="light light-white">per Kg</h5>
							</div>
						</div>
						
						<div class="title">
							<h4><?php echo $productNames["product5"]; ?></h4>
							<h5 class="muted regular"><?php echo $productExtra["product5"]; ?></h5>
							<h5 class="muted regular">(Boneless/Skinless)</h5>
							<h5 class="muted regular">Rs <?php echo $productPrice["product5"]; ?> /kg</h5>
							
						</div>
						<button data-toggle="modal" data-target="#modal5" class="btn btn-blue-fill">Place Order</button>
					</div>
				</div>
				
			</div>
			
			
			
			<div class="row">
				<hr>
				<br>
				<h3 class="heading text-center">Fishes</h3>
				
				<div class="col-md-3">
					<div class="team text-center">
						<div class="cover" style="background:url('img/products/product1.jpg'); background-size:cover;">
							<div class="overlay text-center">
								<h3 class="white">Rs <?php echo $productPrice["product1"]; ?> </h3>
								<h5 class="light light-white">per Kg</h5>
							</div>
						</div>
						
						<div class="title">
							<h4><?php echo $productNames["product1"]; ?></h4>
							<h5 class="muted regular"><?php echo $productExtra["product1"]; ?></h5>
							<h5 class="muted regular">Rs <?php echo $productPrice["product1"]; ?>  /kg</h5>
						</div>
						<button data-toggle="modal" data-target="#modal1" class="btn btn-blue-fill">Place Order</button>
					</div>
				</div>
				
				<div class="col-md-3">
					<div class="team text-center">
						<div class="cover" style="background:url('img/products/product2.jpg'); background-size:cover;">
							<div class="overlay text-center">
								<h3 class="white">Rs <?php echo $productPrice["product2"]; ?> </h3>
								<h5 class="light light-white">per Kg</h5>
							</div>
						</div>
						
						<div class="title">
							<h4><?php echo $productNames["product2"]; ?></h4>
							<h5 class="muted regular"><?php echo $productExtra["product2"]; ?></h5>
							<h5 class="muted regular">Rs <?php echo $productPrice["product2"]; ?> /kg</h5>
						</div>
						<button data-toggle="modal" data-target="#modal2" class="btn btn-blue-fill">Place Order</button>
					</div>
				</div>
				
				<div class="col-md-3">
					<div class="team text-center">
						<div class="cover" style="background:url('img/products/product3.jpg'); background-size:cover;">
							<div class="overlay text-center">
								<h3 class="white">Rs <?php echo $productPrice["product3"]; ?> </h3>
								<h5 class="light light-white">per Kg</h5>
							</div>
						</div>
						
						<div class="title">
							<h4><?php echo $productNames["product3"]; ?></h4>
							<h5 class="muted regular"><?php echo $productExtra["product3"]; ?></h5>
							<h5 class="muted regular">Rs <?php echo $productPrice["product3"]; ?> /kg</h5>
						</div>
						<button data-toggle="modal" data-target="#modal3" class="btn btn-blue-fill">Place Order</button>
					</div>
				</div>
				
				<div class="col-md-3">
					<div class="team text-center">
						<div class="cover" style="background:url('img/products/product4.jpg'); background-size:cover;">
							<div class="overlay text-center">
								<h3 class="white">Rs <?php echo $productPrice["product4"]; ?> </h3>
								<h5 class="light light-white">per Kg</h5>
							</div>
						</div>
						
						<div class="title">
							<h4><?php echo $productNames["product4"]; ?></h4>
							<h5 class="muted regular"><?php echo $productExtra["product4"]; ?></h5>
							<h5 class="muted regular">Rs <?php echo $productPrice["product4"]; ?> /kg</h5>
						</div>
						<button data-toggle="modal" data-target="#modal4" class="btn btn-blue-fill">Place Order</button>
					</div>
				</div>
				
				<div class="col-md-3">
					<div class="team text-center">
						<div class="cover" style="background:url('img/products/product6.jpg'); background-size:cover;">
							<div class="overlay text-center">
								<h3 class="white">Rs <?php echo $productPrice["product6"]; ?> </h3>
								<h5 class="light light-white">per Kg</h5>
							</div>
						</div>
						
						<div class="title">
							<h4><?php echo $productNames["product6"]; ?></h4>
							<h5 class="muted regular"><?php echo $productExtra["product6"]; ?></h5>
							<h5 class="muted regular">Rs <?php echo $productPrice["product6"]; ?> /kg</h5>
						</div>
						<button data-toggle="modal" data-target="#modal6" class="btn btn-blue-fill">Place Order</button>
					</div>
				</div>
				
				<div class="col-md-3">
					<div class="team text-center">
						<div class="cover" style="background:url('img/products/product7.jpg'); background-size:cover;">
							<div class="overlay text-center">
								<h3 class="white">Rs <?php echo $productPrice["product7"]; ?> </h3>
								<h5 class="light light-white">per Kg</h5>
							</div>
						</div>
						
						<div class="title">
							<h4><?php echo $productNames["product7"]; ?></h4>
							<h5 class="muted regular"><?php echo $productExtra["product7"]; ?></h5>
							<h5 class="muted regular">Rs <?php echo $productPrice["product7"]; ?> /kg</h5>
						</div>
						<button data-toggle="modal" data-target="#modal7" class="btn btn-blue-fill">Place Order</button>
					</div>
				</div>
				
				<div class="col-md-3">
					<div class="team text-center">
						<div class="cover" style="background:url('img/products/product8.jpg'); background-size:cover;">
							<div class="overlay text-center">
								<h3 class="white">Rs <?php echo $productPrice["product8"]; ?> </h3>
								<h5 class="light light-white">per Kg</h5>
							</div>
						</div>
						
						<div class="title">
							<h4><?php echo $productNames["product8"]; ?></h4>
							<h5 class="muted regular"><?php echo $productExtra["product8"]; ?></h5>
							<h5 class="muted regular">Rs <?php echo $productPrice["product8"]; ?> /kg</h5>
						</div>
						<button data-toggle="modal" data-target="#modal8" class="btn btn-blue-fill">Place Order</button>
					</div>
				</div>
				
			</div>
			
			
			
			
			<div class="row">
			
				
			<hr>
			<br>
			<h3 class="heading text-center">Prawns</h3>	
				
				
				<div class="col-md-3">
					<div class="team text-center">
						<div class="cover" style="background:url('img/products/product9.jpg'); background-size:cover;">
							<div class="overlay text-center">
								<h3 class="white">Rs <?php echo $productPrice["product9"]; ?> </h3>
								<h5 class="light light-white">per Kg</h5>
							</div>
						</div>
						
						<div class="title">
							<h4><?php echo $productNames["product9"]; ?></h4>
							<h5 class="muted regular"><?php echo $productExtra["product9"]; ?></h5>
							<h5 class="muted regular">Rs <?php echo $productPrice["product9"]; ?> /kg</h5>
						</div>
						<button data-toggle="modal" data-target="#modal9" class="btn btn-blue-fill">Place Order</button>
					</div>
				</div>
				
				<div class="col-md-3">
					<div class="team text-center">
						<div class="cover" style="background:url('img/products/product10.jpg'); background-size:cover;">
							<div class="overlay text-center">
								<h3 class="white">Rs <?php echo $productPrice["product10"]; ?> </h3>
								<h5 class="light light-white">per Kg</h5>
							</div>
						</div>
						
						<div class="title">
							<h4><?php echo $productNames["product10"]; ?></h4>
							<h5 class="muted regular"><?php echo $productExtra["product10"]; ?></h5>
							<h5 class="muted regular">Rs <?php echo $productPrice["product10"]; ?> /kg</h5>
						</div>
						<button data-toggle="modal" data-target="#modal10" class="btn btn-blue-fill">Place Order</button>
					</div>
				</div>
				
				<div class="col-md-3">
					<div class="team text-center">
						<div class="cover" style="background:url('img/products/product11.jpg'); background-size:cover;">
							<div class="overlay text-center">
								<h3 class="white">Rs <?php echo $productPrice["product11"]; ?> </h3>
								<h5 class="light light-white">per Kg</h5>
							</div>
						</div>
						
						<div class="title">
							<h4><?php echo $productNames["product11"]; ?></h4>
							<h5 class="muted regular"><?php echo $productExtra["product11"]; ?></h5>
							<h5 class="muted regular">Rs <?php echo $productPrice["product11"]; ?> /kg</h5>
						</div>
						<button data-toggle="modal" data-target="#modal11" class="btn btn-blue-fill">Place Order</button>
					</div>
				</div>
				

			</div>
			
			<div class="row">
				
				<hr>
				<br>
				<h3 class="heading text-center">Other Seafoods</h3>
				
				<div class="col-md-3">
					<div class="team text-center">
						<div class="cover" style="background:url('img/products/product12.jpg'); background-size:cover;">
							<div class="overlay text-center">
								<h3 class="white">Rs <?php echo $productPrice["product12"]; ?> </h3>
								<h5 class="light light-white">per Kg</h5>
							</div>
						</div>
						
						<div class="title">
							<h4><?php echo $productNames["product12"]; ?></h4>
							<h5 class="muted regular"><?php echo $productExtra["product12"]; ?></h5>
							<h5 class="muted regular">Rs <?php echo $productPrice["product12"]; ?> /kg</h5>
						</div>
						<button data-toggle="modal" data-target="#modal12" class="btn btn-blue-fill">Place Order</button>
					</div>
				</div>
				
				<div class="col-md-3">
					<div class="team text-center">
						<div class="cover" style="background:url('img/products/product13.jpg'); background-size:cover;">
							<div class="overlay text-center">
								<h3 class="white">Rs <?php echo $productPrice["product13"]; ?> </h3>
								<h5 class="light light-white">per Kg</h5>
							</div>
						</div>
						
						<div class="title">
							<h4><?php echo $productNames["product13"]; ?></h4>
							<h5 class="muted regular"><?php echo $productExtra["product13"]; ?></h5>
							<h5 class="muted regular">Rs <?php echo $productPrice["product13"]; ?> /kg</h5>
						</div>
						<button data-toggle="modal" data-target="#modal13" class="btn btn-blue-fill">Place Order</button>
					</div>
				</div>
				
				

			</div>
			
			
			
			
		</div>
	</section>
	
	<section class="section" id="pricing">
		<div class="container">
			
			
			<div class="row title text-center">
				<h2 class="white">Latest Updates</h2>
				<h4 class="light white">You will be updated about the latest news and offers</h4>
			</div>
			<br>
			<br>
			
			<div class="row">
				<div class="col-md-12">
					<div class="owl-twitter owl-carousel">
						<div class="item text-center">
							<i class="icon fa fa-newspaper-o"></i>
							<h4 class="white light">To enjoy the glow of good health, you must eat fresh.</h4>
							<h5 class="light-white light regular">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium.</h5>
						</div>
						<div class="item text-center">
							<i class="icon fa fa-newspaper-o"></i>
							<h4 class="white light">To enjoy the glow of good health, you must eat fresh.</h4>
							<h5 class="light-white light regular">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium.</h5>
						</div>
						<div class="item text-center">
							<i class="icon fa fa-newspaper-o"></i>
							<h4 class="white light">To enjoy the glow of good health, you must eat fresh.</h4>
							<h5 class="light-white light regular">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium.</h5>
						</div>
						<div class="item text-center">
							<i class="icon fa fa-newspaper-o"></i>
							<h4 class="white light">To enjoy the glow of good health, you must eat fresh.</h4>
							<h5 class="light-white light regular">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium.</h5>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	
	
<!-- POP UP-->
	
	<!-- product 1-->
	
	<div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content modal-popup">
				<a href="#" class="close-link"><i class="icon_close_alt2"></i></a>
				<h3 class="white"><?php echo $productNames["product1"]; ?></h3>
				<h5 class="light light-white">Rs. <?php echo $productPrice["product1"]; ?> / Kg</h5>
				

				
                                <form action="sendmail.php" class="popup-form" method="Post">
					 <input type="text" required name="product" value="<?php echo $productNames["product1"]; ?>" style="display: none">
                                        <input type="text" class="form-control form-white" placeholder="Full Name" required name="fullname">
					<input type="text" class="form-control form-white" placeholder="Contact"
					required name="contact">
					<h5 class="light light-white">Delivery Address</h5>
					<textarea class="form-control form-white" style="resize: none;" 
				    required name="address"></textarea>
					
					<input type="number" class="form-control form-white" placeholder="kg"
					required name="kg">
					
					<div id="" style="float: clear">
						<h5 class="light light-white">You can avail 8% discount on the purchase of whole round and the uncut raw Fish</h5>
						<br>
						<input type="checkbox" 	style="float: left; padding-left: 10px" name="check">
						<label class="light-white" style="float: left"> Do not Cut/Clean my Fish and give me 8% discount</label>
						
					</div>
					
                                        <input type="submit" class="btn btn-submit" name="sub">
				</form>
			</div>
		</div>
	</div>
	
	<!-- product 2-->
	
	
	<div class="modal fade" id="modal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content modal-popup">
				<a href="#" class="close-link"><i class="icon_close_alt2"></i></a>
				<h3 class="white"><?php echo $productNames["product2"]; ?></h3>
				<h5 class="light light-white">Rs. <?php echo $productPrice["product2"]; ?> / Kg</h5>
				<form action="sendmail.php" class="popup-form" method="Post">
                                        <input type="text" required name="product" value="<?php echo $productNames["product2"]; ?>" style="display: none">
					<input type="text" class="form-control form-white" placeholder="Full Name" 							required name="fullname">
					<input type="text" class="form-control form-white" placeholder="Contact"
					required name="contact">
					<h5 class="light light-white">Delivery Address</h5>
					<textarea class="form-control form-white" style="resize: none;" 
				    required name="address"></textarea>
					
					<input type="number" class="form-control form-white" placeholder="kg"
					required name="kg">
					
					
					<div id="" style="float: clear">
						<h5 class="light light-white">You can avail 8% discount on the purchase of whole round and the uncut raw Fish</h5>
						<br>
						<input type="checkbox" 	style="float: left; padding-left: 10px" name="check">
						<label class="light-white" style="float: left"> Do not Cut/Clean my Fish and give me 8% discount</label>
						
					</div>
					
					
					
					<input type="submit" class="btn btn-submit" name="sub">
				</form>
			</div>
		</div>
	</div>

	
	<!-- product 3-->
	
	
	<div class="modal fade" id="modal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content modal-popup">
				<a href="#" class="close-link"><i class="icon_close_alt2"></i></a>
				<h3 class="white"><?php echo $productNames["product3"]; ?></h3>
				<h5 class="light light-white">Rs. <?php echo $productPrice["product3"]; ?> / Kg</h5>
				<form action="sendmail.php" class="popup-form" method="Post">
                                        <input type="text" required name="product" value="<?php echo $productNames["product3"]; ?>" style="display: none">
                                        <input type="text" class="form-control form-white" placeholder="Full Name" 							required name="fullname">
					<input type="text" class="form-control form-white" placeholder="Contact"
					required name="contact">
                                        
					<h5 class="light light-white">Delivery Address</h5>
					<textarea class="form-control form-white" style="resize: none;" 
				    required name="address"></textarea>
					
					<input type="number" class="form-control form-white" placeholder="kg"
					required name="kg">
					
					
					
					<div id="" style="float: clear">
						<h5 class="light light-white">You can avail 8% discount on the purchase of whole round and the uncut raw Fish</h5>
						<br>
						<input type="checkbox" 	style="float: left; padding-left: 10px" name="check">
						<label class="light-white" style="float: left"> Do not Cut/Clean my Fish and give me 8% discount</label>
						
					</div>
					
					
					<input type="submit" class="btn btn-submit" name="sub">
				</form>
			</div>
		</div>
	</div>
<!-- product 4-->
	
	
	<div class="modal fade" id="modal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content modal-popup">
				<a href="#" class="close-link"><i class="icon_close_alt2"></i></a>
				<h3 class="white"><?php echo $productNames["product4"]; ?></h3>
				<h5 class="light light-white">Rs. <?php echo $productPrice["product4"]; ?> / Kg</h5>
				<form action="sendmail.php" class="popup-form" method="Post">
    <input type="text" required name="product" value="<?php echo $productNames["product4"]; ?>" style="display: none">
					<input type="text" class="form-control form-white" placeholder="Full Name" 							required name="fullname">
					<input type="text" class="form-control form-white" placeholder="Contact"
					required name="contact">
					<h5 class="light light-white">Delivery Address</h5>
					<textarea class="form-control form-white" style="resize: none;" 
				    required name="address"></textarea>
					
					<input type="number" class="form-control form-white" placeholder="kg"
					required name="kg">
					
					
					
					<div id="" style="float: clear">
						<h5 class="light light-white">You can avail 8% discount on the purchase of whole round and the uncut raw Fish</h5>
						<br>
						<input type="checkbox" 	style="float: left; padding-left: 10px" name="check">
						<label class="light-white" style="float: left"> Do not Cut/Clean my Fish and give me 8% discount</label>
						
					</div>
					
					
					<input type="submit" class="btn btn-submit" name="sub">
				</form>
			</div>
		</div>
	</div>
<!-- product 5-->
	
	
	<div class="modal fade" id="modal5" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content modal-popup">
				<a href="#" class="close-link"><i class="icon_close_alt2"></i></a>
				<h3 class="white"><?php echo $productNames["product5"]; ?></h3>
				<h5 class="light light-white">Rs. <?php echo $productPrice["product5"]; ?> / Kg</h5>
				<form action="sendmail.php" class="popup-form" method="Post">
    <input type="text" required name="product" value="<?php echo $productNames["product5"]; ?>" style="display: none">
					<input type="text" class="form-control form-white" placeholder="Full Name" 							required name="fullname">
					<input type="text" class="form-control form-white" placeholder="Contact"
					required name="contact">
					<h5 class="light light-white">Delivery Address</h5>
					<textarea class="form-control form-white" style="resize: none;" 
				    required name="address"></textarea>
					
					<input type="number" class="form-control form-white" placeholder="kg"
					required name="kg">
					
					
					
					
					
					<input type="submit" class="btn btn-submit" name="sub">
				</form>
			</div>
		</div>
	</div>
<!-- product 6-->
	
	
	<div class="modal fade" id="modal6" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content modal-popup">
				<a href="#" class="close-link"><i class="icon_close_alt2"></i></a>
				<h3 class="white"><?php echo $productNames["product6"]; ?></h3>
				<h5 class="light light-white">Rs. <?php echo $productPrice["product6"]; ?> / Kg</h5>
				<form action="sendmail.php" class="popup-form" method="Post">
    <input type="text" required name="product" value="<?php echo $productNames["product6"]; ?>" style="display: none">
					<input type="text" class="form-control form-white" placeholder="Full Name" 							required name="fullname">
					<input type="text" class="form-control form-white" placeholder="Contact"
					required name="contact">
					<h5 class="light light-white">Delivery Address</h5>
					<textarea class="form-control form-white" style="resize: none;" 
				    required name="address"></textarea>
					
					<input type="number" class="form-control form-white" placeholder="kg"
					required name="kg">
					
					
					
					<div id="" style="float: clear">
						<h5 class="light light-white">You can avail 8% discount on the purchase of whole round and the uncut raw Fish</h5>
						<br>
						<input type="checkbox" 	style="float: left; padding-left: 10px" name="check">
						<label class="light-white" style="float: left"> Do not Cut/Clean my Fish and give me 8% discount</label>
						
					</div>
					
					
					<input type="submit" class="btn btn-submit" name="sub">
				</form>
			</div>
		</div>
	</div>
	
	
<!-- product 7-->
	
	
	<div class="modal fade" id="modal7" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content modal-popup">
				<a href="#" class="close-link"><i class="icon_close_alt2"></i></a>
				<h3 class="white"><?php echo $productNames["product7"]; ?></h3>
				<h5 class="light light-white">Rs. <?php echo $productPrice["product7"]; ?> / Kg</h5>
				<form action="sendmail.php" class="popup-form" method="Post">
    <input type="text" required name="product" value="<?php echo $productNames["product7"]; ?>" style="display: none">
					<input type="text" class="form-control form-white" placeholder="Full Name" 							required name="fullname">
					<input type="text" class="form-control form-white" placeholder="Contact"
					required name="contact">
					<h5 class="light light-white">Delivery Address</h5>
					<textarea class="form-control form-white" style="resize: none;" 
				    required name="address"></textarea>
					
					<input type="number" class="form-control form-white" placeholder="kg"
					required name="kg">
					
					
					
					<div id="" style="float: clear">
						<h5 class="light light-white">You can avail 8% discount on the purchase of whole round and the uncut raw Fish</h5>
						<br>
						<input type="checkbox" 	style="float: left; padding-left: 10px" name="check">
						<label class="light-white" style="float: left"> Do not Cut/Clean my Fish and give me 8% discount</label>
						
					</div>
					
					
					
					<input type="submit" class="btn btn-submit" name="sub">
				</form>
			</div>
		</div>
	</div>
<!-- product 8-->
	
	
	<div class="modal fade" id="modal8" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content modal-popup">
				<a href="#" class="close-link"><i class="icon_close_alt2"></i></a>
				<h3 class="white"><?php echo $productNames["product8"]; ?></h3>
				<h5 class="light light-white">Rs. <?php echo $productPrice["product8"]; ?> / Kg</h5>
				<form action="sendmail.php" class="popup-form" method="Post">
    <input type="text" required name="product" value="<?php echo $productNames["product8"]; ?>" style="display: none">
					<input type="text" class="form-control form-white" placeholder="Full Name" 							required name="fullname">
					<input type="text" class="form-control form-white" placeholder="Contact"
					required name="contact">
					<h5 class="light light-white">Delivery Address</h5>
					<textarea class="form-control form-white" style="resize: none;" 
				    required name="address"></textarea>
					
					<input type="number" class="form-control form-white" placeholder="kg"
					required name="kg">
					
					
					
					<div id="" style="float: clear">
						<h5 class="light light-white">You can avail 8% discount on the purchase of whole round and the uncut raw Fish</h5>
						<br>
						<input type="checkbox" 	style="float: left; padding-left: 10px" name="check">
						<label class="light-white" style="float: left"> Do not Cut/Clean my Fish and give me 8% discount</label>
						
					</div>
					
					
					
					<input type="submit" class="btn btn-submit" name="sub">
				</form>
			</div>
		</div>
	</div>
<!-- product 9-->
	
	
	<div class="modal fade" id="modal9" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content modal-popup">
				<a href="#" class="close-link"><i class="icon_close_alt2"></i></a>
				<h3 class="white"><?php echo $productNames["product9"]; ?></h3>
				<h5 class="light light-white">Rs. <?php echo $productPrice["product9"]; ?> / Kg</h5>
				<form action="sendmail.php" class="popup-form" method="Post">
    <input type="text" required name="product" value="<?php echo $productNames["product9"]; ?>" style="display: none">
					<input type="text" class="form-control form-white" placeholder="Full Name" 							required name="fullname">
					<input type="text" class="form-control form-white" placeholder="Contact"
					required name="contact">
					<h5 class="light light-white">Delivery Address</h5>
					<textarea class="form-control form-white" style="resize: none;" 
				    required name="address"></textarea>
					
					<input type="number" class="form-control form-white" placeholder="kg"
					required name="kg">
					
					
					<div id="" style="float: clear">
						<h5 class="light light-white">You can avail 40% discount on the purchase of whole round and the uncut raw Prawns</h5>
						<br>
						<input type="checkbox" 	style="float: left; padding-left: 10px" name="check">
						<label class="light-white" style="float: left"> Do not Cut/Clean my prawns and give me 40% discount</label>
						
					</div>
					
					
					<input type="submit" class="btn btn-submit" name="sub">
				</form>
			</div>
		</div>
	</div>
<!-- product 10-->
	
	
	<div class="modal fade" id="modal10" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content modal-popup">
				<a href="#" class="close-link"><i class="icon_close_alt2"></i></a>
				<h3 class="white"><?php echo $productNames["product10"]; ?></h3>
				<h5 class="light light-white">Rs. <?php echo $productPrice["product10"]; ?> / Kg</h5>
				<form action="sendmail.php" class="popup-form" method="Post">
    <input type="text" required name="product" value="<?php echo $productNames["product10"]; ?>" style="display: none">
					<input type="text" class="form-control form-white" placeholder="Full Name" 							required name="fullname">
					<input type="text" class="form-control form-white" placeholder="Contact"
					required name="contact">
					<h5 class="light light-white">Delivery Address</h5>
					<textarea class="form-control form-white" style="resize: none;" 
				    required name="address"></textarea>
					
					<input type="number" class="form-control form-white" placeholder="kg"
					required name="kg">
					
					
					<div id="" style="float: clear">
						<h5 class="light light-white">You can avail 40% discount on the purchase of whole round and the uncut raw Prawns</h5>
						<br>
						<input type="checkbox" 	style="float: left; padding-left: 10px" name="check">
						<label class="light-white" style="float: left"> Do not Cut/Clean my prawns and give me 40% discount</label>
						
					</div>
					
					
					
					<input type="submit" class="btn btn-submit" name="sub">
				</form>
			</div>
		</div>
	</div>
<!-- product 11-->
	
	
	<div class="modal fade" id="modal11" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content modal-popup">
				<a href="#" class="close-link"><i class="icon_close_alt2"></i></a>
				<h3 class="white"><?php echo $productNames["product11"]; ?></h3>
				<h5 class="light light-white">Rs. <?php echo $productPrice["product11"]; ?> / Kg</h5>
				<form action="sendmail.php" class="popup-form" method="Post">
    <input type="text" required name="product" value="<?php echo $productNames["product11"]; ?>" style="display: none">
					<input type="text" class="form-control form-white" placeholder="Full Name" 							required name="fullname">
					<input type="text" class="form-control form-white" placeholder="Contact"
					required name="contact">
					<h5 class="light light-white">Delivery Address</h5>
					<textarea class="form-control form-white" style="resize: none;" 
				    required name="address"></textarea>
					
					<input type="number" class="form-control form-white" placeholder="kg"
					required name="kg">
					
					
					<div id="" style="float: clear">
						<h5 class="light light-white">You can avail 40% discount on the purchase of whole round and the uncut raw Prawns</h5>
						<br>
						<input type="checkbox" 	style="float: left; padding-left: 10px" name="check">
						<label class="light-white" style="float: left"> Do not Cut/Clean my prawns and give me 40% discount</label>
						
					</div>
					
					
					
					
					<input type="submit" class="btn btn-submit" name="sub">
				</form>
			</div>
		</div>
	</div>
<!-- product 12-->
	
	
	<div class="modal fade" id="modal12" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content modal-popup">
				<a href="#" class="close-link"><i class="icon_close_alt2"></i></a>
				<h3 class="white"><?php echo $productNames["product12"]; ?></h3>
				<h5 class="light light-white">Rs. <?php echo $productPrice["product12"]; ?> / Kg</h5>
				<form action="sendmail.php" class="popup-form" method="Post">
    <input type="text" required name="product" value="<?php echo $productNames["product12"]; ?>" style="display: none">
					<input type="text" class="form-control form-white" placeholder="Full Name" 							required name="fullname">
					<input type="text" class="form-control form-white" placeholder="Contact"
					required name="contact">
					<h5 class="light light-white">Delivery Address</h5>
					<textarea class="form-control form-white" style="resize: none;" 
				    required name="address"></textarea>
					
					<input type="number" class="form-control form-white" placeholder="kg"
					required name="kg">
					
					
					<div id="" style="float: clear">
						<h5 class="light light-white">You can avail 40% discount on the purchase of whole round and the uncut raw Lobster</h5>
						<br>
						<input type="checkbox" 	style="float: left; padding-left: 10px" name="check">
						<label class="light-white" style="float: left"> Do not Cut/Clean my Lobster and give me 40% discount</label>
						
					</div>
					
					
					<input type="submit" class="btn btn-submit" name="sub">
				</form>
			</div>
		</div>
	</div>
<!-- product 13-->
	
	
	<div class="modal fade" id="modal13" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content modal-popup">
				<a href="#" class="close-link"><i class="icon_close_alt2"></i></a>
				<h3 class="white"><?php echo $productNames["product13"]; ?></h3>
				<h5 class="light light-white">Rs. <?php echo $productPrice["product13"]; ?> / Kg</h5>
				<form action="sendmail.php" class="popup-form" method="Post">
    <input type="text" required name="product" value="<?php echo $productNames["product13"]; ?>" style="display: none">
					<input type="text" class="form-control form-white" placeholder="Full Name" 							required name="fullname">
					<input type="text" class="form-control form-white" placeholder="Contact"
					required name="contact">
					<h5 class="light light-white">Delivery Address</h5>
					<textarea class="form-control form-white" style="resize: none;" 
				    required name="address"></textarea>
					
					<input type="number" class="form-control form-white" placeholder="kg"
					required name="kg">
					
					
					
					<div id="" style="float: clear">
						<h5 class="light light-white">You can avail 40% discount on the purchase of whole round and the uncut raw Crabs</h5>
						<br>
						<input type="checkbox" 	style="float: left; padding-left: 10px" name="check">
						<label class="light-white" style="float: left"> Do not Cut/Clean my crabs and give me 40% discount</label>
						
					</div>
					
					
					<input type="submit" class="btn btn-submit" name="sub">
				</form>
			</div>
		</div>
	</div>

	
<!-- POP UP END-->
	
	<footer>
		<div class="container">
			<div class="row">
				<div class="col-sm-8 text-center-mobile">
					<h3 class="white">Stay In Touch!</h3>
	
					<div class="row opening-hours">
						<div class="col-sm-8 text-center-mobile">
							<h5 class="light-white light">Phone</h5>
							<h3 class="regular white"><i class="icon fa fa-phone"></i> 021-32530285</h3>
							<h3 class="regular white"><i class="icon fa fa-mobile"></i> 0300-2349922</h3>
						</div>
						<div class="col-sm-8 text-center-mobile">
							<h5 class="light-white light">Email</h5>
							<h3 class="regular white"><i class="icon fa fa-envelope"></i> info@iFishstore.pk</h3>
						</div>
					</div>
				</div>
				
				
				<div class="col-sm-4 text-center-mobile">
					<h3 class="white">Always Available <span class="open-blink"></span></h3>
					<div class="row opening-hours">
						<div class="col-sm-12 text-center-mobile">
							
							<h4 class="regular white">We are available 24/7 to your service</h4>
						</div>
						
					</div>
				</div>
			</div>
			<div class="row bottom-footer text-center-mobile">
				<div class="col-sm-8">
					<p>&copy; 2016 All Rights Reserved. Powered by <a> iFishstore.pk</a></p>
				</div>
				<div class="col-sm-4 text-right text-center-mobile">
					<ul class="social-footer">
						<li><a href="http://www.facebook.com/ifishstore.pk"><i class="fa fa-facebook"></i></a></li>
						
					</ul>
				</div>
			</div>
		</div>
	</footer>
	<!-- Holder for mobile navigation -->
	<div class="mobile-nav">
		<ul>
		</ul>
		<a href="#" class="close-link"><i class="arrow_up"></i></a>
	</div>
	<!-- Scripts -->
	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/wow.min.js"></script>
	<script src="js/typewriter.js"></script>
	<script src="js/jquery.onepagenav.js"></script>
	<script src="js/main.js"></script>
</body>

</html>
