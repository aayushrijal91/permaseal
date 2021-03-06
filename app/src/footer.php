<footer>
	<div class="container">
		<div class="row justify-content-center justify-content-md-between align-items-center py-5 py-lg-5">
			<div class="col-auto">
				<div class="row no-gutters mb-3 mb-md-0 text-white justify-content-center h15">
					<div class="col-auto text-center">Copyright <?= date('Y') ?></div>
					<div class="col-auto px-2 px-md-4 px-xl-5">|</div>
					<div class="col-auto text-center"><?= $site ?></div>
					<div class="col-auto px-2 px-md-4 px-xl-5">|</div>
					<div class="col-auto text-center">All Rights Reserved</div>
				</div>
			</div>
			<div class="col-auto pt-4 pt-md-0">
				<div class="row no-gutters justify-content-center justify-content-lg-end align-items-center">
					<div class="col-auto footer-nav-li pl-lg-5">
						<a href="https://www.aiims.com.au/like-our-work/" target="_blank">
							<?= renderImg("aiims.png", "logo") ?>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</footer>
<a href="javascript:" id="return-to-top">
	<div class="d-flex justify-content-center align-items-center h-100 w-100">
		<svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-arrow-up" viewBox="0 0 16 16">
			<path fill-rule="evenodd" d="M8 15a.5.5 0 0 0 .5-.5V2.707l3.146 3.147a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 1 0 .708.708L7.5 2.707V14.5a.5.5 0 0 0 .5.5z" />
		</svg>
	</div>
</a>
<script type="text/javascript" src="./assets/js/cocoen.js?v=0.3"></script>
<script type="text/javascript" src="./assets/js/app.js?v=0.4"></script>
</body>

</html>