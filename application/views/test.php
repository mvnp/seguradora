<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form>
		<input type="text" id="cep" value="88132600" />	
		<input type="text" id="rua" value="Rua José Onófre Pereira" />	
		<input type="text" id="numero" value="1060" />	
		<input type="text" id="bairro" value="Bela Vista" />	
		<input type="text" id="cidade" value="Palhoça" />	
		<input type="text" id="estado" value="Santa Catarina" />
	</form>
	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<!-- script src="https://code.jquery.com/jquery-2.2.4.min.js"></script -->
	<script>
		jQuery(function($){
			$("#cep, #rua, #numero, #bairro, #cidade, #estado").on('click', function(){
				// get data
				var zipcode = $("#cep").val()
				var rua = $("#rua").val()
				var numero = $("#numero").val()
				var bairro = $("#bairro").val()
				var cidade = $("#cidade").val()
				var estado = $("#estado").val()
				// ajax
				$.ajax({
					url: 'http://seguradoraautomotiva.tk/customers/getcoordinates',
					type: 'POST',
					dataType: 'json',
					data: {zipcode:zipcode, rua:rua, numero:numero, bairro:bairro, cidade:cidade, estado:estado},
					success: function(data){
						console.log(data)
					}
				});
				
			});
		});
	</script>
</body>
</html>