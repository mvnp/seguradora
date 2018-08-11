<style>
textarea.form-control {height:100px}
textarea.entrada {height:75px!important}
</style>
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
							<div class="col-md-6">
								<h2 class="panel-title"><?=_t("Formulário de tradução de termos do sistema") ?></h2>
								<p class="panel-subtitle">
									<?=_t("Através deste formulário, você pode traduzir o sistema para diversos idiomas.") ?>
								</p>
							</div>
							<div class="col-md-2">
								<a href="<?php echo base_url("superadmin/traducoes/{$pages['anterior']}") ?>" class="btn btn-block btn-primary btn-header-success"><?=_t("Anterior") ?></a>
							</div>
							<div class="col-md-2">
								<a href="<?php echo base_url("superadmin/traducoes/{$pages['posterior']}") ?>" class="btn btn-block btn-success btn-header-success"><?=_t("Próximo") ?></a>
							</div>
							<div class="col-md-2">
								<button class="btn btn-block btn-danger btn-header-success"><?=_t("Salvar") ?></button>
							</div>
						</div>
					</header>
					<div class="panel-body">
						<!-- start form -->
						<?php echo $this->load->messages('incs/messages'); ?>
						<div class="form-group">
							<div class="col-sm-12">
								<label for="entrada" class="control-label"><?=_t("Entrada: ") ?><span class="required">*</span></label>
								<textarea name="entrada" id="entrada" cols="30" rows="10" class="form-control entrada" readonly required><?php echo $term->entrada ?></textarea>
							</div>
							<div class="col-sm-6">
								<label for="portuguese" class="control-label"><?=_t("Português: ") ?><span class="required">*</span></label>
								<textarea name="portuguese" id="portuguese" cols="30" rows="10" class="form-control"><?php echo $term->portuguese ?></textarea>
							</div>
							<div class="col-sm-6">
								<label for="spanish" class="control-label"><?=_t("Espanhol: ") ?><span class="required">*</span></label>
								<textarea name="spanish" id="spanish" cols="30" rows="10" class="form-control"><?php echo $term->spanish ?></textarea>
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-6">
								<label for="english" class="control-label"><?=_t("Inglês: ") ?><span class="required">*</span></label>
								<textarea name="english" id="english" cols="30" rows="10" class="form-control" required><?php echo $term->english ?></textarea>
							</div>
							<div class="col-sm-6">
								<label for="japanese" class="control-label"><?=_t("Japonês: ") ?><span class="required">*</span></label>
								<textarea name="japanese" id="japanese" cols="30" rows="10" class="form-control" required><?php echo $term->japanese ?></textarea>
							</div>
						</div>
					<!-- end form -->
					</div>		
					<footer class="panel-footer">
						<div class="row">
							<div class="col-sm-offset-3 col-sm-6">
								<input type="hidden" name="id" value="<?php echo $this->uri->segment(3) ?>" required />
								<!-- button class="btn btn-block btn-lg btn-success"><?//=_t("Salvar expressão") ?></button -->
							</div>
						</div>
					</footer>
				</section>
			</form>
		</div>
	</div>
</section>