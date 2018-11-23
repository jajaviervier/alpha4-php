$(document).ready(function(){
	$("#formu-nuevo-FichaDia").submit(function (e) {
		e.preventDefault()
		var datos = new FormData($(this)[0])
		datos.append("idArmasForanea", $('#optionSubca').val());
console.log(datos)
		$.ajax({
			url: 'ajax/ajaxFichaDia.php',
			type: 'POST',
			data: datos,
			processData: false,
			contentType: false,
			success: function(respuesta) {
				console.log(respuesta)
				switch(respuesta) {
					case "1":
					swal({
						type: 'success',
						title: 'Excelente',
						text: 'Carga creada con exito!'
					  }).then((result) => {
						if (result.value) {
							window.location = "FichaDia"
						  }
					  })
						break;
					case "2":
					swal({
						type: 'error',
						title: 'Error',
						text: 'Carga ya registrada'//se muestra un mensaje si el dato ya existe!
					  }).then((result) => {
						if (result.value) {

						}
					  })
						break;
					default:
					swal({
						type: 'error',
						title: 'Error',
						text: 'Algo salió mal'
					  }).then((result) => {
						if (result.value) {

						}
					  })
				}
			}

		})

	})

	$("body .table-dark").on("click", ".btnEliminarFichaDia", function(){
		var idFichaDia = $(this).attr("idFichaDia")

		var datos = new FormData()
		datos.append("id_FichaDia", idFichaDia);
		datos.append("tipoOperacion", "eliminarFichaDia");
		swal({
		  title: '¿Estás seguro de eliminar?',
		  text: "Los cambios no son reversibles!",
		  type: 'warning',
		  showCancelButton: true,
		  confirmButtonColor: '#3085d6',
		  cancelButtonColor: '#d33',
		  confirmButtonText: 'Si, Eliminar!'
		}).then((result) => {
		  if (result.value) {
		  	$.ajax({
				url: 'ajax/ajaxFichaDia.php',
				type: 'POST',
				data: datos,
				processData: false,
				contentType: false,
				success: function(respuesta) {
					console.log(respuesta)
					if ( respuesta == "ok") {
						swal(
					      'Eliminado!',
					      'Su archivo a sido eliminadso.',
					      'success'
					    ).then((result) => {
						  if (result.value) {
						    window.location = "FichaDia"
						  }
						})
					}
				}

			})
		  }
		})






	})

	$("#formu-editar-FichaDia").submit(function (e) {
		e.preventDefault()

		var datos = new FormData($(this)[0])

		$.ajax({
			url: 'ajax/ajaxFichaDia.php',
			type: 'POST',
			data: datos,
			processData: false,
			contentType: false,
			success: function(respuesta) {
				console.log(respuesta)
				if (respuesta == "ok") {
					swal({
					  type: 'success',
					  title: 'Actualizado',
					  text: 'FichaDia actualizado con éxito'
					}).then((result) => {
					  if (result.value) {
					    window.location = "FichaDia"
					  }
					})
				}
			}

		})

	})


	$("body .table-dark").on("click", ".btnEditarFichaDia", function(){
		var idFichaDia = $(this).attr("idFichaDia");

		var datos = new FormData()
		datos.append("id_FichaDia", idFichaDia)
		datos.append("tipoOperacion", "editarFichaDia")
		$.ajax({
			url: 'ajax/ajaxFichaDia.php',
			type: 'POST',
			data: datos,
			processData: false,
			contentType: false,
			success: function(respuesta) {
				console.log(respuesta);
				var valor = JSON.parse(respuesta)
				console.log(valor.id_FichaDia)
				console.log(valor.patenteFichaDia)

				$('#formu-editar-FichaDia input[name="patenteFichaDia"]').val(valor.patenteFichaDia)
				$('#formu-editar-FichaDia input[name="kmsalidaFichaDia"]').val(valor.kmsalidaFichaDia)
				$('#formu-editar-FichaDia input[name="kmllegadaFichaDia"]').val(valor.kmllegadaFichaDia)
				$('#formu-editar-FichaDia input[name="kmrecorridoVehiculo"]').val(valor.kmrecorridoFichaDia)

				$('#formu-editar-FichaDia select[name="idFuncionarioForaneo"]').val(valor.idFuncionarioForaneo)

				$('#formu-editar-FichaDia input[name="id_FichaDia"]').val(valor.id_FichaDia)

			}

		})

	})
})