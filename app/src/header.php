<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="icon" href="./assets/images/favicon.jpg" type="image/png">
	<title><?= $site ?></title>
	<link rel="stylesheet" href="./assets/css/main.css?v=0.1">

	<!-- Recaptcha Here -->
	<script src="https://www.google.com/recaptcha/api.js?render=<?= $recaptcha_client_secret ?>"></script>
	<script>
		grecaptcha.ready(function() {
			grecaptcha.execute('<?= $recaptcha_client_secret ?>', {
				action: 'contact'
			}).then(function(token) {
				document.getElementById('recaptchaResponse').value = token;
			});
		});
	</script>

	<!-- Google Tag Manager -->
	<script>
		(function(w, d, s, l, i) {
			w[l] = w[l] || [];
			w[l].push({
				'gtm.start': new Date().getTime(),
				event: 'gtm.js'
			});
			var f = d.getElementsByTagName(s)[0],
				j = d.createElement(s),
				dl = l != 'dataLayer' ? '&l=' + l : '';
			j.async = true;
			j.src = 'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
			f.parentNode.insertBefore(j, f);
		})(window, document, 'script', 'dataLayer', 'GTM-NJ6B7BZ');
	</script>
	<!-- End Google Tag Manager -->

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-47679308-84"></script>

	<script>
		window.dataLayer = window.dataLayer || [];

		function gtag() {
			dataLayer.push(arguments);
		}

		gtag('js', new Date());
		gtag('config', 'AW-10910713044');
		gtag('config', 'UA-47679308-84');
	</script>

	<!-- Global site tag (gtag.js) - Google Ads -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=AW-10910713044"></script>

	<script>
		window.dataLayer = window.dataLayer || [];

		function gtag() {
			dataLayer.push(arguments);
		}

		gtag('js', new Date());
		gtag('config', 'AW-10910713044');
	</script>
</head>

<body>
	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NJ6B7BZ" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->

	<header>
		<div class="header-top-bar">
			<div class="container-fluid">
				<div class="row justify-content-center">
					<div class="col-12 col-xxl-11">
						<div class="row justify-content-center justify-content-lg-between align-items-center">
							<div class="col-5 col-md-auto col-xl-2 col-xxl-auto pb-4 pb-md-0">
								<a href="./">
									<?= renderImg("logo.png", "logo", "w-100") ?>
								</a>
							</div>
							<div class="col-12 col-md">
								<div class="row no-gutters align-items-center justify-content-between">
									<div class="col col-md-auto col-lg-9 col-xl col-xxl-auto letter-spacing-1 text-primary h11 px-md-4 py-2 py-xl-0 text-center">
										<span class="fw-800 text-white">Get Hassle Free Service</span> Specialising In Leaking Showers &amp; Balconies
									</div>
									<div class="col-auto col-md-6 col-lg-auto py-2 py-xl-0">
										<a href="https://www.facebook.com/permaseals" class="btn text-primary px-3 d-flex justify-content-center" target="_blank">
											<?= renderImg("facebook.png", "icons") ?>
										</a>
									</div>
									<div class="col-auto col-md-6 col-lg-auto py-2 py-xl-0">
										<a href="https://www.instagram.com/permaseals/?hl=en" class="btn text-primary px-3 d-flex justify-content-center" target="_blank">
											<svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
												<path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
											</svg>
										</a>
									</div>
									<div class="col-6 col-xl-auto py-2 py-xl-0">
										<a href="#form-quote" class="btn btn-block rounded-0 text-white py-3 px-md-2 px-lg-3 px-xl-5 h7 fw-800">
											$0 CALL OUT FEE
										</a>
									</div>
									<div class="col-6 col-xl-auto py-2 py-xl-0">
										<a href="tel:<?= $phone_number ?>" class="btn btn-block bordered">
											<svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
												<path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
											</svg>
											<div class="pl-3"><?= $phone_number ?></div>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="banner">
			<div class="container">
				<div class="row">
					<div class="col-xl-7 col-xxl-6">
						<div class="text-white h1 fw-800 line-height-3 pb-3">Regrout<br class="d-none d-lg-block"> Your Doubt!</div>
						<div class="fw-500 h4 text-primary py-3 pt-md-4 pr-md-5">Putting off leaking shower repairs for too long can lead to a number of problems in your home.</div>
						<div class="row no-gutters pt-4 pt-md-5">
							<div class="col-6 col-md-4 col-xl-5 pr-1 pr-md-2 pr-xl-4">
								<a href="#form" class="btn btn-block bordered">
									Find Out More
								</a>
							</div>
							<div class="col-6 col-md-4 col-xl-5 pl-1 pl-md-2 pl-xl-4">
								<a href="#form" class="btn btn-block block-button">
									Book now
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="banner-bottom">
			<div class="container-fluid px-0">
				<div class="row no-gutters align-items-end">
					<div class="col-12 col-lg-3">
						<div class="pb-2"><?= renderImg("pensioners.png", "lib", "w-100") ?></div>
						<div class="text-center text-primary text-uppercase h9 fw-900 line-height-1 pt-4">10% Pensioners Discount</div>
					</div>
					<div class="col px-3 px-md-4 px-xl-5 pt-5 pt-lg-0">
						<div class="text-white fw-700 h9 text-uppercase pb-md-1">Don't Regret it, Regrout it!</div>
						<div class="row no-gutters pt-3 pt-md-4">
							<div class="col-12 col-md-7 text-white fw-500 h13 pr-3">
								<p>One of the greatest myths in our industry is that <span class="text-primary fw-800">the cause of a leaking shower is a plumbing or waterproofing issue,</span> such as leaking taps/shower heads or even a burst pipe.</p>
								<p>Most of the time this is actually not the case when it comes to a leaking shower.</p>
							</div>
							<div class="col-12 col-md-5 col-xxl-4 text-white fw-500 h13 px-md-3">
								<p>Most leaks are caused from the breakdown of grout and can usually be repairs without having to call a plumber or remove any tiles.</p>
							</div>
						</div>
					</div>
					<div class="col-12 col-lg-3"><?= renderImg("house.png", "lib", "w-100") ?></div>
				</div>
			</div>
		</div>
	</header>