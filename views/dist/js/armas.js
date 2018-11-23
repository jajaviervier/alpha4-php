$(document).ready(function(){
	$("#formu-nuevo-armas").submit(function (e) {
		e.preventDefault()
		var datos = new FormData($(this)[0])
	
console.log(datos)
		$.ajax({
			url: 'ajax/ajaxArmas.php',
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
						text: 'Arma creada con exito!'
					  }).then((result) => {
						if (result.value) {
							window.location = "armas"
						  }
					  })
						break;
					case "2":
					swal({
						type: 'error',
						title: 'Error',
						text: 'Arma ya registrada'//se muestra un mensaje si el dato ya existe!
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
						  window.location = "armas"
						}
					  })
				}
			}

		})

	})

	$("body .table-dark").on("click", ".btnEliminarArmas", function(){
		var idArmas = $(this).attr("idArmas")

		var datos = new FormData()
		datos.append("id_armas", idArmas);
		datos.append("tipoOperacion", "eliminarArmas");
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
				url: 'ajax/ajaxArmas.php',
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
						    window.location = "armas"
						  }
						})
					}
				}

			})
		  }
		})




		

	})

	$("#formu-editar-armas").submit(function (e) {
		e.preventDefault()

		var datos = new FormData($(this)[0])

		$.ajax({
			url: 'ajax/ajaxArmas.php',
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
					  text: 'Armas actualizado con éxito'
					}).then((result) => {
					  if (result.value) {
					    window.location = "armas"
					  }
					})
				}
			}

		})

	})


	$("body .table-dark").on("click", ".btnEditarArmas", function(){
		var idArmas = $(this).attr("idArmas");
	
		var datos = new FormData()
		datos.append("id_Armas", idArmas)
		datos.append("tipoOperacion", "editarArmas")
		$.ajax({
			url: 'ajax/ajaxArmas.php',
			type: 'POST',
			data: datos,
			processData: false,
			contentType: false,
			success: function(respuesta) {
				console.log(respuesta);
				var valor = JSON.parse(respuesta)
				console.log(valor.id_Armas)
				console.log(valor.marca)

				$('#formu-editar-armas input[name="marcaArmas"]').val(valor.marca)
				$('#formu-editar-armas input[name="modeloArmas"]').val(valor.modelo)
				$('#formu-editar-armas input[name="calibreArmas"]').val(valor.calibre)
				$('#formu-editar-armas input[name="id_Armas"]').val(valor.id_Armas)

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
		imgArmas = this.files[0];
			if( imgArmas["type"] != "image/jpeg" && imgArmas["type"] != "image/png") {
				$("#custom").val("")

				swal({
					type: 'error',
					title: 'No es una imagen!!',
					text: 'Debe subir imagenes en formato JPEG o PNG',
				})
			} 
			if ( imgArmas["type"] > 2000000) {
				$("#imagenArmas").val("")

				swal({
					type: "Error al subir la imagen",
					text: "La imagen debe pesar MAX 2MB",
					icon: 'error',
					confirmButtonText: "¡Cerrar!",
				})
			}

			else {
				$("#imagenArmas").css("display", "block")

				var datosImagen = new FileReader;
		  		datosImagen.readAsDataURL(imgArmas);

		  		$(datosImagen).on("load", function(event){

		  			var rutaImagen = event.target.result;

		  			$("." + identificador +" #imagenArmas").attr("src", rutaImagen);
		  		})
			}

		}
	
	*/
		
})