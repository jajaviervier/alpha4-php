$(document).ready(function(){
	$("#formu-nuevo-itemChalecos").submit(function (e) {
		e.preventDefault()
		var datos = new FormData($(this)[0])
		$.ajax({
			
			url: 'ajax/ajaxItemChalecos.php',
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
						text: 'Chaleco creado con éxito!'
					  }).then((result) => {
						if (result.value) {
							window.location = "itemChalecos"
						  }
					  })
						break;
					case "2":
					swal({
						type: 'error',
						title: 'Error',
						text: 'Numero de Serie ya registrado'
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
						  window.location = "itemChalecos"
						}
					  })
				}
			}

		})

	})
/*Al presionar el boton con id btnEliminarChalecos obtenemos su id ,y seleccionamos la opcion eliminarItemChalecos */

	$("body .table-dark").on("click", ".btnEliminarItemChalecos", function(){
		var idChalecos = $(this).attr("idItemChalecos")

		var datos = new FormData()
		datos.append("id_itemChalecos", idChalecos);
		datos.append("tipoOperacion", "eliminarItemChalecos");
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
				url: 'ajax/ajaxItemChalecos.php',
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
						    window.location = "itemChalecos"
						  }
						})
					}
				}

			})
		  }
		})




		

	})



		$("#formu-editar-itemChalecos").submit(function (e) {
		e.preventDefault()

		var datos = new FormData($(this)[0])

		$.ajax({
			url: 'ajax/ajaxItemChalecos.php',
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
					  text: 'Datos de Escudo actualizado con éxito'
					}).then((result) => {
					  if (result.value) {
					    window.location = "itemChalecos"
					  }
					})
				}
			}

		})

	})


	$("body .table-dark").on("click", ".btnEditarItemChalecos", function(){
		var idItemChalecos = $(this).attr("idItemChalecos");
		console.log(idItemChalecos)
		var datos = new FormData()
		datos.append("idItemChalecos", idItemChalecos)
		datos.append("tipoOperacion", "editarItemChalecos")
		$.ajax({
			url: 'ajax/ajaxItemChalecos.php',
			type: 'POST',
			data: datos,
			processData: false,
			contentType: false,
			success: function(respuesta) {
				console.log(respuesta);
				var valor = JSON.parse(respuesta)
				console.log(valor.id_itemChalecos)
				console.log(valor.marca)
				console.log(valor.modelo)

				console.log(valor.estado)
				console.log(valor.id_chalecos)



		

				$('#formu-editar-itemChalecos input[name="SerieItemChalecos"]').val(valor.serie)
			

		        $('#formu-editar-itemChalecos select[name="estado"] option:selected').text(valor.estado)
				$('#formu-editar-itemChalecos select[name="estado"] option:selected').val(valor.estado)
				
			     $('#formu-editar-itemChalecos select[name="marca"] option:selected').text(valor.marca+"-"+valor.modelo)
			     

				$('#formu-editar-itemChalecos select[name="marca"] option:selected').val(valor.id_chalecos)


				$('#formu-editar-itemChalecos input[name="id_itemChalecos"]').val(valor.id_itemChalecos)


		

			}

		})

	})

	//--------------------------ACTUALIZAR ITEMCHALECO PARA ASIGNAR A UN FUNCIONARIO--------------------
	$("#formu-editar-Fun").submit(function (e) {
		e.preventDefault()

		var datos = new FormData($(this)[0])

		$.ajax({
			url: 'ajax/ajaxItemChalecos.php',
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
					  text: 'Datos de Escudo actualizado con éxito'
					}).then((result) => {
					  if (result.value) {
					    window.location = "itemChalecos"
					  }
					})
				}
			}

		})

	})


	$("body .table-dark").on("click", ".btnEditarFun", function(){
		var idItemChalecos = $(this).attr("idchaleco_funcionario");
		console.log(idItemChalecos)
		var datos = new FormData()
		datos.append("idchaleco_funcionario", idItemChalecos)
		datos.append("tipoOperacion", "editarFun")
		$.ajax({
			url: 'ajax/ajaxItemChalecos.php',
			type: 'POST',
			data: datos,
			processData: false,
			contentType: false,
			success: function(respuesta) {
				console.log(respuesta);
				var valor = JSON.parse(respuesta)
				console.log(valor.id_itemChalecos)
				console.log(valor.marca)
				console.log(valor.modelo)

				console.log(valor.estado)
				console.log(valor.id_chalecos)



		

				$('#formu-editar-itemChalecos input[name="SerieItemChalecos"]').val(valor.serie)
			

		        $('#formu-editar-itemChalecos select[name="estado"] option:selected').text(valor.estado)
				$('#formu-editar-itemChalecos select[name="estado"] option:selected').val(valor.estado)
				
			     $('#formu-editar-itemChalecos select[name="marca"] option:selected').text(valor.marca+"-"+valor.modelo)
			     

				$('#formu-editar-itemChalecos select[name="marca"] option:selected').val(valor.id_chalecos)


				$('#formu-editar-itemChalecos input[name="id_itemChalecos"]').val(valor.id_itemChalecos)


		

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
				$("#imagenItemChalecos").val("")

				swal({
					type: "Error al subir la imagen",
					text: "La imagen debe pesar MAX 2MB",
					icon: 'error',
					confirmButtonText: "¡Cerrar!",
				})
			}

			else {
				$("#imagenItemChalecos").css("display", "block")

				var datosImagen = new FileReader;
		  		datosImagen.readAsDataURL(imgChalecos);

		  		$(datosImagen).on("load", function(event){

		  			var rutaImagen = event.target.result;

		  			$("." + identificador +" #imagenItemChalecos").attr("src", rutaImagen);
		  		})
			}

		}
	
	
		
})