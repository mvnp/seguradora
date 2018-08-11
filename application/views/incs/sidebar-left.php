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
								<span>Empresas</span>
							</a>
						</li>
						<li>
							<a href="<?php echo base_url("permissoes/listargrupos") ?>">
								<i class="fa fa-cogs" aria-hidden="true"></i>
								<span>Permissões</span>
							</a>
						</li>
						<li class="nav-parent">
							<a>
								<i class="fa fa-users" aria-hidden="true"></i>
								<span>Clientes</span>
							</a>
							<ul class="nav nav-children">
								<li>
									<a href="<?php echo base_url("administrativo/lista") ?>">
										 Gestão de Clientes
									</a>
								</li>
							</ul>
						</li>
						<li>
							<a href="<?php echo base_url("superadmin/traducoes/12") ?>">
								<i class="fa fa-cogs" aria-hidden="true"></i>
								<span>Traduções</span>
							</a>
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