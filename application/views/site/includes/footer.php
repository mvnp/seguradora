			<footer id="footer" class="color color-secondary" style="margin-top:0!important">
				<div class="container">
					<div class="row">
						<div class="footer-ribbon" style="z-index:9999">
							<span><?php echo _t("Acesse rapidamente") ?></span>
						</div>
						<div class="col-lg-3">
							<div class="newsletter">
								<h4><?php echo _t("Newsletter") ?></h4>
								<p><?php echo _t("Fique por dentro de tudo que acontece na Shelps e não perca nenhuma novidade e mudanças nos seus serviços e produtos.") ?></p>
			
								<div class="alert alert-success d-none" id="newsletterSuccess">
									<strong>Success!</strong> You've been added to our email list.
								</div>
			
								<div class="alert alert-danger d-none" id="newsletterError"></div>
			
								<form id="newsletterForm" action="php/newsletter-subscribe.php" method="POST">
									<div class="input-group">
										<input class="form-control form-control-sm" placeholder="<?php echo _t("Seu e-mail") ?>" name="newsletterEmail" id="newsletterEmail" type="text">
										<span class="input-group-append">
											<button class="btn btn-light" type="submit"><?php echo _t("Cadastrar") ?></button>
										</span>
									</div>
								</form>
							</div>
						</div>
						<div class="col-lg-3">
							<h4><?php echo _t("Últimas notícias") ?></h4>
							<div id="tweet" class="twitter" data-plugin-tweets data-plugin-options="{'username': '', 'count': 2}">
								<p><?php echo _t("Aguarde...") ?></p>
							</div>
						</div>
						<div class="col-lg-3">
							<div class="contact-details">
								<h4><?php echo _t("Entre em contato") ?></h4>
								<ul class="contact">
									<li><p><i class="fas fa-map-marker-alt"></i> <strong><?php echo _t("Endereço: ") ?></strong> 1234 Street Name, City Name, United States</p></li>
									<li><p><i class="fas fa-phone"></i> <strong><?php echo _t("Phone: ") ?></strong> 053-456-7890</p></li>
									<li><p><i class="far fa-envelope"></i> <strong><?php echo _t("E-mail: ") ?></strong> <a href="mailto:mail@example.com">info@shelps.jp</a></p></li>
								</ul>
							</div>
						</div>
						<div class="col-lg-3">
							<h4><?php echo _t("Siga nas redes sociais") ?></h4>
							<ul class="social-icons">
								<li class="social-icons-facebook"><a href="http://www.facebook.com/" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
								<li class="social-icons-twitter"><a href="http://www.twitter.com/" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a></li>
								<li class="social-icons-linkedin"><a href="http://www.linkedin.com/" target="_blank" title="Linkedin"><i class="fab fa-linkedin-in"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="footer-copyright">
					<div class="container">
						<div class="row">
							<div class="col-lg-1">
								<a href="index.html" class="logo">
									<img alt="Porto Website Template" class="img-fluid" src="<?php echo base_url() ?>assets/images/shelps.png">
								</a>
							</div>
							<div class="col-lg-7">
								<p>© Copyright 2018. Shelps Todos os Direitos Reservados.</p>
							</div>
							<div class="col-lg-4">
								<nav id="sub-menu">
									<ul>
										<li><a href="<?php echo base_url("site/faqs") ?>">FAQ's</a></li>
										<li><a href="<?php echo base_url("login") ?>">Minha conta</a></li>
										<li><a href="<?php echo base_url("site/contato") ?>">Fale conosco</a></li>
									</ul>
								</nav>
							</div>
						</div>
					</div>
				</div>
			</footer>
		</div>
		<!-- Vendor -->
		<script src="<?php echo base_url() ?>assets/frontend/vendor/jquery/jquery.min.js"></script>
		<script src="<?php echo base_url() ?>assets/frontend/vendor/jquery.appear/jquery.appear.min.js"></script>
		<script src="<?php echo base_url() ?>assets/frontend/vendor/jquery.easing/jquery.easing.min.js"></script>
		<script src="<?php echo base_url() ?>assets/frontend/vendor/jquery-cookie/jquery-cookie.min.js"></script>
		<script src="<?php echo base_url() ?>assets/frontend/vendor/popper/umd/popper.min.js"></script>
		<script src="<?php echo base_url() ?>assets/frontend/vendor/bootstrap/js/bootstrap.min.js"></script>
		<script src="<?php echo base_url() ?>assets/frontend/vendor/common/common.min.js"></script>
		<script src="<?php echo base_url() ?>assets/frontend/vendor/jquery.validation/jquery.validation.min.js"></script>
		<script src="<?php echo base_url() ?>assets/frontend/vendor/jquery.easy-pie-chart/jquery.easy-pie-chart.min.js"></script>
		<script src="<?php echo base_url() ?>assets/frontend/vendor/jquery.gmap/jquery.gmap.min.js"></script>
		<script src="<?php echo base_url() ?>assets/frontend/vendor/jquery.lazyload/jquery.lazyload.min.js"></script>
		<script src="<?php echo base_url() ?>assets/frontend/vendor/isotope/jquery.isotope.min.js"></script>
		<script src="<?php echo base_url() ?>assets/frontend/vendor/owl.carousel/owl.carousel.min.js"></script>
		<script src="<?php echo base_url() ?>assets/frontend/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
		<script src="<?php echo base_url() ?>assets/frontend/vendor/vide/vide.min.js"></script>
		
		<!-- Theme Base, Components and Settings -->
		<script src="<?php echo base_url() ?>assets/frontend/js/theme.js"></script>
		
		<!-- Current Page Vendor and Views -->
		<script src="<?php echo base_url() ?>assets/frontend/vendor/rs-plugin/js/jquery.themepunch.tools.min.js"></script>		
		<script src="<?php echo base_url() ?>assets/frontend/vendor/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
		
		<!-- Theme Custom -->
		<script src="<?php echo base_url() ?>assets/frontend/js/custom.js"></script>
		
		<!-- Theme Initialization Files -->
		<script src="<?php echo base_url() ?>assets/frontend/js/theme.init.js"></script>

		<!-- Theme Initialization Files -->
		<script src="<?php echo base_url() ?>assets/frontend/vendor/jquery.gmap/jquery.gmap.min.js"></script>
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDtHUvINvqlmn395lklC4YRMWw47J1jVSc"></script>
		<script>
			/*
			Map Settings

				Find the Latitude and Longitude of your address:
					- http://universimmedia.pagesperso-orange.fr/geo/loc.htm
					- http://www.findlatitudeandlongitude.com/find-address-from-latitude-and-longitude/

			*/
			// Map Markers
			var mapMarkers = [{
				address: "New York, NY 10017",
				html: "<strong>New York Office</strong><br>New York, NY 10017",
				icon: {
					image: "img/pin.png",
					iconsize: [26, 46],
					iconanchor: [12, 46]
				},
				popup: true
			}];

			// Map Initial Location
			var initLatitude = 40.75198;
			var initLongitude = -73.96978;

			// Map Extended Settings
			var mapSettings = {
				controls: {
					draggable: (($.browser.mobile) ? false : true),
					panControl: true,
					zoomControl: true,
					mapTypeControl: true,
					scaleControl: true,
					streetViewControl: true,
					overviewMapControl: true
				},
				scrollwheel: false,
				markers: mapMarkers,
				latitude: initLatitude,
				longitude: initLongitude,
				zoom: 16
			};

			var map = $('#googlemaps').gMap(mapSettings);

			// Map text-center At
			var mapCenterAt = function(options, e) {
				e.preventDefault();
				$('#googlemaps').gMap("centerAt", options);
			}
		</script>
		<!-- Google Analytics: Change UA-XXXXX-X to be your site's ID. Go to http://www.google.com/analytics/ for more information.
		<script>
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		
			ga('create', 'UA-12345678-1', 'auto');
			ga('send', 'pageview');
		</script>
		 -->
	</body>
</html>