<section role="main" class="content-body" style="padding-top:0">
	<!-- start: page -->
	<div class="row">
		<div class="col-md-12">
			<form class="form-horizontal form-bordered">
				<section class="panel">
					<header class="panel-heading">
						<div class="row">
							<div class="col-md-9">
								<h2 class="panel-title"><?php echo _t("Consulta de clientes da frota") ?></h2>
								<p class="panel-subtitle">
									<?php echo _t("Todos os clientes da frota poderão ser consultados através deste formulário."); ?>
								</p>
							</div>
							<div class="col-md-3">
								<?php $id = $this->uri->segment(3) ?>
								<a href="<?php echo base_url("administrativo/edita/{$id}") ?>" class="myBtn btn btn-block btn-lg btn-success"><?php echo _t("Editar cliente") ?></a>
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
								<input type="text" name="cli[cli_nome]" id="nome" value="<?php echo ((!set_value("cli_nome")) ? $cust->cli_nome : set_value("cli_nome")) ?>" class="form-control" autocomplete="off" readonly />
							</div>
							<div class="col-sm-6">
								<label class="control-label"><?php echo _t("Digite sobrenome: ") ?><span class="required">*</span></label>
								<input type="text" name="cli[cli_sobrenome]" id="sobrenome" value="<?php echo ((!set_value("cli_sobrenome")) ? $cust->cli_sobrenome : set_value("cli_sobrenome")) ?>" class="form-control" readonly />
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-8">
								<label class="control-label"><?php echo _t("Digite email: ") ?><span class="required">*</span></label>
								<input type="text" name="cli[cli_email]" id="email" value="<?php echo ((!set_value("cli_email")) ? $cust->cli_email : set_value("cli_email")) ?>" class="form-control" readonly />
							</div>
							<div class="col-sm-4">
								<label class="control-label"><?php echo _t("Digite telefone: ") ?><span class="required">*</span></label>
								<input type="text" name="cli[cli_telefone]" id="telefone" value="<?php echo ((!set_value("cli_telefone")) ? $cust->cli_telefone : set_value("cli_telefone")) ?>" class="form-control" readonly />
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-4">
								<label class="control-label"><?php echo _t("Selecione status: ") ?><span class="required">*</span></label>
								<select name="cli[cli_status]" id="status" class="form-control" readonly>
									<option value="">Selecione ..</option>
									<option value="0" <?php echo ((!set_value("cli_status")) ? (($cust->cli_status == 0) ? "selected" : "") : ((set_value("cli_status") == 0)) ? "selected": "") ?>>Habilitado</option>
									<option value="1" <?php echo ((!set_value("cli_status")) ? (($cust->cli_status == 1) ? "selected" : "") : ((set_value("cli_status") == 1)) ? "selected": "") ?>>Desabilitado</option>
								</select>
							</div>
							<div class="col-sm-4">
								<label class="control-label"><?php echo _t("Quantidade de usuários <strong class='text-danger'>incluso cliente</strong>: ") ?><span class="required">*</span></label>
								<select name="cli[cli_dependente]" id="dependente" class="form-control" readonly>
									<option value="">Selecione ..</option>
									<option value="1" <?php echo ((!set_value("cli_dependente")) ? (($cust->cli_dependente == 1) ? "selected" : "") : ((set_value("cli_dependente") == 1)) ? "selected": "") ?>>1</option>
									<option value="2" <?php echo ((!set_value("cli_dependente")) ? (($cust->cli_dependente == 2) ? "selected" : "") : ((set_value("cli_dependente") == 2)) ? "selected": "") ?>>2</option>
									<option value="3" <?php echo ((!set_value("cli_dependente")) ? (($cust->cli_dependente == 3) ? "selected" : "") : ((set_value("cli_dependente") == 3)) ? "selected": "") ?>>3</option>
								</select>
							</div>
							<div class="col-sm-4">
								<label class="control-label"><?php echo _t("Digite senha: ") ?><span class="required">*</span></label>
								<input type="text" name="cli[cli_password]" id="password" class="form-control" value="<?php echo ((!set_value("cli_password")) ? $cust->cli_password : set_value("cli_password")) ?>" readonly />
							</div>
						</div>
						<!-- endereço completo pessoal -->
						<div class="form-group">
							<div class="col-md-12">
								<p class="text-success"><strong><?php echo _t("::: ENDEREÇO COMPLETO :::") ?></strong></p>
							</div>						
						</div>
						<div class="form-group">
							<div class="col-sm-6">
								<label class="control-label"><?php echo _t("Digite latitude: ") ?><span class="required">*</span></label>
								<input type="text" name="end[end_latitude]" id="latitude" value="<?php echo ((!set_value("end_latitude")) ? $cust->end_latitude : set_value("end_latitude")) ?>" class="form-control" readonly />
							</div>
							<div class="col-sm-6">
								<label class="control-label"><?php echo _t("Digite longitude: ") ?><span class="required">*</span></label>
								<input type="text" name="end[end_longitude]" id="longitude" value="<?php echo ((!set_value("end_longitude")) ? $cust->end_longitude : set_value("end_longitude")) ?>" class="form-control" readonly />
							</div>
						</div>	
						<div class="form-group">
							<div class="col-sm-3">
								<label class="control-label"><?php echo _t("Digite cep: ") ?><span class="required">*</span></label>
								<input type="text" name="end[end_cep]" id="zipcode" value="<?php echo ((!set_value("end_cep")) ? $cust->end_cep : set_value("end_cep")) ?>" class="form-control" readonly />
							</div>
							<div class="col-sm-7">
								<label class="control-label"><?php echo _t("Digite rua: ") ?><span class="required">*</span></label>
								<input type="text" name="end[end_rua]" id="rua" value="<?php echo ((!set_value("end_rua")) ? $cust->end_rua : set_value("end_rua")) ?>" class="form-control" readonly />
							</div>
							<div class="col-sm-2">
								<label class="control-label"><?php echo _t("Digite número: ") ?><span class="required">*</span></label>
								<input type="text" name="end[end_numero]" id="numero" value="<?php echo ((!set_value("end_numero")) ? $cust->end_numero : set_value("end_numero")) ?>" class="form-control" readonly />
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-12">
								<label class="control-label"><?php echo _t("Digite complemento: ") ?><span class="required">*</span></label>
								<input type="text" name="end[end_complemento]" id="complemento" value="<?php echo ((!set_value("end_complemento")) ? $cust->end_complemento : set_value("end_complemento")) ?>" class="form-control" readonly />
							</div>
						</div>					
						<div class="form-group">
							<div class="col-sm-4">
								<label class="control-label"><?php echo _t("Digite bairro: ") ?><span class="required">*</span></label>
								<input type="text" name="end[end_bairro]" id="bairro" value="<?php echo ((!set_value("end_bairro")) ? $cust->end_bairro : set_value("end_bairro")) ?>" class="form-control" readonly />
							</div>
							<div class="col-sm-4">
								<label class="control-label"><?php echo _t("Digite cidade: ") ?><span class="required">*</span></label>
								<input type="text" name="end[end_cidade]" id="cidade" value="<?php echo ((!set_value("end_cidade")) ? $cust->end_cidade : set_value("end_cidade")) ?>" class="form-control" readonly />
							</div>	
							<div class="col-sm-4">
								<label class="control-label"><?php echo _t("Digite estado: ") ?><span class="required">*</span></label>
								<input type="text" name="end[end_estado]" id="estado" value="<?php echo ((!set_value("end_estado")) ? $cust->end_estado : set_value("end_estado")) ?>" class="form-control" readonly />
								<input type="hidden" name="end[end_pais]" id="pais" value="JP" class="form-control" required />
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
								<input type="text" name="cpy[cpy_nome]" id="emp_nome" value="<?php echo ((!set_value("cpy_nome")) ? $cust->cpy_nome : set_value("cpy_nome")) ?>" class="form-control" readonly />
							</div>
							<div class="col-sm-3">
								<label class="control-label"><?php echo _t("Digite telefone: ") ?><span class="required">*</span></label>
								<input type="text" name="cpy[cpy_telefone]" id="emp_telefone" value="<?php echo ((!set_value("cpy_telefone")) ? $cust->cpy_telefone : set_value("cpy_telefone")) ?>" class="form-control" readonly />
							</div>
						</div>		
						<div class="form-group">
							<div class="col-sm-3">
								<label class="control-label"><?php echo _t("Digite cep: ") ?><span class="required">*</span></label>
								<input type="text" name="cpy[cpy_cep]" id="emp_cep" value="<?php echo ((!set_value("cpy_cep")) ? $cust->cpy_cep : set_value("cpy_cep")) ?>" class="form-control" readonly />
							</div>
							<div class="col-sm-7">
								<label class="control-label"><?php echo _t("Digite rua: ") ?><span class="required">*</span></label>
								<input type="text" name="cpy[cpy_rua]" id="emp_rua" value="<?php echo ((!set_value("cpy_rua")) ? $cust->cpy_rua : set_value("cpy_rua")) ?>" class="form-control" readonly />
							</div>
							<div class="col-sm-2">
								<label class="control-label"><?php echo _t("Digite número: ") ?><span class="required">*</span></label>
								<input type="text" name="cpy[cpy_numero]" id="emp_numero" value="<?php echo ((!set_value("cpy_numero")) ? $cust->cpy_numero : set_value("cpy_numero")) ?>" class="form-control" readonly />
							</div>
						</div>						
						<div class="form-group">
							<div class="col-sm-12">
								<label class="control-label"><?php echo _t("Digite complemento: ") ?><span class="required">*</span></label>
								<input type="text" name="cpy[cpy_complemento]" id="emp_complemento" value="<?php echo ((!set_value("cpy_complemento")) ? $cust->cpy_complemento : set_value("cpy_complemento")) ?>" class="form-control" readonly />
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-4">
								<label class="control-label"><?php echo _t("Digite bairro: ") ?><span class="required">*</span></label>
								<input type="text" name="cpy[cpy_bairro]" id="emp_bairro" value="<?php echo ((!set_value("cpy_bairro")) ? $cust->cpy_bairro : set_value("cpy_bairro")) ?>" class="form-control" readonly />
							</div>
							<div class="col-sm-4">
								<label class="control-label"><?php echo _t("Digite cidade: ") ?><span class="required">*</span></label>
								<input type="text" name="cpy[cpy_cidade]" id="emp_cidade" value="<?php echo ((!set_value("cpy_cidade")) ? $cust->cpy_cidade : set_value("cpy_cidade")) ?>" class="form-control" readonly />
							</div>	
							<div class="col-sm-4">
								<label class="control-label"><?php echo _t("Digite estado: ") ?><span class="required">*</span></label>
								<input type="text" name="cpy[cpy_estado]" id="emp_estado" value="<?php echo ((!set_value("cpy_estado")) ? $cust->cpy_estado : set_value("cpy_estado")) ?>" class="form-control" readonly />
							</div>							
						</div>					
					<!-- end form -->
					</div>
					<footer class="panel-footer">
						<div class="row">
							<div class="col-sm-offset-4 col-sm-2">
								<button class="btn btn-block btn-success" disabled>Editar cadastro</button>
							</div>
							<div class="col-sm-2">
								<button type="reset" class="btn btn-block btn-default" disabled>Reset</button>
							</div>
						</div>
					</footer>
				</section>
			</form>
		</div>
	</div>
</section>