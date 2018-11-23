$(document).ready(function(){
	$("#formu-nuevo-AccEquipoRadio").submit(function (e) {
		e.preventDefault()
		var datos = new FormData($(this)[0])
	
console.log(datos)
		$.ajax({
			url: 'ajax/ajaxAccEquipoRadio.php',
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
						text: 'Equipos Radio creada con exito!'
					  }).then((result) => {
						if (result.value) {
							window.location = "accEquipoRadio"
						  }
					  })
						break;
					case "2":
					swal({
						type: 'error',
						title: 'Error',
						text: 'Equipo de radio ya registrada'//se muestra un mensaje si el dato ya existe!
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
						  window.location = "accEquipoRadio"
						}
					  })
				}
			}

		})

	})

	$("body .table-dark").on("click", ".btnEliminarAccEquipoRadio", function(){
		var idAccEquipoRadio = $(this).attr("idAccEquipoRadio")

		var datos = new FormData()
		datos.append("id_AccEquipoRadio", idAccEquipoRadio);
		datos.append("tipoOperacion", "eliminarAccEquipoRadio");
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
				url: 'ajax/ajaxAccEquipoRadio.php',
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
						    window.location = "accEquipoRadio"
						  }
						})
					}
				}

			})
		  }
		})




		

	})

	$("#formu-editar-AccEquipoRadio").submit(function (e) {
		e.preventDefault()

		var datos = new FormData($(this)[0])

		$.ajax({
			url: 'ajax/ajaxAccEquipoRadio.php',
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
					  text: ' Equipo Radio actualizado con éxito'
					}).then((result) => {
					  if (result.value) {
					    window.location = "accEquipoRadio"
					  }
					})
				}
			}

		})

	})


	$("body .table-dark").on("click", ".btnEditarAccEquipoRadio", function(){
		var idAccEquipoRadio = $(this).attr("idAccEquipoRadio");
	
		var datos = new FormData()
		datos.append("id_AccEquipoRadio", idAccEquipoRadio)
		datos.append("tipoOperacion", "editarAccEquipoRadio")
		$.ajax({
			url: 'ajax/ajaxAccEquipoRadio.php',
			type: 'POST',
			data: datos,
			processData: false,
			contentType: false,
			success: function(respuesta) {
				console.log(respuesta);
				var valor = JSON.parse(respuesta)
				console.log(valor.id_AccEquipoRadio)
				console.log(valor.marca)

				$('#formu-editar-AccEquipoRadio input[name="marcaAccEquipoRadio"]').val(valor.marca)
				$('#formu-editar-AccEquipoRadio input[name="modeloAccEquipoRadio"]').val(valor.modelo)
				$('#formu-editar-AccEquipoRadio textarea[name="calibreAccEquipoRadio"]').val(valor.calibre)
				$('#formu-editar-AccEquipoRadio input[name="id_AccEquipoRadio"]').val(valor.id_AccEquipoRadio)

			}

		})

	})







	// PREVISUALIZAR IMAGENES
/*
	$("#imagen").change(previsualizarImg)
	$("#imagenEditar").change(previsualizarImg)
	function previsualizarImg(e) {
		var contenedor = e.target.parentNode

		var identificador = contenedor.classList[1]
		imgAccEquipoRadio = this.files[0];
			if( imgAccEquipoRadio["type"] != "image/jpeg" && imgAccEquipoRadio["type"] != "image/png") {
				$("#custom").val("")

				swal({
					type: 'error',
					title: 'No es una imagen!!',
					text: 'Debe subir imagenes en formato JPEG o PNG',
				})
			} 
			if ( imgAccEquipoRadio["type"] > 2000000) {
				$("#imagenAccEquipoRadio").val("")

				swal({
					type: "Error al subir la imagen",
					text: "La imagen debe pesar MAX 2MB",
					icon: 'error',
					confirmButtonText: "¡Cerrar!",
				})
			}

			else {
				$("#imagenAccEquipoRadio").css("display", "block")

				var datosImagen = new FileReader;
		  		datosImagen.readAsDataURL(imgAccEquipoRadio);

		  		$(datosImagen).on("load", function(event){

		  			var rutaImagen = event.target.result;

		  			$("." + identificador +" #imagenAccEquipoRadio").attr("src", rutaImagen);
		  		})
			}

		}
	
	*/
		
})