$(document).ready(function(){
	$("#formu-nuevo-Chalecos").submit(function (e) {
		e.preventDefault()
		var datos = new FormData($(this)[0])
console.log(datos)
		$.ajax({
			url: 'ajax/ajaxChalecos.php',
			type: 'POST',
			data: datos,
			processData: false,
			contentType: false,
			success: function(respuesta) {
				console.log(respuesta)
			/*Cuando obtenemos uma respuesta el switch se activa */

				switch(respuesta) {
					case "1":
					swal({
						type: 'success',
						title: 'Excelente',
						text: 'Marca y Modelo creado con éxito!'
					  }).then((result) => {
						if (result.value) {
							window.location = "chalecos"
						  }
					  })
						break;
					case "2":
					swal({
						type: 'error',
						title: 'Error',
						text: 'Marca ya registrado'
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
						  window.location = "chalecos"
						}
					  })
				}
			}

		})

	})
/*Al presionar el boton con id btnEliminarChalecos obtenemos su id ,y seleccionamos la opcion eliminarItemChalecos */

	$("body .table-dark").on("click", ".btnEliminarChalecos", function(){
		var idChalecos = $(this).attr("idChalecos")

		var datos = new FormData()
		datos.append("id_Chalecos", idChalecos);
		datos.append("tipoOperacion", "eliminarChalecos");
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
				url: 'ajax/ajaxChalecos.php',
				type: 'POST',
				data: datos,
				processData: false,
				contentType: false,
				success: function(respuesta) {
					console.log(respuesta)
					if ( respuesta == "ok") {
						swal(
					      'Eliminado!',
					      'Su archivo a sido eliminado.',
					      'success'
					    ).then((result) => {
						  if (result.value) {
						    window.location = "chalecos"
						  }
						})
					}
				}

			})
		  }
		})




		

	})

/*Esperamos la respuesta si tiene valos de Ok la operacion ha sido exitosa */


		$("#formu-editar-Chalecos").submit(function (e) {
		e.preventDefault()

		var datos = new FormData($(this)[0])

		$.ajax({
			url: 'ajax/ajaxChalecos.php',
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
					  text: 'Marca o Modelo actualizado con éxito'
					}).then((result) => {
					  if (result.value) {
					    window.location = "chalecos"
					  }
					})
				}
			}

		})

	})

/*Al presionar el botono con id btnEditarChalecos nos selecionara la operacion editarChalecos que obtendra los valores a traves de una consulta segun su id */

	$("body .table-dark").on("click", ".btnEditarChalecos", function(){
		var id_Chalecos = $(this).attr("id_Chalecos");
		console.log(id_Chalecos)
		var datos = new FormData()
		datos.append("id_Chalecos", id_Chalecos)
		datos.append("tipoOperacion", "editarChalecos")
		$.ajax({
			url: 'ajax/ajaxChalecos.php',
			type: 'POST',
			data: datos,
			processData: false,
			contentType: false,
			success: function(respuesta) {
				console.log(respuesta);
				var valor = JSON.parse(respuesta)
				console.log(valor.id_Chalecos)
		

				$('#formu-editar-Chalecos input[name="escudoMarca"]').val(valor.escudoMarca)
				$('#formu-editar-Chalecos input[name="escudoModelo"]').val(valor.escudoModelo)
				$('#formu-editar-Chalecos input[name="id_Chalecos"]').val(valor.id_Chalecos)

		

			}

		})

	})








	// PREVISUALIZAR IMAGENES

	$("#imagen").change(previsualizarImg)
	$("#imagenEditar").change(previsualizarImg)
	function previsualizarImg(e) {
		var contenedor = e.target.parentNode

		var identificador = contenedor.classList[1]
		imgChalecos = this.files[0];
			if( imgChalecos["type"] != "image/jpeg" && imgChalecos["type"] != "image/png") {
				$("#custom").val("")

				swal({
					type: 'error',
					title: 'No es una imagen!!',
					text: 'Debe subir imagenes en formato JPEG o PNG',
				})
			} 
			if ( imgChalecos["type"] > 2000000) {
				$("#imagenChalecos").val("")

				swal({
					type: "Error al subir la imagen",
					text: "La imagen debe pesar MAX 2MB",
					icon: 'error',
					confirmButtonText: "¡Cerrar!",
				})
			}

			else {
				$("#imagenChalecos").css("display", "block")

				var datosImagen = new FileReader;
		  		datosImagen.readAsDataURL(imgChalecos);

		  		$(datosImagen).on("load", function(event){

		  			var rutaImagen = event.target.result;

		  			$("." + identificador +" #imagenChalecos").attr("src", rutaImagen);
		  		})
			}

		}
	
	
		
})