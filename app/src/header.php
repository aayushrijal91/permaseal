<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="icon" href="./assets/images/favicon.png" type="image/png">
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
</head>

<body>
	<header>
		<div class="header-top-bar py-3">
			<div class="container-fluid">
				<div class="row justify-content-center">
					<div class="col-12 col-lg-11">
						<div class="row justify-content-center justify-content-lg-between align-items-center">
							<div class="col-auto">
								<a href="./">
									<?= renderImg("logo.png", "logo") ?>
								</a>
							</div>
							<div class="col-3">
								<div class="row justify-content-center justify-content-lg-end no-gutters align-items-center">
									<div class="col-12 col-md-6">
										<a href="#form-quote" class="btn btn-block btn-primary rounded-0 text-white py-3 px-md-5">
											$0 CALL OUT FEE
										</a>
									</div>
									<div class="col-12 col-md-6">
										<a href="tel:<?= $phone_number ?>" class="btn btn-block bordered border-primary rounded-6 text-white p-3 d-flex align-items-center justify-content-center">
											<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
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
	</header>