$(document).ready(function(){
	$("#formu-nuevo-crearAcc").submit(function (e) {
		e.preventDefault()
		var datos = new FormData($(this)[0])

console.log(datos)
		$.ajax({
			url: 'ajax/ajaxcrearAcc.php',
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
						text: 'crearAcc creada con exito!'
					  }).then((result) => {
						if (result.value) {
							window.location = "crearAcc"
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

						}
					  })
				}
			}

		})

	})

	$("body .table-dark").on("click", ".btnEliminarcrearAcc", function(){
		var idcrearAcc = $(this).attr("idcrearAcc")

		var datos = new FormData()
		datos.append("id_crearAcc", idcrearAcc);
		datos.append("tipoOperacion", "eliminarcrearAcc");
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
				url: 'ajax/ajaxcrearAcc.php',
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
						    window.location = "crearAcc"
						  }
						})
					}
				}

			})
		  }
		})






	})

	$("#formu-editar-crearAcc").submit(function (e) {
		e.preventDefault()

		var datos = new FormData($(this)[0])

		$.ajax({
			url: 'ajax/ajaxcrearAcc.php',
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
					  text: 'crearAcc actualizado con éxito'
					}).then((result) => {
					  if (result.value) {
					    window.location = "crearAcc"
					  }
					})
				}
			}

		})

	})


	$("body .table-dark").on("click", ".btnEditarcrearAcc", function(){
		var idcrearAcc = $(this).attr("idcrearAcc");

		var datos = new FormData()
		datos.append("id_crearAcc", idcrearAcc)
		datos.append("tipoOperacion", "editarcrearAcc")
		$.ajax({
			url: 'ajax/ajaxcrearAcc.php',
			type: 'POST',
			data: datos,
			processData: false,
			contentType: false,
			success: function(respuesta) {
				console.log(respuesta);
				var valor = JSON.parse(respuesta)
				console.log(valor.id_crearAcc)
				console.log(valor.seriecrearAcc)

				$('#formu-editar-crearAcc input[name="codigoCrearAcc"]').val(valor.codigoCrearAcc)
				$('#formu-editar-crearAcc input[name="nombreCrearAcc"]').val(valor.nombreCrearAcc)
        $('#formu-editar-crearAcc textarea[name="descripcionCrearAcc"]').val(valor.descripcionCrearAcc)
      

        

				$('#formu-editar-crearAcc input[name="id_crearAcc"]').val(valor.id_crearAcc)

			}

		})

	})
})