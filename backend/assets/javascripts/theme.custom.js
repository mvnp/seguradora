/* Add here all your JS customizations */
$(document).ready(function(){

	// base_url
	var l = window.location;
	var base_url = l.protocol + "//" + l.host + "/";

	// Setup datatables
	$.fn.dataTableExt.oApi.fnPagingInfo = function(oSettings){
		return {
			"iStart": oSettings._iDisplayStart,
			"iEnd": oSettings.fnDisplayEnd(),
			"iLength": oSettings._iDisplayLength,
			"iTotal": oSettings.fnRecordsTotal(),
			"iFilteredTotal": oSettings.fnRecordsDisplay(),
			"iPage": Math.ceil(oSettings._iDisplayStart / oSettings._iDisplayLength),
			"iTotalPages": Math.ceil(oSettings.fnRecordsDisplay() / oSettings._iDisplayLength)
		};
	};

	// montando a tabela
	var table = $("#mytable").dataTable({
		initComplete: function() {
			var api = this.api();
			$('#mytable_filter input').off('.DT').on('input.DT', function(){
				api.search(this.value).draw();
			});
		},
		oLanguage: {
			sProcessing: "carregando ..."
		},
		processing: true,
		serverSide: true,
		searching: false,
		lengthChange: false,
		ajax: {
			"type": "POST",
			"url": base_url+"/administrativo/ajaxGetAllCustomers"
		},
		pageLength: 100,
		columns: [
			{"data": "cli_id"},
			{"data": "cli_nome"},
			{"data": "cli_email"},
			{"data": "cli_telefone"},
			{"data": "cli_cadastro"},
			{"data": "cli_id"},
			{"data": "cli_id"},
			{"data": "cli_id"},
			{"data": "cli_id"},
			{"data": "cli_id"},
			{"data": "cli_id"},
			{"data": "cli_id"},
			{"data": "cli_id"},
		],
  		order: [
  			[1, 'asc']
  		],
		rowCallback: function(row, data, iDisplayIndex) {
			var info = this.fnPagingInfo();
			var page = info.iPage;
			var length = info.iLength;
			$('td:eq(0)', row).addClass("text-center").html();
			$('td:eq(1)', row).html("<strong>Nome: </strong>"+data.cli_nome+' '+data.cli_sobrenome+"<br><strong>E-mail: </strong>"+data.cli_email+"")
			$('td:eq(5)', row).html('<a href="/administrativo/dependentes/'+data.cli_id+'"><i class="fa fa-users" aria-hidden="true"></i></a>').addClass("text-center align-middle")
			$('td:eq(6)', row).html('<a href="/administrativo/venda/'+data.cli_id+'"><i class="fa fa-shopping-basket" aria-hidden="true"></i></a>')
			$('td:eq(7)', row).html('<a href="/administrativo/edita/'+data.cli_id+'"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>')
			$('td:eq(8)', row).html('<a href="/administrativo/documentos/'+data.cli_id+'"><i class="fa fa-files-o" aria-hidden="true"></i></a>')
			$('td:eq(9)', row).html('<a href="/administrativo/bloquea/'+data.cli_id+'"><i class="fa fa-lock" aria-hidden="true"></i></a>')			
			$('td:eq(10)', row).html('<a onclick="return confirmar()" href="/administrativo/apaga/'+data.cli_id+'"><i class="fa fa-trash-o" aria-hidden="true"></i></a>')
			$('td:eq(11)', row).html('<a href="/administrativo/carro/'+data.cli_id+'"><i class="fa fa-car" aria-hidden="true"></i></a>')
			$('td:eq(12)', row).html('<a href="/administrativo/agenda/'+data.cli_id+'"><i class="fa fa-calendar" aria-hidden="true"></i></a>')

			
			// verificando se os valores são diferentes ...
			// if (data['EFICAZ_TAB_META'] != data['EFICAZ_TAB_RESULTADO']){
			// 	$('td:eq(7)', row).html("<a class='ajaxOcorrencia' data-oc_data='"+data['EFICAZ_TAB_ID']+"'>"+data['EFICAZ_TAB_RESULTADO']+"</a>").closest('tr').addClass('bg-danger');
			// } 
		}
	}); // end setup datatables

	// addClass para formatar estilo bootstrap ...
	$("#mytable_length select").addClass("form-control");

	/**
	 * Configuração do idioma do datepicker
	 * @type {String}
	 */
	$('#afastamento, #retorno').datepicker({
		language: "pt-BR",
		todayHighlight: true,
		autoclose: true
	});
});

function confirmar(){
	// Pergunta ao usuário se deseja realmente excluir o registro da base de dados permamentemente.
	return confirm("Deseja realmente remover este registro permanentemente? Processo irreversível.");
}