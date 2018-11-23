
function subcategoriasSelect(llave){
	//creamos variable del contenido del select
	//contendrá todos los nombres de las subcategorias y sus id
	var contTable="";
	var datos = new FormData($(this)[0])
	datos.append("tipoOperacion", "seleccionarSubcategorias")

	datos.append("idArmasForanea", $('#optionSubca').val())
	



	datos.append("llave", llave);
	$.ajax({
		url: 'ajax/ajaxitemArmas.php',
		type: 'POST',
		data: datos,
		processData: false,
		contentType: false,
		success: function(respuesta) {
			console.log(JSON.parse(respuesta));
			datos=JSON.parse(respuesta);
			dat="<option>No existen subcategorias.</option>"
			datos.forEach( function(valor, indice, array) {
				dat=""
				contTable+="<option value='"+valor[0]+"'>"+valor[1]+"</option>"
				console.log("En el índice " + indice + " hay este valor: " + valor[1]);
		});

		contTable+=dat;
		$('#optionSubca').html(contTable);
			}
		})
}
$(document).ready(function(){


	$("#formu-nuevo-itemArmas").submit(function (e) {
		e.preventDefault()
		var datos = new FormData($(this)[0])
        
    datos.append("idArmasForanea", $('#optionSubca').val());
		$.ajax({
			url: 'ajax/ajaxitemArmas.php',
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
						text: 'Arma creado con éxito!'
					  }).then((result) => {
						if (result.value) {
							window.location = "itemArmas"
						  }
					  })
						break;
					case "2":
					swal({
						type: 'error',
						title: 'Error',
						text: 'Arma ya registrado'
					  }).then((result) => {
						if (result.value) {
						 
						}
					  })

						break;
					default:
					swal({
						type: 'error',
						title: 'Error',
						text: 'Algo salió mal, falta imagen!'
					  }).then((result) => {
						if (result.value) {
							
						}
					  })
				}
			}

		})

	})
	//--------insertar Funcionario  ----------------------
	$("#formu-edicion-itemArmas").submit(function (e) {
		e.preventDefault()

		var datos = new FormData($(this)[0])
		datos.append("id_funcionario", $('#id_funcionario').val());
		$.ajax({
			url: 'ajax/ajaxitemArmas.php',
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
					  text: 'Actualizado  con éxito'
					}).then((result) => {
					  if (result.value) {
					    window.location = "itemArmas"
					  }
					})
				}
			}

		})

	})



	$("body .table-dark").on("click", ".btninsertarFuncionario", function(){
		var iditemArmas = $(this).attr("idinsertFuncionario")
		var datos = new FormData()
		datos.append("id_itemArmas", iditemArmas)
		datos.append("tipoOperacion", "actualizarFuncionario")

		$.ajax({
			url: 'ajax/ajaxitemArmas.php',
			type: 'POST',
			data: datos,
			processData: false,
			contentType: false,
			success: function(respuesta) {
				var valor = JSON.parse(respuesta)
				console.log(valor.id_itemArmas)
				console.log(valor.serieitemArmas)
				//24-08-2018 no trae datos de la base de datos.
				//19-10-2018 se hace una correccion de codigo en el modal de item armas, borrando style="display: none que este no permitia traer la imagen para ser visualizada en el modal.
				$('#formu-editar-itemArmas input[name="serieitemArmas"]').val(valor.serieitemArmas)
		

			}

		})

	})


	$("#formu-editar-itemArmas").submit(function (e) {
		e.preventDefault()

		var datos = new FormData($(this)[0])

		$.ajax({
			url: 'ajax/ajaxitemArmas.php',
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
					  text: 'itemArmas actualizado con éxito'
					}).then((result) => {
					  if (result.value) {
					    window.location = "itemArmas"
					  }
					})
				}
			}

		})

	})



	$("body .table-dark").on("click", ".btnEditaritemArmas", function(){
		var iditemArmas = $(this).attr("iditemArmas")
		var datos = new FormData()
		datos.append("id_itemArmas", iditemArmas)
		datos.append("tipoOperacion", "editaritemArmas")

		$.ajax({
			url: 'ajax/ajaxitemArmas.php',
			type: 'POST',
			data: datos,
			processData: false,
			contentType: false,
			success: function(respuesta) {
				var valor = JSON.parse(respuesta)
				console.log(valor.id_itemArmas)
				console.log(valor.serieitemArmas)
				//24-08-2018 no trae datos de la base de datos.
				//19-10-2018 se hace una correccion de codigo en el modal de item armas, borrando style="display: none que este no permitia traer la imagen para ser visualizada en el modal.
				$('#formu-editar-itemArmas input[name="serieitemArmas"]').val(valor.serieitemArmas)
				$('#formu-editar-itemArmas input[name="tipoitemArmas"]').val(valor.tipoitemArmas)
				$('#formu-editar-itemArmas select[name="idArmasForanea"]').val(valor.idArmasForanea)
				$('#formu-editar-itemArmas select[name="id_funcionario"]').val(valor.id_funcionario)
				$('#formu-editar-itemArmas select[name="estado"]').val(valor.estado)
				$('#formu-editar-itemArmas textarea[name="observacionitemArma"]').val(valor.observacion)
				$('#formu-editar-itemArmas #imagenitemArmas').attr("src", valor.imagen)
				$('#formu-editar-itemArmas input[name="id_itemArmas"]').val(valor.id_itemArmas)
				$('#formu-editar-itemArmas input[name="rutaActual"]').val(valor.imagen)

			}

		})

	})

	$("body .table-dark").on("click", ".btnEliminaritemArmas", function(){
		var iditemArmas = $(this).attr("iditemArmas")
		var rutaImagen = $(this).attr("rutaImagen")
		console.log(rutaImagen);
		console.log("rutaImagen")
		var datos = new FormData()
		datos.append("id_itemArmas", iditemArmas);
		datos.append("tipoOperacion", "eliminaritemArmas");
		datos.append("rutaImagen", rutaImagen);
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
				url: 'ajax/ajaxitemArmas.php',
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
						    window.location = "itemArmas"
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

		imgitemArmas = this.files[0];

			if( imgitemArmas["type"] != "image/jpeg" && imgitemArmas["type"] != "image/png") {
				$("#custom").val("")

				swal({
					type: 'error',
					title: 'No es una imagen!!',
					text: 'Debe subir imagenes en formato JPEG o PNG',
				})
			} 
			if ( imgitemArmas["type"] > 2000000) {
				$("#imagenitemArmas").val("")

				swal({
					type: "Error al subir la imagen",
					text: "La imagen debe pesar MAX 2MB",
					icon: 'error',
					confirmButtonText: "¡Cerrar!",
				})
			}

			else {
				$("#imagenitemArmas").css("display", "block")

				var datosImagen = new FileReader;
		  		datosImagen.readAsDataURL(imgitemArmas);

		  		$(datosImagen).on("load", function(event){

		  			var rutaImagen = event.target.result;

		  			$("." + identificador +" #imagenitemArmas").attr("src", rutaImagen);
		  		})
			}

		}
	
	
		
})