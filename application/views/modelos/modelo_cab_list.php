<?php 
$array = [
	"Marcos Vinicius",
	"Anthonella Karolyne",
	"Emilayne Pereira",
	"Erlane Alexandre",
	"Sirleii Cristina"
];
?>
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
						<h2 class="panel-title"><?php echo _t("Lista de empresas cadastradas") ?></h2>
						<p class="panel-subtitle">
							<?php echo _t("Visualizar e gerenciar todas as empresas cadastradas no sistema") ?>
						</p>
					</header>
					<div class="panel-body">
						<?php echo $this->load->messages('incs/messages'); ?>
						<div class="row">
							<div class="col-md-offset-9 col-md-3" style="padding-left:42px;margin-bottom:10px">
								<a href="<?php echo base_url("superadmin/novaempresa") ?>" class="btn btn-block btn-success">Cadastrar empresa</a>
							</div>
						</div>
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
									<th>E-mail</th>
									<th width="180">Data cadastro</th>
									<th class="hidden-xs">Ações</th>
								</tr>
							</thead>
							<tbody>
								<?php if($array->num_rows() > 0): ?>
									<?php foreach ($array->result() as $cadt): ?>
										<tr <?php echo (($cadt->status == 0) ? "class='bg-danger'" : "") ?>>
											<td width="35">
												<div class="checkbox-custom chekbox-primary">
													<input type="checkbox" name="empresas[]" value="<?=$cadt->id ?>" required disabled />
													<label for="for-project"></label>
												</div>
											</td>
											<td class="hidden-xs"><?=$cadt->email ?></td>
											<td class="hidden-xs"><?=date_DB_Ptbr($cadt->cadastro) ?></td>
											<td class="center hidden-xs" width="125">
												<?php if( $cadt->status == 0 ): ?>
													<a href="javascript:void(0)" class="link_no_modified fa fa-ban"></a>
													<a href="<?php echo (($cadt->status == 0) ? base_url("superadmin/habilitarempresa/$cadt->id") : base_url("superadmin/desabilitarempresa/$cadt->id")) ?>" class="fa fa-plug" onclick='return confirm("Deseja realmente habilitar este usuário");'></a>
												<?php else: ?>
													<a href="<?php echo base_url("superadmin/editarempresa/$cadt->id") ?>" class="fa fa-pencil-square-o"></a>
													<a href="<?php echo base_url("superadmin/deleteempresa/$cadt->id") ?>" class="fa fa-trash" onclick='return confirm("Deseja realmente excluir este usuário");'></a>
													<a href="<?php echo (($cadt->status == 0) ? base_url("superadmin/habilitarempresa/$cadt->id") : base_url("superadmin/desabilitarempresa/$cadt->id")) ?>" class="fa fa-plug" onclick='return confirm("Deseja realmente desabilitar este usuário");'></a>
													<a href="<?php echo base_url("superadmin/configuracoes/$cadt->id") ?>" class="fa fa-cogs"></a>
												<?php endif; ?>
											</td>
										</tr>
									<?php endforeach ?>									
								<?php else: ?>
									<tr>
										<td colspan="3">Nenhum registro encontrado.</td>
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