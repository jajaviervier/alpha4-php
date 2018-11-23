$(document).ready(function(){
	$("#formu-nuevo-Accesorios").submit(function (e) {
		e.preventDefault()
		var datos = new FormData($(this)[0])
	
console.log(datos)
		$.ajax({
			url: 'ajax/ajaxAccesorios.php',
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
						text: 'Accesorios creada con exito!'
					  }).then((result) => {
						if (result.value) {
							window.location = "accesorios"
						  }
					  })
						break;
					case "2":
					swal({
						type: 'error',
						title: 'Error',
						text: 'Accesorios ya registrada'//se muestra un mensaje si el dato ya existe!
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

	$("body .table-dark").on("click", ".btnEliminarAccesorios", function(){
		var idAccesorios = $(this).attr("idAccesorios")

		var datos = new FormData()
		datos.append("id_Accesorios", idAccesorios);
		datos.append("tipoOperacion", "eliminarAccesorios");
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
				url: 'ajax/ajaxAccesorios.php',
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
						    window.location = "bincardAcc"
						  }
						})
					}
				}

			})
		  }
		})




		

	})

	$("#formu-editar-Accesorio").submit(function (e) {
		e.preventDefault()

		var datos = new FormData($(this)[0])

		$.ajax({
			url: 'ajax/ajaxAccesorios.php',
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
					  text: 'Accesorios actualizado con éxito'
					}).then((result) => {
					  if (result.value) {
					    window.location = "accesorios"
					  }
					})
				}
			}

		})

	})


	$("body .table-dark").on("click", ".btnEditarAccesorios", function(){
		var idAccesorios = $(this).attr("idAccesorios");
	
		var datos = new FormData()
		datos.append("id_Accesorios", idAccesorios)
		datos.append("tipoOperacion", "editarAccesorios")
		$.ajax({
			url: 'ajax/ajaxAccesorios.php',
			type: 'POST',
			data: datos,
			processData: false,
			contentType: false,
			success: function(respuesta) {
				console.log(respuesta);
				var valor = JSON.parse(respuesta)
				console.log(valor.id_Accesorios)
				console.log(valor.serieAccesorios)

				$('#formu-editar-Accesorios input[name="serieAccesorios"]').val(valor.serieAccesorios)
			
        $('#formu-editar-Accesorios textarea[name="desAccesorios"]').val(valor.desAccesorios)
        $('#formu-editar-Accesorios input[name="cantidadAccesorios"]').val(valor.cantidadAccesorios)

       
               
				$('#formu-editar-Accesorios input[name="id_Accesorios"]').val(valor.id_Accesorios)

			}

		})

	})
})