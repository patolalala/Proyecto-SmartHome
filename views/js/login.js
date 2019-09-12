$("#form-login").submit(function(e){
	e.preventDefault()
	var datos = $(this).serialize()
	$.ajax({
		url: 'ajax/ajaxLogin.php',
		type: 'POST',
		data: datos,
		success: function(respuesta){
			var valor = JSON.parse(respuesta)
			if (valor[0] == "ok") {
				Swal.fire({
				  	position: 'center',
					type: 'success',
					title: 'Sesión Iniciada',
					showConfirmButton: false,
					timer: 1000
				}).then((result) => {
					console.log(result)
				  if (result.dismiss) {
				  	if (valor[1] == 0) {
				  		window.location = "admin/index.php"
				  	}
				  	if (valor[1] == 1) {
				  		window.location = "home"
				  	}
				  }
				})
			}
			if (valor[0] == "error") {
				Swal.fire({
				  	position: 'center',
					type: 'error',
					title: 'Error al Inicar Sesón',
					text: 'Intente Nuevamente',
					showConfirmButton: false,
					timer: 1500
				}).then((result) => {
					console.log(result)
				  if (result.dismiss) {
				    $("#form-login")[0].reset()
				  }
				})
			}
		}
	})
})