<div class="modal fade" id="modal-insertar-Quimicos"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
      <button type="button" class="close" title="Cerrar Modal" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h5 class="modal-title" id="exampleModalLabel">Insertar Quimicos</h5>
       
      </div>
      <div class="modal-body">
        <form id="formu-nuevo-Quimicos">
          <div class="form-group row">
          <label class="col-sm-2 col-form-label" >Tipo de Quimico</label>
                <div class="col-sm-10">
                    <select class="form-control" name="serieQuimicos" id="serieQuimicos">
                    <option value="2" class="form-control">Seleccione </option>
                    <?php
                    $itemaCrearAcc = ControllerCrearQuimicos::listarCrearQuimicosCtr();
                    foreach ($itemaCrearAcc as $key => $value) {
                    echo '
                    <option value="'.$value["codigo"].'">
                    '.$value["codigo"].' / '.$value["tipo"].' / '.$value["modelo"].'
                    </option>
                    ';
                    }

                    ?>
                    </select>

                </div>

              </div>
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Cantidad</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" placeholder="Ingresar Cantidad" required maxlength="20" name="cantidadQuimicos">
            </div>
          </div>
     
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Descripción</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" placeholder="Ingresar descripcion" maxlength="200" name="descripQuimicos">
            </div>
          </div>
        
        
         
        

        
          <input type="hidden" name="tipoOperacion" value="insertarQuimicos">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-primary">Registrar</button>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- EDITAR Quimicos -->
<div class="modal fade" id="modal-editar-Quimicos"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
      <button type="button" class="close" title="Cerrar Modal" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h5 class="modal-title" id="exampleModalLabel">Editar Quimicos</h5>
      
      </div>
      <div class="modal-body">
        <form id="formu-editar-Quimicos">
        <div class="form-group row">
          <label class="col-sm-2 col-form-label" >Tipo de Quimico</label>
                <div class="col-sm-10">
                    <select class="form-control" name="serieQuimicos" id="serieQuimicos">
                    <option value="2" class="form-control">Seleccione </option>
                    <?php
                    $itemaCrearAcc = ControllerCrearQuimicos::listarCrearQuimicosCtr();
                    foreach ($itemaCrearAcc as $key => $value) {
                    echo '
                    <option value="'.$value["codigo"].'">
                    '.$value["codigo"].' / '.$value["tipo"].' / '.$value["modelo"].'
                    </option>
                    ';
                    }

                    ?>
                    </select>

                </div>

              </div>
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Cantidad</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" placeholder="Ingresar Cantidad" required maxlength="20" name="cantidadQuimicos">
            </div>
          </div>
     
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Descripción</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" placeholder="Ingresar descripcion" maxlength="200" name="descripQuimicos">
            </div>
          </div>
      
          <input type="hidden" name="tipoOperacion" value="actualizarQuimicos">
         
          <input type="hidden" name="id_Quimicos">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-primary">Actualizar</button>
        </form>
      </div>
    </div>
  </div>
</div>
