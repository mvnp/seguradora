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
								<h2 class="panel-title"><?=_t("Configurações da conta do usuário") ?></h2>
								<p class="panel-subtitle">
									<?=_t("Algumas configurações do usuário do sistema como informações de e-mail, recursos do sistema.") ?>
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
								<label for="smtp_from_name" class="control-label"><?=_t("Remetente nome: ") ?><span class="required">*</span></label>
								<input type="text" name="smtp_from_name" class="form-control" title="<?=_t("Campo obrigatório.") ?>" value="<?php echo ((isset($info->smtp_from_name)) ? $info->smtp_from_name : set_value('smtp_from_name')); ?>" required />
							</div>
							<div class="col-sm-6">
								<label for="smtp_from_email" class="control-label"><?=_t("Remetente e-mail: ") ?><span class="required">*</span></label>
								<input type="text" name="smtp_from_email" class="form-control" title="<?=_t("Campo obrigatório.") ?>" value="<?php echo ((isset($info->smtp_from_email)) ? $info->smtp_from_email : set_value('smtp_from_email')); ?>" required />
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-12">
								<label for="smtp_reply" class="control-label"><?=_t("Responder para: ") ?><span class="required">*</span></label>
								<input type="text" name="smtp_reply" class="form-control" title="<?=_t("Campo obrigatório.") ?>" value="<?php echo ((isset($info->smtp_reply)) ? $info->smtp_reply : set_value('smtp_reply')); ?>" required />
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-6">
								<label for="smtp_host" class="control-label"><?=_t("Hostname SMTP: ") ?><span class="required">*</span></label>
								<input type="text" name="smtp_host" class="form-control" title="<?=_t("Campo obrigatório.") ?>" value="<?php echo ((isset($info->smtp_host)) ? $info->smtp_host : set_value('smtp_host')); ?>" required />
							</div>
							<div class="col-sm-6">
								<label for="smtp_user" class="control-label"><?=_t("Usuário SMTP: ") ?><span class="required">*</span></label>
								<input type="text" name="smtp_user" class="form-control" title="<?=_t("Campo obrigatório.") ?>" value="<?php echo ((isset($info->smtp_user)) ? $info->smtp_user : set_value('smtp_user')); ?>" required />
							</div>
						</div>
						<div class="form-group">
							<div>
								<div class="col-sm-6">
									<label for="smtp_email" class="control-label"><?=_t("Mail SMTP: ") ?><span class="required">*</span></label>
									<input type="text" name="smtp_email" class="form-control" title="<?=_t("Campo obrigatório.") ?>" value="<?php echo ((isset($info->smtp_email)) ? $info->smtp_email : set_value('smtp_email')); ?>" required />
								</div>
								<div class="col-sm-3">
									<label for="stmp_senha" class="control-label"><?=_t("Senha SMTP: ") ?><span class="required">*</span></label>
									<input type="password" name="stmp_senha" class="form-control" title="<?=_t("Campo obrigatório.") ?>" value="<?php echo (($ver == 1) ? "" : set_value('stmp_senha')); ?>" placeholder="<?php echo (($ver == 1) ? "Reinsira a senha ..." : ""); ?>" required />
								</div>
								<div class="col-sm-3">
									<label for="stmp_csenha" class="control-label"><?=_t("Confirmar senha SMTP: ") ?><span class="required">*</span></label>
									<input type="password" name="stmp_csenha" class="form-control" title="<?=_t("Campo obrigatório.") ?>" value="<?php echo (($ver == 1) ? "" : set_value('stmp_senha')); ?>" placeholder="<?php echo (($ver == 1) ? "Reinsira a senha ..." : ""); ?>" required />
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-6">
								<label for="smtp_port" class="control-label"><?=_t("Porta SMTP: ") ?><span class="required">*</span></label>
								<input type="text" name="smtp_port" class="form-control" title="<?=_t("Campo obrigatório.") ?>" value="<?php echo ((isset($info->smtp_port)) ? $info->smtp_port : set_value('smtp_port')); ?>" required />
							</div>
							<div class="col-sm-6">
								<label for="smtp_secure" class="control-label"><?=_t("Tipo de criptografia (SSL, TLS): ") ?><span class="required">*</span></label>
								<input type="text" name="smtp_secure" class="form-control" title="<?=_t("Campo obrigatório.") ?>" value="<?php echo ((isset($info->smtp_secure)) ? $info->smtp_secure : set_value('smtp_secure')); ?>" required />
							</div>
						</div>
						<!-- end form -->
					</div>
					<footer class="panel-footer">
						<div class="row">
							<div class="col-sm-offset-3 col-sm-3">
								<button class="btn btn-block btn-success"><?php echo (($ver == 1) ? _t("Editar") : _t("Cadastrar"))  ?></button>
							</div>
							<div class="col-sm-3">
								<a href="<?php echo base_url("superadmin/listarempresas") ?>" class="btn btn-block btn-danger">
									<?=_t("Listar empresas") ?>
								</a>
							</div>
						</div>
					</footer>
				</section>
			</form>
		</div>
	</div>
</section>