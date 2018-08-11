<div class="body">
	<header id="header" class="header-narrow" data-plugin-options="{'stickyEnabled': true, 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyStartAt': 57, 'stickySetTop': '-55px', 'stickyChangeLogo': false}">
		<div class="header-body">
			<div class="header-top header-top-style-4">
				<div class="container">
					<div class="header-row pb-1">
						<div class="header-column justify-content-end">
							<div class="header-row">
								<p>
									<span class="mr-1">
										<i class="icon-call-end icons mr-1"></i> 053-456-7890</span><span class="d-none d-sm-block">
									</span>
								</p>
								<div class="header-search d-none d-md-block">
									<form id="searchForm" action="page-search-results.html" method="get">
										<div class="input-group">
											<input type="text" class="form-control" name="q" id="q" placeholder="Search..." required>
											<span class="input-group-append">
												<button class="btn btn-light" type="submit"><i class="fas fa-search"></i></button>
											</span>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="header-container container">
				<div class="header-row">
					<div class="header-column">
						<div class="header-row">
							<div class="header-logo">
								<a href="<?php echo base_url() ?>">
									<img alt="Porto" width="100" height="48" src="<?php echo base_url() ?>assets/images/shelps.png">
								</a>
							</div>
						</div>
					</div>
					<div class="header-column justify-content-end">
						<div class="header-row">
							<div class="header-nav">
								<div class="header-nav-main header-nav-main-effect-1 header-nav-main-sub-effect-1">
									<nav class="collapse">
										<ul class="nav nav-pills" id="mainNav">
											<li>
												<a class="ununderline <?php echo ((getAddress("site/index") == true) ? "active": "") ?>" href="<?php echo base_url() ?>">
													<?php echo _t("Início") ?>
												</a>
											</li>
											<li>
												<a class="ununderline <?php echo ((getAddress("site/quemsomos") == true) ? "active": "") ?>" href="<?php echo base_url("site/quemsomos") ?>">
													<?php echo _t("A empresa") ?>
												</a>
											</li>
											<li>
												<a class="ununderline <?php echo ((getAddress("site/faqs") == true) ? "active": "") ?>" href="<?php echo base_url("site/faqs") ?>">
													<?php echo _t("Perguntas e respostas") ?>
												</a>
											</li>
											<li>
												<a class="ununderline <?php echo ((getAddress("site/contratar") == true) ? "active": "") ?>" href="<?php echo base_url("site/contratar") ?>">
													<?php echo _t("Contratar") ?>
												</a>
											</li>
											<li>
												<a class="ununderline <?php echo ((getAddress("login/index") == true) ? "active": "") ?>" href="<?php echo base_url("login") ?>">
													<?php echo _t("Minha conta") ?>
												</a>
											</li>
											<li>
												<a class="ununderline <?php echo ((getAddress("site/sos") == true) ? "active": "") ?>" href="<?php echo base_url("site/sos") ?>">
													<?php echo _t("SOS") ?>
												</a>
											</li>
											<li>
												<a class="ununderline <?php echo ((getAddress("site/contato") == true) ? "active": "") ?>" href="<?php echo base_url("site/contato") ?>">
													<?php echo _t("Fale conosco") ?>
												</a>
											</li>
										</ul>
									</nav>
								</div>
								<button class="btn header-btn-collapse-nav" data-toggle="collapse" data-target=".header-nav-main nav">
									<i class="fas fa-bars"></i>
								</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
	<div role="main" class="main">