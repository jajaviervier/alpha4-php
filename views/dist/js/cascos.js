$(document).ready(function(){
	$("#formu-nuevo-cascos").submit(function (e) {
		e.preventDefault()
		var datos = new FormData($(this)[0])
        console.log(datos)
		$.ajax({
			url: 'ajax/ajaxCascos.php',
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
							window.location = "cascos"
						  }
					  })
						break;
					case "2":
					swal({
						type: 'error',
						title: 'Error',
						text: 'El nùmero de serie ya encuentra ingresaso'
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
						  window.location = "cascos"
						}
					  })
				}
			}

		})

	})

$("#formu-editar-cascos").submit(function (e) {
		e.preventDefault()

		var datos = new FormData($(this)[0])

		$.ajax({
			url: 'ajax/ajaxCascos.php',
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
					  text: 'Cascos actualizado con éxito'
					}).then((result) => {
					  if (result.value) {
					    window.location = "cascos"
					  }
					})
				}
			}

		})

	})
	$("body .table-dark").on("click", ".btnEliminarCascos", function(){
		var idCascos = $(this).attr("idCascos")
	
		var datos = new FormData()
		datos.append("id_cascos", idCascos);
		datos.append("tipoOperacion", "eliminarCascos");
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
				url: 'ajax/ajaxCascos.php',
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
						    window.location = "cascos"
						  }
						})
					}
				}

			})
		  }
		})
	})
  $("body .table-dark").on("click", ".btnEditarcascos", function(){
		var idCascos = $(this).attr("idCascos");
		console.log(idCascos)
		var datos = new FormData()
		datos.append("id_cascos", idCascos)
		datos.append("tipoOperacion", "editarCascos")

		$.ajax({
			url: 'ajax/ajaxCascos.php',
			type: 'POST',
			data: datos,
			processData: false,
			contentType: false,
			success: function(respuesta) {
				console.log(respuesta);
				var valor = JSON.parse(respuesta)
				console.log(valor.id_cascos)
				console.log(valor.marca_modelo)
				console.log(valor.modelo)
				console.log(valor.serie)
				
				$('#formu-editar-cascos select[name="marca_modelo"]option:selected').val(valor.marca_modelo)
				$('#formu-editar-cascos select[name="id_funcionario"]').val(valor.casco_funcionario)
				$('#formu-editar-cascos input[name="serie"]').val(valor.serie)
				$('#formu-editar-cascos select[name="estado_casco"]').val(valor.estado_casco)
				$('#formu-editar-cascos textarea[name="observacion"]').val(valor.observacion)
				$('#formu-editar-cascos input[name="id_cascos"]').val(valor.id_cascos)

			}

		})

  })
})
	