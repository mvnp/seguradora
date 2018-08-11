<div class="inner-wrapper">
	<!-- start: sidebar -->
	<aside id="sidebar-left" class="sidebar-left">

		<div class="sidebar-header">
			<div class="sidebar-title">
				Navigation
			</div>
			<div class="sidebar-toggle hidden-xs" data-toggle-class="sidebar-left-collapsed" data-target="html" data-fire-event="sidebar-left-toggle">
				<i class="fa fa-bars" aria-label="Toggle sidebar"></i>
			</div>
		</div>
		<div class="nano">
			<div class="nano-content">
				<nav id="menu" class="nav-main" role="navigation">
					<ul class="nav nav-main">
						<li>
							<a href="<?php echo base_url("superadmin/listarempresas") ?>">
								<i class="fa fa-cogs" aria-hidden="true"></i>
								<?php echo _t("<span>Empresas</span>") ?>
							</a>
						</li>
						<li>
							<a href="<?php echo base_url("permissoes/listargrupos") ?>">
								<i class="fa fa-cogs" aria-hidden="true"></i>
								<?php echo _t("<span>Permissões</span>") ?>
							</a>
						</li>
						<li class="nav-parent">
							<a>
								<i class="fa fa-users" aria-hidden="true"></i>
								<?php echo _t("<span>Clientes</span>") ?>
							</a>
							<ul class="nav nav-children">
								<li>
									<a href="<?php echo base_url("administrativo/lista") ?>">
										 <?php echo _t("Gestão de Clientes") ?>
									</a>
								</li>
							</ul>
						</li>
						<li>
							<a href="<?php echo base_url("superadmin/traducoes/12") ?>">
								<i class="fa fa-cogs" aria-hidden="true"></i>
								<?php echo _t("<span>Traduções</span>") ?>
							</a>
						</li><hr>
						<li>
							<a href="<?php echo base_url("dashboard") ?>">
								<i class="fa fa-cogs" aria-hidden="true"></i>
								<?php echo _t("<span>Dashboard</span>") ?>
							</a>
						</li>
						<li class="nav-parent">
							<a>
								<i class="fa fa-users" aria-hidden="true"></i>
								<?php echo _t("<span>Clientes</span>") ?>
							</a>
							<ul class="nav nav-children">
								<li>
									<a href="<?php echo base_url("clientes/leads") ?>">
										<?php echo _t("Leads") ?>
									</a>
								</li>
								<li>
									<a href="<?php echo base_url("clientes/efetivos") ?>">
										<?php echo _t("Efetivos") ?>
									</a>
								</li>
								<li>
									<a href="<?php echo base_url("clientes/efetivos") ?>">
										<?php echo _t("Bloqueados") ?>
									</a>
								</li>
								<li>
									<a href="<?php echo base_url("clientes/gestao") ?>">
										<?php echo _t("Gestao de informações") ?>
									</a>
								</li>
							</ul>
						</li>
						<li class="nav-parent">
							<a>
								<i class="fa fa-users" aria-hidden="true"></i>
								<?php echo _t("<span>Financeiro</span>") ?>
							</a>
							<ul class="nav nav-children">
								<li>
									<a href="<?php echo base_url("financeiro/aguardando") ?>">
										<?php echo _t("Aguardando pagamento") ?>
									</a>
								</li>
								<li>
									<a href="<?php echo base_url("financeiro/aprovados") ?>">
										<?php echo _t("Pagamentos aprovados") ?>
									</a>
								</li>
								<li>
									<a href="<?php echo base_url("financeiro/vencendo") ?>">
										<?php echo _t("Vencimento próximo") ?>
									</a>
								</li>
							</ul>
						</li>
					</ul>
				</nav>
			</div>
			<script>
				// Maintain Scroll Position
				if (typeof localStorage !== 'undefined') {
					if (localStorage.getItem('sidebar-left-position') !== null) {
						var initialPosition = localStorage.getItem('sidebar-left-position'),
							sidebarLeft = document.querySelector('#sidebar-left .nano-content');
						
						sidebarLeft.scrollTop = initialPosition;
					}
				}
			</script>
		</div>
	</aside>
	<!-- end: sidebar -->