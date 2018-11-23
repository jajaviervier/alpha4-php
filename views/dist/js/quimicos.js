$(document).ready(function(){
	$("#formu-nuevo-Quimicos").submit(function (e) {
		e.preventDefault()
		var datos = new FormData($(this)[0])
	
console.log(datos)
		$.ajax({
			url: 'ajax/ajaxQuimicos.php',
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
						text: 'Quimico creada con exito!'
					  }).then((result) => {
						if (result.value) {
							window.location = "quimicos"
						  }
					  })
						break;
					case "2":
					swal({
						type: 'error',
						title: 'Error',
						text: 'Quimico ya registrada'//se muestra un mensaje si el dato ya existe!
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

	$("body .table-dark").on("click", ".btnEliminarQuimicos", function(){
		var idQuimicos = $(this).attr("idQuimicos")

		var datos = new FormData()
		datos.append("id_Quimicos", idQuimicos);
		datos.append("tipoOperacion", "eliminarQuimicos");
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
				url: 'ajax/ajaxQuimicos.php',
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
						    window.location = "bincardQuim"
						  }
						})
					}
				}

			})
		  }
		})




		

	})

	$("#formu-editar-Quimicos").submit(function (e) {
		e.preventDefault()

		var datos = new FormData($(this)[0])

		$.ajax({
			url: 'ajax/ajaxQuimicos.php',
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
					  text: 'Quimicos actualizado con éxito'
					}).then((result) => {
					  if (result.value) {
					    window.location = "quimicos"
					  }
					})
				}
			}

		})

	})


	$("body .table-dark").on("click", ".btnEditarQuimicos", function(){
		var idQuimicos = $(this).attr("idQuimicos");
	
		var datos = new FormData()
		datos.append("id_Quimicos", idQuimicos)
		datos.append("tipoOperacion", "editarQuimicos")
		$.ajax({
			url: 'ajax/ajaxQuimicos.php',
			type: 'POST',
			data: datos,
			processData: false,
			contentType: false,
			success: function(respuesta) {
				console.log(respuesta);
				var valor = JSON.parse(respuesta)
				console.log(valor.id_Quimicos)
				console.log(valor.serieQuimicos)

				$('#formu-editar-Quimicos input[name="serieQuimicos"]').val(valor.serieQuimicos)
				$('#formu-editar-Quimicos input[name="tipoQuimicos"]').val(valor.tipoQuimicos)
                $('#formu-editar-Quimicos input[name="calibreQuimicos"]').val(valor.calibreQuimicos)
                $('#formu-editar-Quimicos input[name="marcaQuimicos"]').val(valor.marcaQuimicos)
                $('#formu-editar-Quimicos input[name="modeloQuimicos"]').val(valor.modeloQuimicos)
                $('#formu-editar-Quimicos input[name="cantidadQuimicos"]').val(valor.cantidadQuimicos)
                $('#formu-editar-Quimicos input[name="consumoQuimicos"]').val(valor.consumoQuimicos)
                $('#formu-editar-Quimicos input[name="stockQuimicos"]').val(valor.stockQuimicos)
				$('#formu-editar-Quimicos input[name="id_Quimicos"]').val(valor.id_Quimicos)

			}

		})

	})
})