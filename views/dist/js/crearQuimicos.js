$(document).ready(function(){
	$("#formu-nuevo-CrearQuimicos").submit(function (e) {
		e.preventDefault()
		var datos = new FormData($(this)[0])
	
console.log(datos)
		$.ajax({
			url: 'ajax/ajaxCrearQuimicos.php',
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
							window.location = "crearQuimicos"
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

	$("body .table-dark").on("click", ".btnEliminarCrearQuimicos", function(){
		var idCrearQuimicos = $(this).attr("idCrearQuimicos")

		var datos = new FormData()
		datos.append("id_CrearQuimicos", idCrearQuimicos);
		datos.append("tipoOperacion", "eliminarCrearQuimicos");
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
				url: 'ajax/ajaxCrearQuimicos.php',
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
						    window.location = "crearQuimicos"
						  }
						})
					}
				}

			})
		  }
		})




		

	})

	$("#formu-editar-CrearQuimicos").submit(function (e) {
		e.preventDefault()

		var datos = new FormData($(this)[0])

		$.ajax({
			url: 'ajax/ajaxCrearQuimicos.php',
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
					  text: 'CrearQuimicos actualizado con éxito'
					}).then((result) => {
					  if (result.value) {
					    window.location = "crearQuimicos"
					  }
					})
				}
			}

		})

	})


	$("body .table-dark").on("click", ".btnEditarCrearQuimicos", function(){
		var idCrearQuimicos = $(this).attr("idCrearQuimicos");
	
		var datos = new FormData()
		datos.append("id_CrearQuimicos", idCrearQuimicos)
		datos.append("tipoOperacion", "editarCrearQuimicos")
		$.ajax({
			url: 'ajax/ajaxCrearQuimicos.php',
			type: 'POST',
			data: datos,
			processData: false,
			contentType: false,
			success: function(respuesta) {
				console.log(respuesta);
				var valor = JSON.parse(respuesta)
				console.log(valor.id_CrearQuimicos)
				console.log(valor.serieCrearQuimicos)

				$('#formu-editar-CrearQuimicos input[name="serieCrearQuimicos"]').val(valor.serieCrearQuimicos)
				$('#formu-editar-CrearQuimicos input[name="tipoCrearQuimicos"]').val(valor.tipoCrearQuimicos)
        $('#formu-editar-CrearQuimicos input[name="calibreCrearQuimicos"]').val(valor.calibreCrearQuimicos)
        $('#formu-editar-CrearQuimicos input[name="marcaCrearQuimicos"]').val(valor.marcaCrearQuimicos)
         $('#formu-editar-CrearQuimicos input[name="modeloCrearQuimicos"]').val(valor.modeloCrearQuimicos)
       
				$('#formu-editar-CrearQuimicos input[name="id_CrearQuimicos"]').val(valor.id_CrearQuimicos)

			}

		})

	})
})