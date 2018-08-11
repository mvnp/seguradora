<section role="main" class="content-body" style="padding-top:0">
	<!-- start: page -->
	<div class="row">
		<div class="col-md-12">
			<form id="form" action="<?php echo base_url("customers/cadastra") ?>" method="POST" class="form-horizontal form-bordered" enctype="multipart/form-data" autocomplete="off">
				<section class="panel">
					<header class="panel-heading">
						<div class="row">
							<div class="col-md-9">
								<h2 class="panel-title"><?php echo _t("Cadastro de clientes da frota") ?></h2>
								<p class="panel-subtitle">
									<?php echo _t("Todos os clientes da frota <strong class='text-danger'>exceto dependentes</strong> serão cadastrados através deste formulário."); ?>
								</p>
							</div>
							<div class="col-md-3">
								<a href="<?php echo base_url("administrativo/lista") ?>" class="myBtn btn btn-block btn-lg btn-success"><?php echo _t("Listar clientes") ?></a>
							</div>
						</div>
					</header>
					<div class="panel-body">
						<!-- start form -->
						<?php
							if($this->session->flashdata('success')){
								echo '<div class="form-group">';
									echo '<div class="col-md-12">';
										echo '<div class="alert alert-success" role="alert" style="margin-bottom:0">';
										  	echo $this->session->flashdata('success');
										echo '</div>';
									echo '</div>';
								echo '</div>';
							} else if ($this->session->flashdata('danger')){
								echo '<div class="form-group">';
									echo '<div class="col-md-12">';
										echo '<div class="alert alert-danger" role="alert" style="margin-bottom:0">';
										  	echo $this->session->flashdata('danger');
										echo '</div>';
									echo '</div>';
								echo '</div>';
							}
						?>
						<!-- dados pessoais -->
						<div class="form-group">
							<div class="col-md-12">
								<p class="text-success"><strong><?php echo _t("::: DADOS PESSOAIS :::") ?></strong></p>
							</div>
							<div class="col-sm-6">
								<label class="control-label"><?php echo _t("Digite nome: ") ?><span class="required">*</span></label>
								<input type="text" name="cli_nome" id="nome" value="<?php echo set_value("cli_nome") ?>" class="form-control" autocomplete="off" required />
							</div>
							<div class="col-sm-6">
								<label class="control-label"><?php echo _t("Digite sobrenome: ") ?><span class="required">*</span></label>
								<input type="text" name="cli_sobrenome" id="sobrenome" value="<?php echo set_value("cli_sobrenome") ?>" class="form-control" required />
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-8">
								<label class="control-label"><?php echo _t("Digite email: ") ?><span class="required">*</span></label>
								<input type="text" name="cli_email" id="email" value="<?php echo set_value("cli_email") ?>" class="form-control" required />
							</div>
							<div class="col-sm-4">
								<label class="control-label"><?php echo _t("Digite telefone: ") ?><span class="required">*</span></label>
								<input type="text" name="cli_telefone" id="telefone" value="<?php echo set_value("cli_telefone") ?>" class="form-control" required />
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-4">
								<label class="control-label"><?php echo _t("Selecione status: ") ?><span class="required">*</span></label>
								<select name="cli_status" id="status" class="form-control" required>
									<option value="">Selecione ..</option>
									<option value="0" <?php echo set_select("cli_status", 0) ?>>Habilitado</option>
									<option value="1" <?php echo set_select("cli_status", 1) ?>>Desabilitado</option>
								</select>
							</div>
							<div class="col-sm-4">
								<label class="control-label"><?php echo _t("Quantidade de usuários <strong class='text-danger'>incluso cliente</strong>: ") ?><span class="required">*</span></label>
								<select name="cli_dependente" id="dependente" class="form-control" required>
									<option value="">Selecione ..</option>
									<option value="1" <?php echo set_select("cli_dependente", 1) ?>>1</option>
									<option value="2" <?php echo set_select("cli_dependente", 2) ?>>2</option>
									<option value="3" <?php echo set_select("cli_dependente", 3) ?>>3</option>
								</select>
							</div>
							<div class="col-sm-4">
								<label class="control-label"><?php echo _t("Digite senha: ") ?><span class="required">*</span></label>
								<input type="text" name="cli_password" id="password" class="form-control" required value="<?php echo generateRandomString(8) ?>" />
							</div>
						</div>
						<!-- endereço completo pessoal -->
						<div class="form-group">
							<div class="col-md-12">
								<p class="text-success"><strong><?php echo _t("::: ENDEREÇO COMPLETO :::") ?></strong></p>
							</div>						
						</div>
						<div class="form-group hidden hide">
							<div class="col-sm-6">
								<label class="control-label"><?php echo _t("Digite latitude: ") ?><span class="required">*</span></label>
								<input type="text" name="end_latitude" id="latitude" value="<?php echo set_value("end_latitude") ?>" class="form-control" />
							</div>
							<div class="col-sm-6">
								<label class="control-label"><?php echo _t("Digite longitude: ") ?><span class="required">*</span></label>
								<input type="text" name="end_longitude" id="longitude" value="<?php echo set_value("end_logitude") ?>" class="form-control" />
							</div>
						</div>	
						<div class="form-group">
							<div class="col-sm-3">
								<label class="control-label"><?php echo _t("Digite cep: ") ?><span class="required">*</span></label>
								<input type="text" name="end_cep" id="zipcode" value="<?php echo set_value("end_cep") ?>" class="form-control" required />
							</div>
							<div class="col-sm-7">
								<label class="control-label"><?php echo _t("Digite rua: ") ?><span class="required">*</span></label>
								<input type="text" name="end_rua" id="rua" value="<?php echo set_value("end_rua") ?>" class="form-control" required />
							</div>
							<div class="col-sm-2">
								<label class="control-label"><?php echo _t("Digite número: ") ?><span class="required">*</span></label>
								<input type="text" name="end_numero" id="numero" value="<?php echo set_value("end_numero") ?>" class="form-control" required />
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-12">
								<label class="control-label"><?php echo _t("Digite complemento: ") ?><span class="required">*</span></label>
								<input type="text" name="end_complemento" id="complemento" value="<?php echo set_value("end_complemento") ?>" class="form-control" />
							</div>
						</div>					
						<div class="form-group">
							<div class="col-sm-4">
								<label class="control-label"><?php echo _t("Digite bairro: ") ?><span class="required">*</span></label>
								<input type="text" name="end_bairro" id="bairro" value="<?php echo set_value("end_bairro") ?>" class="form-control" required />
							</div>
							<div class="col-sm-4">
								<label class="control-label"><?php echo _t("Digite cidade: ") ?><span class="required">*</span></label>
								<input type="text" name="end_cidade" id="cidade" value="<?php echo set_value("end_cidade") ?>" class="form-control" required />
							</div>	
							<div class="col-sm-4">
								<label class="control-label"><?php echo _t("Digite estado: ") ?><span class="required">*</span></label>
								<input type="text" name="end_estado" id="estado" value="<?php echo set_value("end_estado") ?>" class="form-control" required />
								<input type="hidden" name="end_pais" id="pais" value="JP" class="form-control" required />
							</div>							
						</div>	
						<!-- dados da empresa que trabalha -->
						<div class="form-group">
							<div class="col-md-12">
								<p class="text-success"><strong><?php echo _t("::: DADOS PROFISSIONAIS <strong class='text-danger'>(NÃO OBRIGATÓRIO)</strong> :::") ?></strong></p>
							</div>						
						</div>	
						<div class="form-group">
							<div class="col-sm-9">
								<label class="control-label"><?php echo _t("Digite nome da empresa: ") ?><span class="required">*</span></label>
								<input type="text" name="cpy_nome" id="emp_nome" value="<?php echo set_value("cpy_nome") ?>" class="form-control" />
							</div>
							<div class="col-sm-3">
								<label class="control-label"><?php echo _t("Digite telefone: ") ?><span class="required">*</span></label>
								<input type="text" name="cpy_telefone" id="emp_telefone" value="<?php echo set_value("cpy_telefone") ?>" class="form-control" />
							</div>
						</div>		
						<div class="form-group">
							<div class="col-sm-3">
								<label class="control-label"><?php echo _t("Digite cep: ") ?><span class="required">*</span></label>
								<input type="text" name="cpy_cep" id="emp_cep" value="<?php echo set_value("cpy_cep") ?>" class="form-control" />
							</div>
							<div class="col-sm-7">
								<label class="control-label"><?php echo _t("Digite rua: ") ?><span class="required">*</span></label>
								<input type="text" name="cpy_rua" id="emp_rua" value="<?php echo set_value("cpy_rua") ?>" class="form-control" />
							</div>
							<div class="col-sm-2">
								<label class="control-label"><?php echo _t("Digite número: ") ?><span class="required">*</span></label>
								<input type="text" name="cpy_numero" id="emp_numero" value="<?php echo set_value("cpy_numero") ?>" class="form-control" />
							</div>
						</div>						
						<div class="form-group">
							<div class="col-sm-12">
								<label class="control-label"><?php echo _t("Digite complemento: ") ?><span class="required">*</span></label>
								<input type="text" name="cpy_complemento" id="emp_complemento" value="<?php echo set_value("cpy_complemento") ?>" class="form-control" />
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-4">
								<label class="control-label"><?php echo _t("Digite bairro: ") ?><span class="required">*</span></label>
								<input type="text" name="cpy_bairro" id="emp_bairro" value="<?php echo set_value("cpy_bairro") ?>" class="form-control" />
							</div>
							<div class="col-sm-4">
								<label class="control-label"><?php echo _t("Digite cidade: ") ?><span class="required">*</span></label>
								<input type="text" name="cpy_cidade" id="emp_cidade" value="<?php echo set_value("cpy_cidade") ?>" class="form-control" />
							</div>	
							<div class="col-sm-4">
								<label class="control-label"><?php echo _t("Digite estado: ") ?><span class="required">*</span></label>
								<input type="text" name="cpy_estado" id="emp_estado" value="<?php echo set_value("cpy_estado") ?>" class="form-control" />
							</div>							
						</div>					
					<!-- end form -->
					</div>
					<footer class="panel-footer">
						<div class="row">
							<div class="col-sm-offset-4 col-sm-2">
								<button class="btn btn-block btn-success">Cadastrar</button>
							</div>
							<div class="col-sm-2">
								<button type="reset" class="btn btn-block btn-default">Reset</button>
							</div>
						</div>
					</footer>
				</section>
			</form>
		</div>
	</div>
</section>