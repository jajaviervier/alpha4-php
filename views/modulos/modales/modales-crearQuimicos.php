<div class="modal fade" id="modal-insertar-CrearQuimicos"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
      <button type="button" class="close" title="Cerrar Modal" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h5 class="modal-title" id="exampleModalLabel">Insertar CrearQuimicos</h5>
       
      </div>
      <div class="modal-body">
        <form id="formu-nuevo-CrearQuimicos">
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Codigo</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" placeholder="Ingresar serie " required maxlength="20" name="serieCrearQuimicos">
            </div>
          </div>
     
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Tipo</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" placeholder="Ingresar Tipo " required  maxlength="20"name="tipoCrearQuimicos">
            </div>
          </div>
        
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Calibre</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" placeholder="Ingresar Calibre " required maxlength="20"name="calibreCrearQuimicos">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Marca</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" placeholder="Ingresar Marca" required maxlength="20"name="marcaCrearQuimicos">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Modelo</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" placeholder="Ingresar Modelo" required maxlength="20"name="modeloCrearQuimicos">
            </div>
          </div>
        

          
          <input type="hidden" name="tipoOperacion" value="insertarCrearQuimicos">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-primary">Registrar</button>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- EDITAR CrearQuimicos -->
<div class="modal fade" id="modal-editar-CrearQuimicos"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
      <button type="button" class="close" title="Cerrar Modal" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h5 class="modal-title" id="exampleModalLabel">Editar CrearQuimicos</h5>
      
      </div>
      <div class="modal-body">
        <form id="formu-editar-CrearQuimicos">
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Codigo</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" placeholder="Ingresar serie " required maxlength="20" name="serieCrearQuimicos">
            </div>
          </div>
     
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Tipo</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" placeholder="Ingresar Tipo " required maxlength="20"name="tipoCrearQuimicos">
            </div>
          </div>
        
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Calibre</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" placeholder="Ingresar Calibre " required maxlength="20"name="calibreCrearQuimicos">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Marca</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" placeholder="Ingresar Marca" required maxlength="20"name="marcaCrearQuimicos">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Modelo</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" placeholder="Ingresar Modelo" required maxlength="20"name="modeloCrearQuimicos">
            </div>
          </div>
      
          <input type="hidden" name="tipoOperacion" value="actualizarCrearQuimicos">
         
          <input type="hidden" name="id_CrearQuimicos">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-primary">Actualizar</button>
        </form>
      </div>
    </div>
  </div>
</div>
