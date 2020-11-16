<!--
author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>
<title>Wizata</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<meta name="keywords" content="Grand Tour Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />

    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 200);
        }
    </script>
	
	<!-- css files -->
    <link href="/assets/css/bootstrap.css" rel='stylesheet' type='text/css' /><!-- bootstrap css -->
    <link href="/assets/css/style.css" rel='stylesheet' type='text/css' /><!-- custom css -->
    <link href="/assets/css/font-awesome.min.css" rel="stylesheet"><!-- fontawesome css -->
	<link href="/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<!-- //css files -->
	
	<!-- google fonts -->
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
	<!-- //google fonts -->
	
</head>
<body>

<!-- header -->
<header>
	<div class="container">
		<!-- nav -->
		<nav class="py-md-4 py-3 d-lg-flex">
			<div id="logo">
				<h1 class="mt-md-0 mt-2"> <a href="/"><span class="fa fa-map-signs"></span> Wizata </a></h1>
			</div>
			<ul>
				<div class="dropdown">
				<a href="#" class="nav-link js-scroll-trigger dropdown-toggle"  data-toggle="dropdown">WILAYAH
					<span class="caret"></span></a>
					<ul class="dropdown-menu" >
						<?php 
						foreach ($wilayah as $row) {?>
							<li><a href="<?php echo site_url('welcome/wilayah/'.$row->id_wilayah) ?>"><?php  echo $row->wilayah ?></a></li>
						<?php } ?>
					</ul>
					</div>
			</ul>
			<label for="drop" class="toggle"><span class="fa fa-bars"></span></label>
			<input type="checkbox" id="drop" />
			<ul class="menu ml-auto mt-1">
				<!-- <li class=""><a href="index.html">Home</a></li>
				<li class=""><a href="about.html">About Us</a></li>
				<li class=""><a href="services.html">Services</a></li>
				<li class="active"><a href="packages.html">Packages</a></li>
				<li class=""><a href="contact.html">Contact</a></li>
				<li class="booking"><a href="booking.html">Book Now</a></li> -->
			
				<input id="cari" class="form-control my-0 py-1 red-border" type="text" placeholder="Search" aria-label="Search">
			</ul>
		</nav>
		<!-- //nav -->
	</div>
</header>
<!-- //header -->

<!-- banner -->
<section class="banner_inner" id="home">
	<div class="banner_inner_overlay">
	</div>
</section>
<!-- //banner -->


<!-- tour packages -->
<section class="packages pt-5">
	<div class="container py-lg-4 py-sm-3">
		<h2 class="heading text-capitalize text-center"> Choose Your Destinations</h2>
		<p class="text mt-2 mb-5 text-center"></p>
		<div class="row" id="wilayah">

				<!--JS process  -->
		
		</div>
	</div>
</section>
<!-- tour packages -->


<!--footer -->
<footer>
<section class="footer footer_w3layouts_section_1its py-5">
	<!--  -->
</section>
</footer>
<!-- //footer -->

<!-- copyright -->
<div class="copyright py-3 text-center">
	<p>© 2019 Grand Tour. All Rights Reserved | Design by <a href="http://w3layouts.com/" target="=_blank"> W3layouts </a></p>
</div>
<!-- //copyright -->

<!-- move top -->
<div class="move-top text-right">
	<a href="#home" class="move-top"> 
		<span class="fa fa-angle-up  mb-3" aria-hidden="true"></span>
	</a>
</div>
<!-- move top -->
	<script src="/assets/bootstrap/js/jquery.min.js"></script>
	<script src="/assets/vendor/jquery/jquery.min.js"></script>
  <script src="/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery-easing/jquery.easing.min.js"></script>
	<script src="/assets/js/wilayah.js"></script>
</body>
</html>