$(document).ready(function() {
	$('#formulario').submit(function(e) {
		e.preventDefault();
		var nome = $('#nome').val();
		var email = $('#email').val();
		var mensagem = $('#mensagem').val();

		$.ajax({
			type: 'POST',
			url: 'enviar.php',
			data: {
				nome: nome,
				email: email,
				mensagem: mensagem
			},
			success: function(response) {
				$('#resultado').html(response);
			}
		});
	});
});
