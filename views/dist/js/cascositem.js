$(document).ready(function(){
		$("#formu-nuevo-cascositem").submit(function (e) {
		e.preventDefault()
		var datos = new FormData($(this)[0])
        console.log(datos)
		$.ajax({
			url: 'ajax/ajaxCascositem.php',
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
						text: 'Sub Categoria creada con éxito!'
					  }).then((result) => {
						if (result.value) {
							window.location = "cascositem"
						  }
					  })
						break;
					case "2":
					swal({
						type: 'error',
						title: 'Error',
						text: 'El modelo y marca ya se encuentra ingresado'
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
						  window.location = "cascositem"
						}
					  })
				}
			}

		})

	})

	$("body .table-dark").on("click", ".btnEliminarcascositem", function(){
		var idCascos = $(this).attr("idCascos")
	
		var datos = new FormData()
		datos.append("id_cascos_item", idCascos);
		datos.append("tipoOperacion", "eliminarCascositem");
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
				url: 'ajax/ajaxCascositem.php',
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
						    window.location = "cascositem"
						  }
						})
					}
				}

			})
		  }
		})
	})

	$("body .table-dark").on("click", ".btnEditarcascositem", function(){
		var idCascos = $(this).attr("idCascos");
		console.log(idCascos)
		var datos = new FormData()
		datos.append("id_cascos_item", idCascos)
		datos.append("tipoOperacion", "editarCascositem")
		$.ajax({
			url: 'ajax/ajaxCascositem.php',
			type: 'POST',
			data: datos,
			processData: false,
			contentType: false,
			success: function(respuesta) {
				console.log(respuesta);
				var valor = JSON.parse(respuesta)
				console.log(valor.id_cascos_item)
				console.log(valor.marca_item)
				console.log(valor.modelo_item)
				

				$('#formu-editar-cascositem input[name="marca_item"]').val(valor.marca_item)
					
				$('#formu-editar-cascositem input[name="modelo_item"]').val(valor.modelo_item)
				
				$('#formu-editar-cascositem input[name="id_cascos_item"]').val(valor.id_cascos_item)
			

			}

		})

	})

	$("#formu-editar-cascositem").submit(function (e) {
		e.preventDefault()

		var datos = new FormData($(this)[0])

		$.ajax({
			url: 'ajax/ajaxCascositem.php',
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
					  text: 'Cascos Item actualizado con éxito'
					}).then((result) => {
					  if (result.value) {
					    window.location = "cascositem"
					  }
					})
				}
			}

		})

	})	
	
		
})
