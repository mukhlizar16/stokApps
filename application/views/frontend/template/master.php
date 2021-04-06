<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html class="no-js" lang="zxx">
<head>
	<meta charset="UTF-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<title><?= $title; ?></title>
	<!-- Favicon -->
	<link rel="shortcut icon" href="<?= config_item('image') ?>favicon.ico" type="image/x-icon"/>
	<link rel="icon" href="<?= config_item('image') ?>favicon.ico" type="image/x-icon"/>
	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&family=Poppins:wght@300;400;500;600;700;800&display=swap"
		  rel="stylesheet"/>
	<!-- Icofont CSS -->
	<link rel="stylesheet" href="<?= config_item('css') ?>icofont.min.css"/>
	<!-- Slick CSS -->
	<link rel="stylesheet" href="<?= config_item('css') ?>slick.css"/>
	<link rel="stylesheet" href="<?= config_item('css') ?>slick-theme.css"/>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="<?= config_item('css') ?>bootstrap.min.css"/>
	<!-- Venobox CSS -->
	<link rel="stylesheet" href="<?= config_item('css') ?>venobox.min.css"/>
	<!-- Style CSS -->
	<link rel="stylesheet" href="<?= config_item('css') ?>style.css"/>
	<!-- Responsive CSS -->
	<link rel="stylesheet" href="<?= config_item('css') ?>responsive.css"/>
	<!-- Toastr-->
	<link rel="stylesheet" href="<?= base_url() ?>assets/plugin/toastr.min.css">
</head>
<body>
<!-- Goto TOP -->
<div id="top-btn">
	<button class="btn top-btn"><i class="icofont-arrow-up"></i></button>
</div>
<!-- Preloader -->
<div class="preloader-wrap">
	<div class="preloader">
		<span></span>
		<span></span>
		<span></span>
		<span></span>
	</div>
</div>
<!--HEADER PART START-->
<header>
	<div class="header py-1">
		<div class="container">
			<nav class="navbar navbar-expand-lg navbar-light px-0 py-0">
				<a class="navbar-brand" href="<?= site_url() ?>">
					<div class="logo">
						<img src="<?= config_item('image') ?>logo.png" class="w-100 img-fluid" alt=""/>
					</div>
				</a>
				<div class="open-time">
					<h6><i class="icofont-clock-time"></i> Open Now</h6>
					<span>8AM - 10PM</span>
				</div>
				<button class="navbar-toggler" type="button" data-toggle="collapse"
						data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
						aria-expanded="false" aria-label="Toggle navigation">
					<i class="icofont-navigation-menu"></i>
				</button>

				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav navbar-custom">
						<li class="nav-item <?= get_url('') ? 'active' : '' ?>">
							<a class="nav-link" href="<?= base_url() ?>">Home </a>
						</li>
						<li class="nav-item <?= get_url('about') ? 'active' : '' ?>">
							<a class="nav-link" href="#">About</a>
						</li>
						<?php if ($this->session->userdata('is_login') == 'yes') { ?>
							<li class="nav-item">
								<a class="nav-link" href="<?= site_url('login/logout') ?>">Logout</a>
							</li>
						<?php }else{ ?>
							<li class="nav-item <?= get_url('login') ? 'active' : '' ?>">
								<a class="nav-link" href="<?= site_url('login') ?>">Login</a>
							</li>
						<?php } ?>
						<li class="nav-item last-menu-bg">
							<span class="nav-link"><a href="#">+2 364 98 672</a></span>
						</li>
					</ul>
				</div>
			</nav>
		</div>
	</div>
</header>
<!--HEADER PART END-->

<!--KONTEN-->
<?= $konten; ?>
<!--KONTEN END-->

