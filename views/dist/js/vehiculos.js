$(document).ready(function(){
	$("#formu-nuevo-Vehiculos").submit(function (e) {
		e.preventDefault()
		var datos = new FormData($(this)[0])
	console.log(datos.cantidadQuimicos)
console.log(datos)
		$.ajax({
			url: 'ajax/ajaxVehiculos.php',
			type: 'POST',
			data: datos,
			processData: false,
			contentType: false,
			success: function(respuesta){
				console.log(respuesta)
				switch(respuesta) {
					case "1":
					swal({
						type: 'success',
						title: 'Excelente',
						text: 'Carga creado con éxito!'
					  }).then((result) => {
						if (result.value) {
							window.location = "vehiculos"
						  }
					  })
						break;
					case "2":
					swal({
						type: 'error',
						title: 'Error',
						text: 'Carga ya registrado'
					  }).then((result) => {
						if (result.value) {
						 
						}
					  })

						break;
					default:
					swal({
						type: 'error',
						title: 'Error',
						text: 'Algo salió mal, falta imagen!'
					  }).then((result) => {
						if (result.value) {
							
						}
					  })
				}
			}

		})

	})

	$("body .table-dark").on("click", ".btnEliminarVehiculos", function(){
		var idVehiculos = $(this).attr("idVehiculos")

		var datos = new FormData()
		datos.append("id_Vehiculos", idVehiculos);
		datos.append("tipoOperacion", "eliminarVehiculos");
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
				url: 'ajax/ajaxVehiculos.php',
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
						    window.location = "vehiculos"
						  }
						})
					}
				}

			})
		  }
		})




		

	})

	$("#formu-editar-Vehiculos").submit(function (e) {
		e.preventDefault()

		var datos = new FormData($(this)[0])

		$.ajax({
			url: 'ajax/ajaxVehiculos.php',
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
					  text: 'Vehiculos actualizado con éxito'
					}).then((result) => {
					  if (result.value) {
					    window.location = "vehiculos"
					  }
					})
				}
			}

		})

	})


	$("body .table-dark").on("click", ".btnEditarVehiculos", function(){
		var idVehiculos = $(this).attr("idVehiculos");
	
		var datos = new FormData()
		datos.append("id_Vehiculos", idVehiculos)
		datos.append("tipoOperacion", "editarVehiculos")
		$.ajax({
			url: 'ajax/ajaxVehiculos.php',
			type: 'POST',
			data: datos,
			processData: false,
			contentType: false,
			success: function(respuesta) {
				console.log(respuesta);
				var valor = JSON.parse(respuesta)
				console.log(valor.id_Vehiculos)
				console.log(valor.patenteVehiculos)

				$('#formu-editar-Vehiculos input[name="patenteVehiculos"]').val(valor.patenteVehiculos)
				$('#formu-editar-Vehiculos input[name="kmsalidaVehiculos"]').val(valor.kmsalidaVehiculos)
				$('#formu-editar-Vehiculos input[name="kmllegadaVehiculos"]').val(valor.kmllegadaVehiculos)
				$('#formu-editar-Vehiculos input[name="kmrecorridoVehiculo"]').val(valor.kmrecorridoVehiculos)

				$('#formu-editar-Vehiculos select[name="idFuncionarioForaneo"]').val(valor.idFuncionarioForaneo)
				
				$('#formu-editar-Vehiculos input[name="id_Vehiculos"]').val(valor.id_Vehiculos)

			}

		})

	})
})