$(document).ready(function() {
	$('#formulario').submit(function(e) {
		e.preventDefault();
		var nome = $('#nome').val();
		var id = $('#id').val();
		

		$.ajax({
			type: 'POST',
			url: 'enviar.php',
			data: {
				nome: nome,
				id: id
				
			},
			success: function(response) {
				$('#resultado').html(response);
			}
		});
	});
});
