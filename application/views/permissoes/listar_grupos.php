<section role="main" class="content-body" style="padding-top:0">
	<!-- start: page -->
	<div class="row">
		<div class="col-md-12">
			<form id="form" action="forms-validation.html" class="form-horizontal">
				<section class="panel">
					<header class="panel-heading">
						<div class="panel-actions">
							<!-- a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a -->
							<!-- a href="#" class="panel-action panel-action-dismiss" data-panel-dismiss></a -->
						</div>
						<div class="row">
							<div class="col-md-9">
								<h2 class="panel-title"><?=_t("Lista de grupos cadastrados") ?></h2>
								<p class="panel-subtitle">
									<?=_t("Visualizar e gerenciar todos os grupos e permissões cadastrados no sistema.") ?>
								</p>
							</div>
							<div class="col-md-3">
								<a href="<?php echo base_url("permissoes/cadastrargrupo") ?>" class="btn btn-block btn-success btn-header-success"><?=_t("Cadastrar grupo")?></a>
							</div>
						</div>
					</header>
					<div class="panel-body">
						<?php echo $this->load->messages('incs/messages'); ?>
						<!-- start form -->
						<table class="table table-bordered table-striped mb-none" id="datatable-default">
							<thead>
								<tr>
									<th width="35">
										<div class="checkbox-custom chekbox-primary">
											<input type="checkbox" name="for[]" required disabled />
											<label for="for-project"></label>
										</div>										
									</th>
									<th width="200"><?=_t("Título") ?></th>
									<th><?=_t("Descrição") ?></th>
									<th width="110"><?=_t("N° func.") ?></th>
									<th class="hidden-xs"><?=_t("Ações") ?></th>
								</tr>
							</thead>
							<tbody>
								<?php if($group->num_rows() > 0): ?>
									<?php foreach ($group->result() as $cadt): ?>
										<tr <?php echo (($cadt->status == 0) ? "class='bg-danger'" : "") ?>>
											<td width="35">
												<div class="checkbox-custom chekbox-primary">
													<input type="checkbox" name="empresas[]" value="<?=$cadt->id ?>" required disabled />
													<label for="for-project"></label>
												</div>
											</td>
											<td class="hidden-xs"><?=_t($cadt->nome) ?></td>
											<td class="hidden-xs"><?=_t($cadt->description) ?></td>
											<td class="hidden-xs">10</td>
											<td class="center hidden-xs" width="125">
												<?php if( $cadt->status == 0 ): ?>
													<a href="javascript:void(0)" class="link_no_modified fa fa-ban"></a>
													<a href="<?php echo (($cadt->status == 0) ? base_url("permissoes/habilitargrupo/$cadt->id") : "") ?>" class="fa fa-plug" onclick='return confirm("<?=_t("Deseja realmente habilitar este grupo no sistema?") ?>");'></a>
												<?php else: ?>
													<a href="<?php echo (($cadt->status == 1) ? base_url("permissoes/desabilitargrupo/$cadt->id") : "") ?>" onclick='return confirm("<?=_t("Deseja realmente desabilitar este grupo no sistema?") ?>");'>
														<i class="fa fa-plug"></i>
													</a>
													<a href="<?php echo base_url("permissoes/editargrupo/$cadt->id") ?>" class="on-default edit-row">
														<i class="fa fa-pencil"></i>
													</a>
													<a href="<?php echo base_url("permissoes/excluigrupo/$cadt->id") ?>" class="on-default remove-row" onclick="return confirm('<?=_t('Deseja realmente excluir este registro? Processo irreversível.') ?>'); ">	
														<i class="fa fa-trash-o"></i>
													</a>
													<a href="<?php echo base_url("permissoes/habilitarusuarios/$cadt->id") ?>">
														<i class="fa fa-users"></i>
													</a>						
												<?php endif; ?>
											</td>
										</tr>
									<?php endforeach ?>									
								<?php else: ?>
									<tr>
										<td colspan="3"><?=_t("Nenhum registro encontrado.") ?></td>
									</tr>
								<?php endif; ?>
							</tbody>
						</table>
						<!-- end form -->
					</div>
				</section>
			</form>
		</div>
	</div>
</section>