<section role="main" class="content-body" style="padding-top:0">
	<!-- start: page -->
	<div class="row">
		<div class="col-md-12">
			<form id="form" action="<?php echo base_url(uri_string()) ?>" method="POST" enctype="application/x-www-form-urlencoded" class="form-horizontal" autocomplete="off">
				<section class="panel">
					<header class="panel-heading">
						<div class="panel-actions">
							<!-- a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a -->
							<!-- a href="#" class="panel-action panel-action-dismiss" data-panel-dismiss></a -->
						</div>
						<div class="row">
							<div class="col-md-9">	
								<h2 class="panel-title"><?=_t("Formulário de cadastro de empresas") ?></h2>
								<p class="panel-subtitle">
									<?=_t("O cadastro inicial para que a empresa possa ultizar o sistema é feito neste formulário.") ?>
								</p>
							</div>
							<div class="col-md-3">
								<a href="<?php echo base_url("superadmin/listarempresas") ?>" class="btn btn-block btn-success btn-header-success"><?=_t("Listar empresas") ?></a>
							</div>
						</div>
					</header>
					<div class="panel-body">
						<!-- start form -->
						<?php echo $this->load->messages('incs/messages'); ?>
						<div class="form-group">
							<div class="col-sm-6">
								<label for="email" class="control-label"><?=_t("E-mail: ") ?><span class="required">*</span></label>
								<input type="text" name="email" class="form-control" title="<?=_t("Campo obrigatório.") ?>" value="<?php echo set_value('email'); ?>" required />
							</div>
							<div class="col-sm-3">
								<label for="senha" class="control-label"><?=_t("Senha: ") ?><span class="required">*</span></label>
								<input type="password" name="senha" class="form-control" title="<?=_t("Campo obrigatório.") ?>" value="<?php echo set_value('senha'); ?>" required />
							</div>
							<div class="col-sm-3">
								<label for="contrasenha" class="control-label"><?=_t("Confirmar senha: ") ?> <span class="required">*</span></label>
								<input type="password" name="contrasenha" class="form-control" title="<?=_t("Campo obrigatório.") ?>" value="<?php echo set_value('contrasenha'); ?>" required />
							</div>
						</div>
					<!-- end form -->
					</div>		
					<footer class="panel-footer">
						<div class="row">
							<div class="col-sm-offset-3 col-sm-3">
								<button class="btn btn-block btn-success"><?=_t("Cadastrar") ?></button>
							</div>
							<div class="col-sm-3">
								<a href="<?php echo base_url("superadmin/listarempresas") ?>" class="btn btn-block btn-danger"><?=_t("Listar empresas") ?></a>
							</div>
						</div>
					</footer>
				</section>
			</form>
		</div>
	</div>
</section>