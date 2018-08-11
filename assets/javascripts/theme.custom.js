/* Add here all your JS customizations */
jQuery(function($){

	/**
	 * Mascara completa para telefone ...
	 * @type {[type]}
	 */
	$("input#telefone, input#emp_telefone").focusout(function(){
	    var phone, element;
	    element = $(this);
	    element.unmask();
	    phone = element.val().replace(/\D/g, '');
	    if (phone.length > 10) {
	        element.mask("(999) 999-99999");
	    } else {
	        element.mask("(999) 999-9999?9");
	    }
	}).trigger('focusout');

	/**
	 * Validação de CPF e CNPJ
	 * [description]
	 */
	$("#cpf").mask("999.999.999-99");
	$("#cnpj").mask("99.999.999/9999-99");
	$("#zipcode, #emp_cep").mask("999-9999");

	/**
	 * Validação do formulário de envio dos dados
	 * @type {Boolean}
	 */
	$("#formulario").validate();

	/**
	 * Pegando as coordenadas do endereço residencial
	 * @param  {[type]} ){ var zipcode [description]
	 */
	$("#zipcode, #rua, #numero, #bairro, #cidade, #estado").on('change click', function(){
		// get data
		var zipcode = $("#zipcode").val()
		var rua = $("#rua").val()
		var numero = $("#numero").val()
		var bairro = $("#bairro").val()
		var cidade = $("#cidade").val()
		var estado = $("#estado").val()
		// ajax
		$.ajax({
			url: 'http://seguradoraautomotiva.tk/administrativo/getcoordinates',
			type: 'POST',
			dataType: 'json',
			data: {zipcode:zipcode, rua:rua, numero:numero, bairro:bairro, cidade:cidade, estado:estado},
			success: function(data){
				if(data.latitude !== null && data.latitude !== '') {
				   	$("#latitude").val("").val(data.latitude)
				} if(data.longitude !== null && data.longitude !== '') {
				   	$("#longitude").val("").val(data.longitude)
				} console.log(data)
			}			
		});
		return false;
	});	
});