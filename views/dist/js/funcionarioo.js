
$(document).ready(function(){


	$("#formu-nuevo-Funcionarioo").submit(function (e) {
		e.preventDefault()
		var datos = new FormData($(this)[0])
        

		$.ajax({
			url: 'ajax/ajaxFuncionarioo.php',
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
						text: 'Funcionario creado con éxito!'
					  }).then((result) => {
						if (result.value) {
							window.location = "funcionarioo"
						  }
					  })
						break;
					case "2":
					swal({
						type: 'error',
						title: 'Error',
						text: 'Funcionario ya registrado'
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
							window.location = "funcionarioo"
						}
					  })
				}
			}

		})

	})


	$("#formu-editar-Funcionarioo").submit(function (e) {
		e.preventDefault()

		var datos = new FormData($(this)[0])

        

        

		$.ajax({
			url: 'ajax/ajaxFuncionarioo.php',
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
					  text: 'Funcionarioo actualizado con éxito'
					}).then((result) => {
					  if (result.value) {
					    window.location = "funcionarioo"
					  }
					})
				}
			}

		})

	})



	$("body .table-dark").on("click", ".btnEditarFuncionarioo", function(){
		var idFuncionarioo = $(this).attr("idFuncionarioo")
		var datos = new FormData()
		datos.append("id_Funcionarioo", idFuncionarioo)
		datos.append("tipoOperacion", "editarFuncionarioo")

		$.ajax({
			url: 'ajax/ajaxFuncionarioo.php',
			type: 'POST',
			data: datos,
			processData: false,
			contentType: false,
			success: function(respuesta) {
				var valor = JSON.parse(respuesta)
				console.log(valor.id_Funcionarioo)
				console.log(valor.rutFuncionarioo)
				//24-08-2018 no trae datos de la base de datos.
				//19-10-2018 se hace una correccion de codigo en el modal de item armas, borrando style="display: none que este no permitia traer la imagen para ser visualizada en el modal.
				$('#formu-editar-Funcionarioo input[name="rutFuncionarioo"]').val(valor.rutFuncionarioo)
				$('#formu-editar-Funcionarioo input[name="nombreFuncionarioo"]').val(valor.nombreFuncionarioo)
			
				$('#formu-editar-Funcionarioo input[name="apellidoFuncionarioo"]').val(valor.apellidoFuncionarioo)
				$('#formu-editar-Funcionarioo select[name="conductor"]').val(valor.conductor)
				$('#formu-editar-Funcionarioo select[name="gradoFuncionarioo"]').val(valor.gradoFuncionarioo)
				$('#formu-editar-Funcionarioo select[name="estado_CivilFuncionarioo"]').val(valor.estado_CivilFuncionarioo)
				$('#formu-editar-Funcionarioo #imagenFuncionarioo').attr("src", valor.imagen)
				$('#formu-editar-Funcionarioo input[name="id_Funcionarioo"]').val(valor.id_Funcionarioo)
				$('#formu-editar-Funcionarioo input[name="rutaActual"]').val(valor.imagen)

			}

		})

	})

	$("body .table-dark").on("click", ".btnEliminarFuncionarioo", function(){
		var idFuncionarioo = $(this).attr("idFuncionarioo")
		var rutaImagen = $(this).attr("rutaImagen")
		console.log(rutaImagen);
		console.log("rutaImagen")
		var datos = new FormData()
		datos.append("id_Funcionarioo", idFuncionarioo);
		datos.append("tipoOperacion", "eliminarFuncionarioo");
		datos.append("rutaImagen", rutaImagen);
		swal({
		  title: '¿Estás seguro de eliminars?',
		  text: "Los cambios no son reversibles!",
		  type: 'warning',
		  showCancelButton: true,
		  confirmButtonColor: '#3085d6',
		  cancelButtonColor: '#d33',
		  confirmButtonText: 'Si, Eliminar!'
		}).then((result) => {
		  if (result.value) {
		  	$.ajax({
				url: 'ajax/ajaxFuncionarioo.php',
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
						    window.location = "funcionarioo"
						  }
						})
					}
				}

			})
		  }
		})




		

	})


	// PREVISUALIZAR IMAGENES

	$("#imagen").change(previsualizarImg)
	$("#imagenEditar").change(previsualizarImg)


	function previsualizarImg(e) {
		var contenedor = e.target.parentNode

		var identificador = contenedor.classList[1]

		imgFuncionarioo = this.files[0];

			if( imgFuncionarioo["type"] != "image/jpeg" && imgFuncionarioo["type"] != "image/png") {
				$("#custom").val("")

				swal({
					type: 'error',
					title: 'No es una imagen!!',
					text: 'Debe subir imagenes en formato JPEG o PNG',
				})
			} 
			if ( imgFuncionarioo["type"] > 2000000) {
				$("#imagenFuncionarioo").val("")

				swal({
					type: "Error al subir la imagen",
					text: "La imagen debe pesar MAX 2MB",
					icon: 'error',
					confirmButtonText: "¡Cerrar!",
				})
			}

			else {
				$("#imagenFuncionarioo").css("display", "block")

				var datosImagen = new FileReader;
		  		datosImagen.readAsDataURL(imgFuncionarioo);

		  		$(datosImagen).on("load", function(event){

		  			var rutaImagen = event.target.result;

		  			$("." + identificador +" #imagenFuncionarioo").attr("src", rutaImagen);
		  		})
			}

		}
	
	
		
})