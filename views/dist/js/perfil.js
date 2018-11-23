$(document).ready(function(){



	$("#formu-editar-perfil").submit(function (e) {
		e.preventDefault()

		var datos = new FormData($(this)[0])

		$.ajax({
			url: 'ajax/ajaxperfil.php',
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
					  text: 'Perfil actualizado con éxito'
					}).then((result) => {
					  if (result.value) {
					    window.location = "editarperfil"
					  }
					})
				}
			}

		})

	})

	$("body .table-dark").on("click", ".btnEditarPerfil", function(){
		var id_usuario = $(this).attr("id_usuario")
		var datos = new FormData()
		datos.append("id_usuario", id_usuario)
		datos.append("tipoOperacion", "editarPerfil")

		$.ajax({
			url: 'ajax/ajaxperfil.php',
			type: 'POST',
			data: datos,
			processData: false,
			contentType: false,
			success: function(respuesta) {
				var valor = JSON.parse(respuesta)
				console.log(valor.id_usuario)
			
				//24-08-2018 no trae datos de la base de datos.
				//19-10-2018 se hace una correccion de codigo en el modal de item armas, borrando style="display: none que este no permitia traer la imagen para ser visualizada en el modal.
				$('#formu-editar-perfil input[name="nombre"]').val(valor.nombre)
				$('#formu-editar-perfil input[name="correo"]').val(valor.correo)	
				$('#formu-editar-perfil input[name="contraseña"]').val(valor.contraseña)	

				$('#formu-editar-perfil #imagen').attr("src", valor.imagen)
				$('#formu-editar-perfil input[name="id_usuario"]').val(valor.id_usuario)
				$('#formu-editar-perfil input[name="rutaActual"]').val(valor.imagen)

			}

		})

	})






// PREVISUALIZAR IMAGENES

	$("#imagen").change(previsualizarImg)
	$("#imagenEditar").change(previsualizarImg)


	function previsualizarImg(e) {
		var contenedor = e.target.parentNode

		var identificador = contenedor.classList[1]

		imgPerfil = this.files[0];

			if( imgPerfil["type"] != "image/jpeg" && imgPerfil["type"] != "image/png") {
				$("#custom").val("")

				swal({
					type: 'error',
					title: 'No es una imagen!!',
					text: 'Debe subir imagenes en formato JPEG o PNG',
				})
			} 
			if ( imgPerfil["type"] > 2000000) {
				$("#imagen").val("")

				swal({
					type: "Error al subir la imagen",
					text: "La imagen debe pesar MAX 2MB",
					icon: 'error',
					confirmButtonText: "¡Cerrar!",
				})
			}

			else {
				$("#imagen").css("display", "block")

				var datosImagen = new FileReader;
		  		datosImagen.readAsDataURL(imgPerfil);

		  		$(datosImagen).on("load", function(event){

		  			var rutaImagen = event.target.result;

		  			$("." + identificador +" #imagen").attr("src", rutaImagen);
		  		})
			}

		}
	


})

