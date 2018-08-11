<style>
.form-group:last-child, 
.form-group:last-of-type {
	margin-bottom: 0;
	display: block;
	clear: both;
	width: 100%;
}
.btn-group, 
.btn-group-vertical {
	display: block;
	clear: both;
	width: 100%;
}
.btn-group > .btn:first-child {
	margin-left: 0;
	width: 100%;
	text-align: left;
}
.open > .dropdown-menu {
	display: block;
	margin-top: 35px;
}
#receber_data {
	min-height: 1px;
}
#receber_data > tbody > tr > td {
	line-height:10px!important
}
.bg-danger {
	background: #d2322d!important;
	color: #fff!important;
}
.ajaxOcorrencia, 
.ajaxOcorrencia:link,
.ajaxOcorrencia:hover {
	color: #fff!important;
	text-decoration: none;
	text-transform: none;
	cursor: pointer;
}
.pull-left {
	padding-top: 26px!important;
}
#mytable th:first-child {
	padding-right: 0!important;
	margin-right: 0!important;
}
.datepicker {
	z-index: 9999!important;
}
</style>
<!-- start: page -->
<section role="main" class="panel content-body" style="padding-top:0;padding-bottom:0">
	<header class="panel-heading" style="border-radius:5px">
		<div class="row">
			<div class="col-md-12">
				<form id="pesquisa-cadastra" action="<?php echo base_url(uri_string()) ?>" method="POST" enctype="application/x-www-form-urlencoded">
					<div class="row">
						<div class="col-md-12">
				            <div class="form-group">
				                <label for="empresas">Nome do funcionário: </label>
				                <input type="text" name="nome" id="EFICAZ_OCORRENCIA_FUNC_NOME" class="form-control" autocomplete="off" value="<?php echo ((isset($pesq['nome'])) ? $pesq['nome']: "") ?>" />
				            </div>
				        </div>
					</div>
					<div class="row">
						<div class="col-md-6">
			            	<label for="DESEMP_DATA_DESDE">Desde: </label>
							<input name="afastamento" id="afastamento" type="text" data-plugin-datepicker class="datepicker form-control" required value="<?php echo ((isset($pesq['afastamento'])) ? $pesq['afastamento']: date("01/m/Y")) ?>" placeholder="Data inicial ..." />
		            	</div>
		            	<div class="col-md-6">
							<label for="DESEMP_DATA_ATE">Até: </label>
							<input name="retorno" id="retorno" type="text" data-plugin-datepicker class="datepicker form-control" required value="<?php echo ((isset($pesq['retorno'])) ? $pesq['retorno']: date("t/m/Y")) ?>" placeholder="Data final ..." />
	            		</div>
					</div>
				</form>				
			</div>
		</div>
	</header>
</section>
<!-- start: page -->
<section role="main" class="panel content-body" style="padding-top:0">
	<header class="panel-heading">
		<div class="row">
			<div class="col-md-9">
				<h2 class="panel-title"><?php echo _t("Lista de clientes") ?></h2>
				<p class="panel-subtitle">
					<?php echo _t("Todos os clientes da frota serão listados através deste formulário."); ?>
				</p>
			</div>
			<div class="col-md-3">
				<a href="<?php echo base_url("administrativo/cadastra") ?>" class="btn btn-success btn-lg btn-block fine"><?php echo _t('Cadastrar cliente') ?></a>
			</div>			
		</div>
	</header>
	<div id="adjust_columns" class="panel-body">
		<table class="table table-bordered table-striped mb-none" id="mytable" style="width:100%!important">
			<thead>
				<tr>
					<th width="40">
						<div class="checkbox-custom checkbox-default">
							<input type="checkbox" name="" id="" />
							<label for="checkboxExample9999"></label>
						</div>
					</th>
					<th>Nome completo</th>
					<th>E-mail</th>
					<th>Telefone</th>
					<th>Data</th>
					<th></th>
					<th></th>
					<th></th>
					<th></th>
					<th></th>
					<th></th>
					<th></th>
					<th></th>
				</tr>
			</thead>
			<tbody>
				<td>
					<td colspan="7">Nenhum registro encontrado</td>
				</td>
			</tbody>
		</table>		
	</div>
</section>
<!-- script src="http://pesquisa.wshare.com.br/assets/vendor/jquery/jquery.js"></script>
<script>$(function(){$("html").addClass("sidebar-left-collapsed");});</script -->
<!-- end: page -->