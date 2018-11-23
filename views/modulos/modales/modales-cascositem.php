<div class="modal fade" id="modal-insertar-cascositem"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Registrar nuevo categoria casco</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="formu-nuevo-cascositem">     
         
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Marca</label>
            <div class="col-sm-10">
            <!-- se agrega el maximo de 30 caracteres al input marca--> 
            <input type="text" id="marca_item" autocomplete="off" name="marca_item" class="form-control" placeholder="Ingrese marca del casco" maxlength="20" required>

            </div>
          </div>

           <!-- se agrega el maximo de 30 caracteres al input modelo  --> 
          <div class="form-group row">
            <label class="col-sm-2 col-form-label" >Modelo</label>
            <div class="col-sm-10">
              
          <input type="text" id="modelo_item" autocomplete="off" name="modelo_item" class="form-control" placeholder="Ingrese modelo del casco" maxlength="20" required>

            </div>
          </div>
   
       
          <input type="hidden" name="tipoOperacion" value="insertarCascosItem">
         
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Registrar</button>
        </div>
        </form>
    </div>
  </div>
</div>




<!-- formulario editar casco item -->
<div class="modal fade" id="modal-editar-cascositem"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar item de casco</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="formu-editar-cascositem">   
        
          
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Marca</label>
            <div class="col-sm-10">
            <!-- se agrega el maximo de 30 caracteres al input marca--> 
            <input type="text" id="marca_item" autocomplete="off" name="marca_item" class="form-control" placeholder="Ingrese marca del casco" maxlength="20" required>

            </div>
          </div>

           <!-- se agrega el maximo de 30 caracteres al input modelo  --> 
          <div class="form-group row">
            <label class="col-sm-2 col-form-label" >Modelo</label>
            <div class="col-sm-10">
              
          <input type="text" id="modelo_item" autocomplete="off" name="modelo_item" class="form-control" placeholder="Ingrese modelo del casco" maxlength="20" required>

            </div>
          </div>
         
      
   
      
		   
          <input type="hidden" name="tipoOperacion" value="actualizarCascositem">
          <input type="hidden" name="id_cascos_item">
        
      </div>
      
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Actualizar</button>
      </div>
        </form>
    </div>
  </div>
</div>
<!-- formulario editar casco item -->

<script>
	
</script>	