<!--FOOTER TOP SECTION START-->
<div class="footer-top">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
				<div class="footer-top-content">
					<div class="logo">
						<img src="<?= config_item('image') ?>logo.png" class="w-100 img-fluid" alt=""/>
					</div>
					<p>If you are going to use a passage of need to be sure there isn't anything hidden in the middle
						text.</p>
					<span>If you are going to use a passage of need to be sure there isn't</span>
					<ul class="social-icon-list">
						<li>
							<a href="#"><i class="icofont-facebook"></i></a>
						</li>
						<li class="social-icon custom-icon-pinterest">
							<a href="#"><i class="icofont-pinterest"></i></a>
						</li>
						<li class="social-icon custom-icon-dribbble">
							<a href="#"><i class="icofont-dribbble"></i></a>
						</li>
						<li class="social-icon custom-icon-twitter">
							<a href="#"><i class="icofont-twitter"></i></a>
						</li>
					</ul>
				</div>
			</div>

			<div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
				<div class="contact-content">
					<h3>Contact Us</h3>
					<img src="<?= config_item('image') ?>border.png" alt=""/>
					<div class="contact-info d-flex align-items-center">
						<div class="icon"><i class="icofont-phone"></i></div>
						<div class="info">
							<a href="#">+880 659 468</a>
							<a href="#">02 697 86456</a>
						</div>
					</div>
					<div class="contact-info d-flex align-items-center">
						<div class="icon"><i class="icofont-email"></i></div>
						<div class="info">
							<a href="#">support@gmail.com</a>
							<a href="#">hotte24@gmail.com</a>
						</div>
					</div>
					<div class="contact-info d-flex align-items-center">
						<div class="icon"><i class="icofont-google-map"></i></div>
						<div class="info">
							<a href="#">855 Road, Brooklyn Street New York 600, Wisconsin(WI)</a>
						</div>
					</div>
				</div>
			</div>

			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-5">
				<div class="opening-hours">
					<div class="opening-content">
						<h3>Opening Hours:</h3>
						<div class="row mt-4">
							<div class="col-4 mt-2">
								<span>Sunday</span>
							</div>
							<div class="col-4 mt-2">
								<img src="<?= config_item('image') ?>line2.png" alt=""/>
							</div>
							<div class="col-4 mt-2">
								<span class="closeing-day">Closeing Day</span>
							</div>
							<div class="col-4 mt-2">
								<span>Monday</span>
							</div>
							<div class="col-4 mt-2">
								<img src="<?= config_item('image') ?>line2.png" alt=""/>
							</div>
							<div class="col-4 mt-2">
								<span>8AM - 10PM</span>
							</div>
							<div class="col-4 mt-2">
								<span>Tuesday</span>
							</div>
							<div class="col-4 mt-2">
								<img src="<?= config_item('image') ?>line2.png" alt=""/>
							</div>
							<div class="col-4 mt-2">
								<span>8AM - 10PM</span>
							</div>
							<div class="col-4 mt-2">
								<span>Wednesday</span>
							</div>
							<div class="col-4 mt-2">
								<img src="<?= config_item('image') ?>line2.png" alt=""/>
							</div>
							<div class="col-4 mt-2">
								<span>8AM - 10PM</span>
							</div>
							<div class="col-4 mt-2">
								<span class="custom-date-span">Thursday</span>
							</div>
							<div class="col-4 mt-2">
								<img src="<?= config_item('image') ?>line3.png" alt=""/>
							</div>
							<div class="col-4 mt-2">
								<span class="custom-date-span">8AM - 10PM</span>
							</div>
							<div class="col-4 mt-2">
								<span>Friday</span>
							</div>
							<div class="col-4 mt-2">
								<img src="<?= config_item('image') ?>line2.png" alt=""/>
							</div>
							<div class="col-4 mt-2">
								<span>8AM - 10PM</span>
							</div>
							<div class="col-4 mt-2">
								<span>Saturday</span>
							</div>
							<div class="col-4 mt-2">
								<img src="<?= config_item('image') ?>line2.png" alt=""/>
							</div>
							<div class="col-4 mt-2">
								<span>8AM - 10PM</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!--FOOTER TOP SECTION END-->

<!--FOOTER BOTTOM START-->
<div class="footer-bootom">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-7 col-lg-7 col-xl-7">
				<div class="copyright-txt">
					<p>Copyright 2020. All Rights Reserved.</p>
				</div>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-5 col-lg-5 col-xl-5">
				<div class="terms">
					<span><a href="#">Terms & Conditions</a> | <a href="#">Privacy Policy</a></span>
				</div>
			</div>
		</div>
	</div>
</div>
<!--FOOTER BOTTOM END-->

<!-- jQuery File-->
<script src="<?= config_item('js') ?>jquery-3.5.1.min.js"></script>
<!-- Popper JS -->
<script src="<?= config_item('js') ?>popper.min.js"></script>
<!-- Slick JS -->
<script src="<?= config_item('js') ?>slick.min.js"></script>
<!-- Bootstrap JS -->
<script src="<?= config_item('js') ?>bootstrap.min.js"></script>
<!-- Venobox JS -->
<script src="<?= config_item('js') ?>venobox.min.js"></script>
<script src="<?= config_item('base_url') ?>assets/plugin/toastr.min.js"></script>
<!-- main.js -->
<script src="<?= config_item('js') ?>main.js"></script>
<script src="<?= config_item('js') ?>script.js"></script>

<script>
	$(".testimonial-slider").slick({
		autoplay: true,
		autoplaySpreed: 7000,
		arrows: true,
		prevArrow: '<i class="icofont-arrow-left"></i>',
		nextArrow: '<i class="icofont-arrow-right"></i>',
		responsive: [
			{
				breakpoint: 1024,
				settings: {
					slidesToShow: 1,
					slidesToScroll: 1,
					infinite: true,
				},
			},
			{
				breakpoint: 600,
				settings: {
					slidesToShow: 1,
					slidesToScroll: 1,
				},
			},
			{
				breakpoint: 480,
				settings: {
					slidesToShow: 1,
					slidesToScroll: 1,
				},
			},
		],
	});
</script>
</body>
</html>
