<div class="modal fade" id="modal-insertar-armas"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
      <button type="button" class="close" title="Cerrar Modal" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h5 class="modal-title " id="exampleModalLabel">Registrar Nueva Categorías Armas</h5>
        <!--   correguir booton cerar al extremo superiro derecho del modal registrar armas, hacer mas visible el booton-->
        
      </div>
      <div class="modal-body">
        <form id="formu-nuevo-armas">
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Marca</label>
            <div class="col-sm-10">
             <!--17-10-2018 validacion de campo ingresar arma de una longitud de 20 caracteres alfa numerico-->
              <input type="text" class="form-control"  placeholder="Ingresar Marca " required  maxlength="20" name="marcaArmas">
            </div>
          </div>
     
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Modelo</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" placeholder="Ingresar Modelo " required  maxlength="20" name="modeloArmas">
            </div>
          </div>
        
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Calibre</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" placeholder="Ingresar Calibre " required  maxlength="20" name="calibreArmas">
            </div>
          </div>
      
         

          
         
       
          <input type="hidden" name="tipoOperacion" value="insertarArmas">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-primary">Registrar</button>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- EDITAR ARMAS -->
<div class="modal fade" id="modal-editar-armas"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
      <button type="button" class="close" title="Cerrar Modal" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span> <!---ajustar y hacer mas visible icono cerrar  --->
        </button>
        <h5 class="modal-title" id="exampleModalLabel">Editar Armas</h5>
        
      </div>
      <div class="modal-body">
        <form id="formu-editar-armas">
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Marca</label>
            <div class="col-sm-10"><!---se dio un total de 20 de margen  --->
              <input type="text" class="form-control" placeholder="Ingresar Marca " required  maxlength="20" name="marcaArmas">
            </div>
          </div>
     
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Modelo</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" placeholder="Ingresar Modelo " required  maxlength="20" name="modeloArmas">
            </div>
          </div>
        
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Calibre</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" placeholder="Ingresar Calibre " required  maxlength="20" name="calibreArmas">
            </div>
          </div>
      
         
       
          <input type="hidden" name="tipoOperacion" value="actualizarArmas">
         
          <input type="hidden" name="id_Armas">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-primary">Actualizar</button>
        </form>
      </div>
    </div>
  </div>
</div>
