<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Soapbox Website</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@vime/core@^5/themes/default.css"/>
	<link rel="stylesheet" href="assets/css/main.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
	<link rel="stylesheet" href="https://use.typekit.net/whs1mey.css">
	<link rel="icon" type="image/x-icon" href="assets/images/favicon.ico">
</head>
<body>
	<!-- Header met nav -->
	<header>
		<div class="sub-header">
			<div class="container">
				<div class="row">
					<div class="col">
						<ul id="menu-subnav" class="d-flex flex-row align-items-center justify-content-end">
							<li id="menu-item-270" class="menu-item menu-item-type-custom menu-item-object-custom nav-item"><a href="#" class="nav-link ">Sign up</a></li>
							<li id="menu-item-271" class="menu-item menu-item-type-custom menu-item-object-custom nav-item"><a href="#" class="nav-link ">Log in</a></li>
							<li id="menu-item-272" class="menu-item menu-item-type-custom menu-item-object-custom nav-item"><a href="#" class="nav-link "><img src="assets/images/logo-boxed.png" alt="Soupbox"></a></li>
							<div class="hamburger tiny">
								<div class="hamburger-box">
									<div class="hamburger-inner">
									</div>
								</div>
							</div>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<nav class="navbar navbar-expand-lg container p-3">
			<a class="logo" href="#"><img src="assets/images/logo.svg" alt="Soupbox"></a>
			<!-- Hamburger button -->
			<button class="navbar-toggler navbar-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
			</button>
			<!-- Collapsible menu -->
			<div class="collapse navbar-collapse mt-3 mt-lg-0" id="navbarNav">
				<ul class="navbar-nav ms-auto">
					<li class="nav-item">
					<a class="nav-link" href="#services">Our Services</a>
					</li>
					<li class="nav-item">
					<a class="nav-link" href="#partners">Partners</a>
					</li>
					<li class="nav-item">
					<a class="nav-link" href="#contact">Contact</a>
					</li>
				</ul>
			</div>
		</nav>
	</header>
	<!-- Slider main container -->
	<main>
		<!-- Hero Sectie -->
		<section class="hero text-left text-white py-5" style="background: url('assets/images/TUDIC-Speeddates-091.png') no-repeat background center/cover;">
			<div class="container py-5">
				<div class="row">
					<div class="col">
						<h1>Connecting Young Professionals And Organisations for Impactful Careers</h1>
					</div>
				</div>
			</div>
		</section>
		<!-- Your talent -->
		<section class="bg-elements flipped">
			<div class="container">
				<div class="row">
					<div class="col text-center">
						<h2>[Y]our talent</h2>
					</div>
				</div>
				<div class="row">
					<div class="col-12 swiper">
						<div class="swiper-wrapper">
							<div class="swiper-slide">
								<div class="img-holder">
									<img class="play" src="assets/images/feather-triangle.png" class="card-img-top" alt="Tinder 1">
									<img src="assets/images/tinder-male-1.png" class="card-img-top" alt="Tinder 1">
								</div>
								<div class="content">
									<ul class="m-auto">
										<li class="d-flex align-items-start"><i class="soapbox-icon icon-graduation"></i> Zuyd Hogeschool</li>
										<li class="d-flex align-items-start"><i class="soapbox-icon icon-graduation"></i> Communication Multimedia Design</li>
									</ul>
									<a href="#" class="like d-flex align-items-center justify-content-center"><i class="soapbox-icon icon-heart"></i></a>
								</div>
							</div>
							<div class="swiper-slide swiper-slide-active">
								<!-- <div class="img-holder">
											<img class="play" src="assets/images/feather-triangle.png" class="card-img-top" alt="Tinder 2">
											<img src="assets/images/tinder-male-2.png" class="card-img-top" alt="Tinder 2">
										</div> -->
								<div class="video-holder">
									<img class="play custom-play-button" src="assets/images/feather-triangle.png" class="card-img-top" alt="Tinder 1">
									<vm-player theme="dark" style="--vm-player-theme: #e86c8b;">
									<vm-video cross-origin poster="https://files.vidstack.io/agent-327/poster.png">
									<source data-src="https://files.vidstack.io/agent-327/720p.mp4" type="video/mp4"/>
									</vm-video>
									<vm-default-ui></vm-default-ui>
									</vm-player>
								</div>
								<div class="content">
									<ul class="m-auto">
										<li class="d-flex align-items-ce"><i class="soapbox-icon icon-graduation"></i> Zuyd Hogeschool</li>
										<li class="d-inline-flex align-items-start"><i class="soapbox-icon icon-graduation"></i> Bachelor of Facility Management</li>
									</ul>
									<a href="#" class="like d-flex align-items-center justify-content-center"><i class="soapbox-icon icon-heart"></i></a>
								</div>
							</div>
							<div class="swiper-slide">
								<div class="img-holder">
									<img class="play" src="assets/images/feather-triangle.png" class="card-img-top" alt="Tinder 3">
									<img src="assets/images/tinder-male-3.png" class="card-img-top" alt="Tinder 3">
								</div>
								<div class="content d-flex">
									<ul class="m-auto">
										<li class="d-flex align-items-start"><i class="soapbox-icon icon-graduation"></i> Universiteit Maastricht</li>
										<li class="d-flex align-items-start"><i class="soapbox-icon icon-graduation"></i> Digital Society</li>
									</ul>
									<a href="#" class="like d-flex align-items-center justify-content-center"><i class="soapbox-icon icon-heart"></i></a>
								</div>
							</div>
						</div>
						<div class="swiper-nav swiper-button-prev">
						</div>
						<div class="swiper-nav swiper-button-next">
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- CTA -->
		<section class="cta gradientbg bgflipped">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 offset-lg-3 text-center">
						<h2 class="text-white">Let's work together</h2>
						<button type="button" class="btn btn-primary">Get in touch <i class="soapbox-icon icon-chev"></i></button>
					</div>
				</div>
			</div>
		</section>
		<!-- What we do -->
		<section class="bg-elements" id="services">
			<div class=" container py-5">
				<h2 class="text-center mb-5">What We Do</h2>
				<div class="row g-5">
					<!-- Talent Acquisition -->
					<div class="col-md-6">
						<div class="talentcard card h-100 w-100">
							<img src="assets/images/TUD_speeddates_-1.png" class="card-img-top" alt="TUD">
							<div class="card-body">
								<h4 class="card-title">Talent Acquisition</h4>
								<p class="card-text">
									Recruitment and selection, job coaching & secondment for young professionals.
								</p>
								<span class="badge primary"><i class="soapbox-icon icon-star"></i></span>
							</div>
						</div>
					</div>
					<!-- Career Events -->
					<div class="col-md-6">
						<div class="card talentcard h-100 w-100">
							<img src="assets/images/TUD_speeddates_007.png" class="card-img-top" alt="Career Events">
							<div class="card-body">
								<h4 class="card-title">Career Events</h4>
								<p class="card-text">
									We facilitate your employer branding by hosting meaningful & connective events and workshops.
								</p>
								<span class="badge secondary"><i class="soapbox-icon icon-star"></i></span>
							</div>
						</div>
					</div>
					<!-- Student Consultancy -->
					<div class="col-md-6">
						<div class="card talentcard h-100 w-100">
							<img src="assets/images/TUDIC-Finale-1.png" class="card-img-top" alt="Student Consultancy">
							<div class="card-body">
								<h4 class="card-title">Student Consultancy</h4>
								<p class="card-text">
									Quality (side)jobs for HBO & WO students.
								</p>
								<span class="badge primary"><i class="soapbox-icon icon-star"></i></span>
							</div>
						</div>
					</div>
					<!-- Inhouse Sprints -->
					<div class="col-md-6">
						<div class="card talentcard h-100 w-100">
							<img src="assets/images/TUDIC-Finale-143.png" class="card-img-top" alt="Inhouse Sprints">
							<div class="card-body">
								<h4 class="card-title">Inhouse Sprints</h4>
								<p class="card-text">
									Students will work on real business cases, followed by an in-depth presentation with a feasible solution.
								</p>
								<span class="badge secondary"><i class="soapbox-icon icon-star"></i></span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Partners -->
		<section class="primary" id="partners">
			<div class="container">
				<h2 class="text-center mb-5">Partners</h2>
				<div class="row text-center g-5">
					<!-- Organisations -->
					<div class="col-md-4">
						<h5>Organisations</h5>
						<div class="partners">
							<div class="partner-box">
								<img src="assets/images/ASML.png" alt="ASML">
							</div>
							<div class="partner-box">
								<img src="assets/images/Medtronic-Logo.png" alt="Medtronic">
							</div>
							<div class="partner-box">
								<img src="assets/images/Vattenfall_logo2.svg.png" alt="Vattenfall">
							</div>
							<div class="partner-box">
								<img src="assets/images/NXP_Semiconductors_logo_2023.svg.png" alt="NXP">
							</div>
							<div class="partner-box">
								<img src="assets/images/mumc_logo.png" alt="MUMC">
							</div>
							<div class="partner-box">
								<img src="assets/images/AlbertHeijn.png" alt="Albert Heijn">
							</div>
						</div>
					</div>
					<!-- Educational Institutes -->
					<div class="col-md-4">
						<h5>Educational Institutes</h5>
						<div class="partners">
							<div class="partner-box">
								<img src="assets/images/ASML.png" alt="ASML">
							</div>
							<div class="partner-box">
								<img src="assets/images/Medtronic-Logo.png" alt="Medtronic">
							</div>
							<div class="partner-box">
								<img src="assets/images/Vattenfall_logo2.svg.png" alt="Vattenfall">
							</div>
							<div class="partner-box">
								<img src="assets/images/NXP_Semiconductors_logo_2023.svg.png" alt="NXP">
							</div>
							<div class="partner-box">
								<img src="assets/images/mumc_logo.png" alt="MUMC">
							</div>
							<div class="partner-box">
								<img src="assets/images/AlbertHeijn.png" alt="Albert Heijn">
							</div>
						</div>
					</div>
					<!-- Government -->
					<div class="col-md-4">
						<h5>Government</h5>
						<div class="partners">
							<div class="partner-box">
								<img src="assets/images/ASML.png" alt="ASML">
							</div>
							<div class="partner-box">
								<img src="assets/images/Medtronic-Logo.png" alt="Medtronic">
							</div>
							<div class="partner-box">
								<img src="assets/images/Vattenfall_logo2.svg.png" alt="Vattenfall">
							</div>
							<div class="partner-box">
								<img src="assets/images/NXP_Semiconductors_logo_2023.svg.png" alt="NXP">
							</div>
							<div class="partner-box">
								<img src="assets/images/mumc_logo.png" alt="MUMC">
							</div>
							<div class="partner-box">
								<img src="assets/images/AlbertHeijn.png" alt="Albert Heijn">
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Visit us in -->
		<section class="bg-elements flipped py-5" id="contact">
			<div class="container">
				<h2 class="mb-5 text-center">Visit us in</h2>
				<div class="row g-5">
					<div class="col-md-4 location-card">
						<div class="img-holder d-flex">
							<img src="assets/images/amsterdam.jpg" class="card-img-top" alt="Soapbox Amsterdam">
						</div>
						<h3 class="mt-2">Soapbox Amsterdam</h3>
						<p>
							Van Diemenstraat 118<br>
							1013 CN Amsterdam<br>
							The Netherlands
						</p>
						<p>
							<a class="d-flex" href="tel:+31437600300" target="_blank"><i class="soapbox-icon icon-phone"></i>+ 31 (0)43 7600 300</a>
							<a class="d-flex" href="mailto:info@soapbox.nl" target="_blank"><i class="soapbox-icon icon-mail"></i>info@soapbox.nl</a>
						</p>
					</div>
					<div class="col-md-4 location-card">
						<div class="img-holder d-flex">
							<img src="assets/images/maastricht.jpg" class="card-img-top" alt="Soapbox Maastricht">
						</div>
						<h3 class="mt-2">Soapbox Maastricht</h3>
						<p>
							Avenue Ceramique 300<br>
							6221 KX Maastricht<br>
							The Netherlands
						</p>
						<p>
							<a class="d-flex" href="tel:+31437600300" target="_blank"><i class="soapbox-icon icon-phone"></i>+ 31 (0)43 7600 300</a>
							<a class="d-flex" href="mailto:info@soapbox.nl" target="_blank"><i class="soapbox-icon icon-mail"></i>info@soapbox.nl</a>
						</p>
					</div>
					<div class="col-md-4 location-card">
						<div class="img-holder d-flex">
							<img src="assets/images/kaapstad.jpg" class="card-img-top" alt="Soapbox South-Africa">
						</div>
						<h3 class="mt-2">Soapbox South Africa</h3>
						<p>
							14 Upper Pepper Street<br>
							8000 Cape Town, South Africa
						</p>
						<p>
							<a class="d-flex" href="tel:+27723529806" target="_blank"><i class="soapbox-icon icon-phone"></i> + 27 (0) 7235 29 806</a>
							<a class="d-flex" href="mailto:info@soapbox.nl" target="_blank"><i class="soapbox-icon icon-mail"></i>info@soapbox.nl</a>
						</p>
					</div>
				</div>
			</div>
		</section>
	</main>
	<!-- Footer -->
	<footer class="gradientbg">
		<div class="container py-5">
			<div class="row align-items-center c-border-bottom pb-4">
				<!-- Social Media Section footer -->
				<div class="social-icons col-lg-4 mb-4 mb-lg-0 d-flex justify-content-center justify-content-lg-start gap-3">
					<a href="#" class="social-link">
					<i class="soapbox-icon icon-tiktok"></i>
					</a>
					<a href="#" class="social-link">
					<i class="soapbox-icon icon-instagram"></i>
					</a>
					<a href="#" class="social-link ">
					<i class="soapbox-icon smaller icon-youtube"></i>
					</a>
					<a href="#" class="social-link">
					<i class="soapbox-icon smaller icon-mail"></i>
					</a>
				</div>
				<!-- Logo footer -->
				<div class="col-lg-8 d-flex justify-content-center justify-content-lg-end">
					<a class="logo py-4" href="#"><img src="assets/images/logo-orange.svg" alt="Soapbox"></a>
				</div>
			</div>
			<div class="row py-4 footer-nav">
				<div class="col-md-4 mb-4 mb-lg-0">
					<h4>Soapbox</h4>
					<ul>
						<li><a href="#">Challenges</a></li>
						<li><a href="#">Talent</a></li>
						<li><a href="#">Agency</a></li>
					</ul>
				</div>
				<div class="col-md-4 mb-4 mb-lg-0">
					<h4>About us</h4>
					<ul>
						<li><a href="#">Our offices</a></li>
						<li><a href="#">Our story</a></li>
					</ul>
				</div>
				<div class="col-md-4 mb-4 mb-lg-0">
					<h4>Legal information</h4>
					<ul>
						<li><a href="#">Terms & Conditions</a></li>
						<li><a href="#">Privacy statement</a></li>
					</ul>
				</div>
			</div>
		</div>
	</footer>
</body>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script type="module" src="https://cdn.jsdelivr.net/npm/@vime/core@^5/dist/vime/vime.esm.js"></script>
<script src="assets/js/main.js"></script>
</html>