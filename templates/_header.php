<!DOCTYPE html>
<html>
	<head
		<meta charset="UTF-8">
		<meta name="description" content="Hailing from the acclaimed Studio 1612, the Form Salon team is excited to bring their energy and talent to the Towson area. With over 100 years of combined experience, our team strives to create wearable looks for every client.">
		<!-- <meta name="author" content="Mike Riley"> -->
		<meta name="viewport" content="width=device-width,initial-scale=1.0">
		<meta property="og:title" content="Form Salon - Towson, MD" />
		<meta property="og:description" content="Hailing from the acclaimed Studio 1612, the Form Salon team is excited to bring their energy and talent to the Towson area. With over 100 years of combined experience, our team strives to create wearable looks for every client." />
		<meta property="og:type" content="website" />
		<meta property="og:url" content="http://www.formsalontowson.com" />
		<meta property="og:image" content="http://formsalontowson.com/assets/images/form-salon-logo.svg" />

		<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
		<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
		<link rel="manifest" href="/manifest.json">
		<link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
		<meta name="theme-color" content="#ffffff">

		<title>Form Salon - Towson, MD</title>

		<link href='http://fonts.googleapis.com/css?family=Domine:400,700|Open+Sans:800' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="<?php echo $www_root ?>assets/css/main.min.css?bust=127" />

		<!--[if lt IE 9]>
		<link rel="stylesheet" href="<?php echo $www_root ?>assets/css/fs.gridlock-ie.css">
		<style>
			nav li { margin-right: 3.4em; }
			nav li.dropdown ul.stylists { width: 210px; }
			nav li.dropdown ul.stylists li { width: 100%; text-align: left; }
		</style>
		<script src="http://html5shiv-printshiv.googlecode.com/svn/trunk/html5shiv-printshiv.js"></script>
		<![endif]-->
	</head>

	<body class="gridlock <?php if ( $thisPage == 'home' ) { echo "home-page"; } ?>">
		<div class="row">
			<header class="max-9 desktop-9 tablet-6 centered contained">
				<div class="logo">
					<a href="<?php echo $www_root ?>"><img src="assets/images/form-salon-logo.svg" onerror="this.src='<?php echo $www_root ?>assets/images/form-salon-logo.png'; this.onerror=null;" alt="Form Salon logo"></a>
				</div>
				<nav class="nav-collapse max-12 tablet-6 mobile-3 contained centered">
					<ul>
						<li><a <?php if ($thisPage=="about") echo "class=\"active-page\""; ?> href="<?php echo $www_root ?>about">About</a></li>
						<li class="dropdown"><a <?php if ($thisPage=="stylists") echo "class=\"active-page\""; ?> href="<?php echo $www_root ?>stylists">Stylists</a>
							<ul class="stylists">
								<li><a <?php if ($thisPage=="stylists") echo "class=\"active-page\""; ?> href="<?php echo $www_root ?>stylists-monica-autenzio">Monica Autenzio</a></li>
								<li><a <?php if ($thisPage=="stylists") echo "class=\"active-page\""; ?> href="<?php echo $www_root ?>stylists-caroline-delauder">Caroline DeLauder</a></li>
								<li><a <?php if ($thisPage=="stylists") echo "class=\"active-page\""; ?> href="<?php echo $www_root ?>stylists-becky-derti">Becky Derti</a></li>
								<li><a <?php if ($thisPage=="stylists") echo "class=\"active-page\""; ?> href="<?php echo $www_root ?>stylists-courtney-duncan">Courtney Duncan</a></li>
								<li><a <?php if ($thisPage=="stylists") echo "class=\"active-page\""; ?> href="<?php echo $www_root ?>stylists-lindsey-campbell">Lindsey Campbell</a></li>
								<li><a <?php if ($thisPage=="stylists") echo "class=\"active-page\""; ?> href="<?php echo $www_root ?>stylists-lauren-leone">Lauren Leone</a></li>
								<li><a <?php if ($thisPage=="stylists") echo "class=\"active-page\""; ?> href="<?php echo $www_root ?>stylists-rhonda-murtaugh">Rhonda Murtaugh</a></li>
								<li><a <?php if ($thisPage=="stylists") echo "class=\"active-page\""; ?> href="<?php echo $www_root ?>stylists-judy-weidel">Judy Weidel</a></li>
								<li><a <?php if ($thisPage=="stylists") echo "class=\"active-page\""; ?> href="<?php echo $www_root ?>stylists-harmony-zattau">Harmony Zattau</a></li>
							</ul>
						</li>
						<li><a <?php if ($thisPage=="services") echo "class=\"active-page\""; ?> href="<?php echo $www_root ?>services">Services</a></li>
						<li><a <?php if ($thisPage=="hours") echo "class=\"active-page\""; ?> href="<?php echo $www_root ?>hours-and-location">Hours &amp; Location</a></li>
						<li><a <?php if ($thisPage=="contact") echo "class=\"active-page\""; ?> href="<?php echo $www_root ?>contact">Contact Us</a></li>
					</ul>
				</nav>
			</header>
		</div>