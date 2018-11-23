<div class="modal fade" id="modal-insertar-cascos"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Registrar nuevo casco</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="formu-nuevo-cascos">     
         
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">marca_modelo y observacion</label>
            <div class="col-sm-10">
				
			<select class="form-control" name="marca_modelo" id="marca_modelo">
    
      <?php        
          $cascositem = ControllerCascositem::listarCascositemCtr();
            foreach ($cascositem as $key => $value) {
            echo '
              <option value="'.$value["id_cascoItem"].'">
              '.$value["marca_item"].' - '.$value["modelo_item"].'
              </option>
            ';
          }

       ?>
           </select> 	
           

            </div>
          </div>


          
   
     
          <div class="form-group row">
            <label class="col-sm-2 col-form-label" >Serie</label>
          <div class="col-sm-10">
             
       
          <input type="text" class="form-control" name="serie" placeholder="Ingrese nùmero de serie del casco" maxlength="20" required>
        
            </div>
          </div>      
        
          <div class="form-group row">
            <label class="col-sm-2 col-form-label" >Observación</label>
            <div class="col-sm-10">
              
          <!-- <input type="text" class="form-control" name="observacion" placeholder="Ingrese observación"> -->
            <textarea class="form-control" id="observacion" name="observacion" placeholder="Ingrese observación del Casco" rows="5" maxlength="200"></textarea>
            
            </div>
          </div>
          
          <input type="hidden" name="tipoOperacion" value="insertarCascos">
          
          
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Registrar</button>
        </div>
        </form>
    </div>
  </div>
</div>




<!-- formulario editar casco-->
<div class="modal fade" id="modal-editar-cascos"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar casco</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="formu-editar-cascos">     
         
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">marca_modelo y observacion</label>
            <div class="col-sm-10">
          <!--
          <select id="marca_modelo" name="marca_modelo" class='form-control'>
				<option value="DARGER">DARGER</option>
		  </select>	
		  -->
		  <select class="form-control" name="marca_modelo" id="selectMarcaEditarCascos">
    
      <?php        
          $cascositem = ControllerCascositem::listarCascositemCtr();
            foreach ($cascositem as $key => $value) {
            echo '
              <option value="'.$value["id_cascoItem"].'">
              '.$value["marca_item"].' - '.$value["modelo_item"].'
              </option>
            ';
          }

       ?>
           </select> 	
          <!--
            <input type="text" id="marca_modelo" name="marca_modelo" placeholder="Ingrese marca_modelo del casco">
          -->  
            </div>
          </div>
       
         
          <div class="form-group row">
            <label class="col-sm-2 col-form-label" >Serie</label>
          <div class="col-sm-10">
             
       
          <input type="text" class="form-control" name="serie" placeholder="Ingrese nùmero de serie del casco" maxlength="20">
        
            </div>
          </div> 
          
          <div class="form-group row">
            <label class="col-sm-2 col-form-label" >Estado</label>
            <div class="col-sm-10">
          
            <select class="form-control" name="estado_casco" id="estado_casco">
				<option value='0'>Operativo</option>
                <option value='1'>En merma</option>
            </select> 
          
            </div>
          </div>  
          
          <div class="form-group row">
            <label class="col-sm-2 col-form-label" >Observación</label>
            <div class="col-sm-10">
        
          <!-- <input type="text" id="observacion" name="observacion" placeholder="Ingrese observación"> -->
          
          <textarea class="form-control" id="observacion" name="observacion" placeholder="Ingrese observación del Casco" rows="5" maxlength="200"></textarea>
          
            </div>
          </div> 
          <div class="form-group row" style="color:#014502;">
            <label class="col-sm-2 col-form-label">Asignar chaleco</label>
            <div class="col-sm-10">
            <select class="form-control" name="id_funcionario" id="id_funcionario" style="background-color:#71ff74;">
       <option value="0" class="form-control">Sin Asignar Funcionario...</option>
      <?php        
          $itemArmas = ControllerFuncionarioo::listarFuncionariooCtr();
          foreach ($itemArmas as $key => $value) {
            echo '
              <option value="'.$value["id_funcionario"].'">
              '.$value["rut"].' '.$value["nombre"].' '.$value["apellido"].'
              </option>
            ';
          }

          ?>
           </select>
          </div>
          </div>
          
       
          <input type="hidden" name="tipoOperacion" value="actualizarCascos">
          <input type="hidden" name="id_cascos">
         
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Actualizar</button>
        </div>
        </form>
    </div>
  </div>
</div>



<script>
	/*
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
	
	
	
</script>	
