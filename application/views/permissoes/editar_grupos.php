<section role="main" class="content-body" style="padding-top:0">
	<!-- start: page -->
	<div class="row">
		<div class="col-md-12">
			<form action="<?php echo base_url(uri_string()) ?>" name="setando_permissoes" method="POST" enctype="application/x-www-form-urlencoded">
				<section class="panel">
					<header class="panel-heading">
						<div class="panel-actions">
							<!-- a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a -->
							<!-- a href="#" class="panel-action panel-action-dismiss" data-panel-dismiss></a -->
						</div>
						<div class="row">
							<div class="col-md-9">
								<h2 class="panel-title">Cadastro de grupos de acesso</h2>
								<p class="panel-subtitle">
									Cadastra o grupo e todas as permissões ativas para este. Depois poderá ser editado.
								</p>
							</div>
							<div class="col-md-3">
								<a href="<?php echo base_url("permissoes/listargrupos") ?>" class="btn btn-block btn-success btn-header-success">Listar grupos</a>
							</div>
						</div>
					</header>
					<div class="panel-body">
						<?php echo $this->load->messages('incs/messages'); ?>
						<!-- start form -->
						<div class="row">
							<div class="col-md-6">
								<div class="row">
									<div class="col-md-12 mb-md">
										<label for="nomedogrupo">Nome do grupo: </label>
										<input type="text" name="nome" class="form-control" title="Campo obrigatório" value="<?php echo set_value("nome") ?>" required />
									</div>
									<div class="col-md-6">
										<label for="nomedogrupo">Data de cadastro: </label>
										<input type="text" name="cadastro" value="<?=date("Y-m-d H:i:s") ?>" class="form-control" disabled />
									</div>
									<div class="col-md-6 ">
										<label for="nomedogrupo">Status: </label>
										<input type="text" name="status" value="Ativo" class="form-control" disabled />
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<label for="nomedogrupo">Descrição do grupo: </label>
								<textarea name="description" class="form-control" title="Campo obrigatório" required style="height:112px!important"><?php echo set_value("description") ?></textarea>
							</div>
							<hr class="col-md-12" style="margin:35px auto 25px auto" />
							<div class="col-md-12">
								<div class="table-permissions">
									<?php foreach ($contr->result() as $views): ?>
									<table class="table table-bordered table-striped mb-none" style="margin-bottom:20px!important">
										<thead style="background-color:#47a44733">
											<tr>
												<th colspan="3"><?=strtoupper(_t("$views->class")) ?> <span class="marcar_all" data-controller="<?php echo $views->class ?>" data-controlchecked="0">(Marcar todos)</span></th>
											</tr>
										</thead>
										<tbdoy>
											<?php foreach ($this->permissoes_model->getAllPermissoesForController($views->class)->result() as $control): ?>
												<tr>
													<td width="35">
														<div class="checkbox-custom chekbox-primary">
															<input type="checkbox" name="permissions[]" value="<?php echo $control->id ?>" data-iscontroller="<?php echo $control->class ?>" <?php $selects = $this->session->userdata('form_selects'); echo (( isset($selects) && in_array($control->id, $this->session->userdata('form_selects'))) ? "checked": "") ?> />
															<label for="for-project"></label>
														</div>										
													</td>
													<td width="200"><?=_t("$control->method") ?></td>
													<td><?=_t("$control->description") ?></td>
												</tr>
											<?php endforeach ?>
										</tbdoy>
									</table>
									<?php endforeach ?>
								</div>								
							</div>
						</div>
					<!-- end form -->
					</div>		
					<footer class="panel-footer">
						<div class="row">
							<div class="col-sm-offset-4 col-sm-2">
								<button name="enviar" class="btn btn-block btn-success">Cadastrar</button>
							</div>
							<div class="col-sm-2">
								<a href="<?php echo base_url("permissoes/listargrupos") ?>" class="btn btn-block btn-danger">Voltar</a>
							</div>
						</div>
					</footer>
				</section>
			</form>
		</div>
	</div>
</section>