jQuery(function($){
	// Url
	var l = window.location;
	var base_url = l.protocol + "//" + l.host + "/";
	
	// Ajustes
	$('#tablebalanceBTC_filter input[type="search"]').attr('placeholder', 'Table search');

	// marcar todos em permissoes
	$(".marcar_all").on('click', function(event) {

		event.preventDefault();
		var controller = $(this).data("controller");
		var controlcheckd = $(this).data("controlchecked");
		var getcontrolchecked = $("span[data-controller="+controller+"]").attr("data-controlchecked");
		
		/* Act on the event */
		$("input:checkbox[data-iscontroller="+controller+"]").each(function(){
			if(getcontrolchecked == 0){
				var checked = $("input:checkbox[data-iscontroller="+controller+"]").prop('checked', true);
				var check = $("span[data-controller="+controller+"]").attr("data-controlchecked", 1).text("(Desmarcar todos)");
			} else if(getcontrolchecked == 1) {
				var checked = $("input:checkbox[data-iscontroller="+controller+"]").prop('checked', false);
				var check = $("span[data-controller="+controller+"]").attr("data-controlchecked", 0).text("(Marcar todos)");
			}
		});
	});
});