$(document).ready(function(){
	$("#formu-nuevo-Radios").submit(function (e) {
		e.preventDefault()
		var datos = new FormData($(this)[0])
	
console.log(datos)
		$.ajax({
			url: 'ajax/ajaxRadios.php',
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
						text: 'Radio creada con exito!'
					  }).then((result) => {
						if (result.value) {
							window.location = "radios"
						  }
					  })
						break;
					case "2":
					swal({
						type: 'error',
						title: 'Error',
						text: 'Radio ya registrada'//se muestra un mensaje si el dato ya existe!
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

	$("body .table-dark").on("click", ".btnEliminarRadios", function(){
		var idRadios = $(this).attr("idRadios")

		var datos = new FormData()
		datos.append("id_Radios", idRadios);
		datos.append("tipoOperacion", "eliminarRadios");
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
				url: 'ajax/ajaxRadios.php',
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
						    window.location = "radios"
						  }
						})
					}
				}

			})
		  }
		})




		

	})

	$("#formu-editar-Radios").submit(function (e) {
		e.preventDefault()

		var datos = new FormData($(this)[0])
		datos.append("id_funcionario", $('#id_funcionario').val());
		$.ajax({
			url: 'ajax/ajaxRadios.php',
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
					  text: 'Radios actualizado con éxito'
					}).then((result) => {
					  if (result.value) {
					    window.location = "radios"
					  }
					})
				}
			}

		})

	})


	$("body .table-dark").on("click", ".btnEditarRadios", function(){
		var idRadios = $(this).attr("idRadios");
	
		var datos = new FormData()
		datos.append("id_Radios", idRadios)
		datos.append("tipoOperacion", "editarRadios")
		$.ajax({
			url: 'ajax/ajaxRadios.php',
			type: 'POST',
			data: datos,
			processData: false,
			contentType: false,
			success: function(respuesta) {
				console.log(respuesta);
				var valor = JSON.parse(respuesta)
				console.log(valor.id_Radios)
				console.log(valor.serieRadios)

				$('#formu-editar-Radios input[name="serieRadios"]').val(valor.serieRadios)
				$('#formu-editar-Radios input[name="modeloRadios"]').val(valor.modeloRadios)
				$('#formu-editar-Radios input[name="tipoRadios"]').val(valor.tipoRadios)
				$('#formu-editar-Radios input[name="serieGPS_Radios"]').val(valor.serieGPS_Radios)
				$('#formu-editar-Radios input[name="obserRadios"]').val(valor.obserRadios)
				$('#formu-editar-Radios select[name="estado"]').val(valor.estado)
				$('#formu-editar-Radios select[name="id_funcionario"]').val(valor.cargoRadios)
				$('#formu-editar-Radios input[name="id_Radios"]').val(valor.id_Radios)

			}

		})

	})
})