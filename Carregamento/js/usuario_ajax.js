$(document).ready(() => {
	carregar(0, 2);
	$(".carregar-mais").click(function (event) {
		event.preventDefault();

		var min = $("tbody tr").length;

		carregar(min, 2);
	});
})


function carregar(min, max) {
	
	$.ajax({
		url: './loading_usuario.php',
		type: 'POST',
		data: { min, max },
		success: function (response) {
			$("#teste").append(response)
		}
	})

}

		