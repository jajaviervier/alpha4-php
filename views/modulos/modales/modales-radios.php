<div class="modal fade" id="modal-insertar-Radios"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
      <button type="button" class="close" title="Cerrar Modal" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h5 class="modal-title" id="exampleModalLabel">Insertar Radios</h5>
       
      </div>
      <div class="modal-body">
        <form id="formu-nuevo-Radios">
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Serie</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" placeholder="Ingrese serie " required maxlength="20" name="serieRadios">
            </div>
          </div>
     
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Modelo</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" placeholder="Ingrese  Modelo " required name="modeloRadios">
            </div>
          </div>
        
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Tipo de Equipo</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" placeholder="Ingrese el tipo de equipo " required name="tipoRadios">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">N° Serie GPS</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" placeholder="Ingrese numero de serie del GPS " required name="serieGPS_Radios">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Observacion</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" placeholder="Ingrese una observación  " required name="obserRadios">
            </div>
          </div>
          <div class="form-group row">
                <label class="col-sm-2 col-form-label" >Seleccione estado radio...</label>
                <div class="col-sm-10">
                <select name="estado" class="form-control">
                  <option value="">Seleccione estado radios</option>
                  <option value="En Terreno">En Terreno</option>
                  <option value="Bodega">Bodega</option>
                  <option value="Reparacion">Reparacion</option>
                </select>
                </div>
               
              </div>

           
         

          
         
       
          <input type="hidden" name="tipoOperacion" value="insertarRadios">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-primary">Registrar</button>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- EDITAR Radios -->
<div class="modal fade" id="modal-editar-Radios"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
      <button type="button" class="close" title="Cerrar Modal" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h5 class="modal-title" id="exampleModalLabel">Editar Radios</h5>
      
      </div>
      <div class="modal-body">
        <form id="formu-editar-Radios">
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Serie</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" placeholder="Ingrese serie " required maxlength="20" name="serieRadios">
            </div>
          </div>
     
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Modelo</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" placeholder="Ingrese  Modelo " required maxlength="20" name="modeloRadios">
            </div>
          </div>
        
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Tipo de Equipo</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" placeholder="Ingrese el tipo de equipo " required maxlength="20" name="tipoRadios">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">N° Serie GPS</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" placeholder="Ingrese numero de serie del GPS " maxlength="20" required name="serieGPS_Radios">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Observacion</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" placeholder="Ingrese una observación  " required maxlength="200" name="obserRadios">
            </div>
          </div>
          <div class="form-group row">
                <label class="col-sm-2 col-form-label" >Seleccione estado de radio...</label>
                <div class="col-sm-10">
                <select name="estado" class="form-control">
                  <option value="">Seleccione estado radios</option>
                  <option value="En Terreno">En Terreno</option>
                  <option value="Bodega">Bodega</option>
                  <option value="Reparacion">Reparacion</option>
                </select>
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
          
      
      
         
       
          <input type="hidden" name="tipoOperacion" value="actualizarRadios">
         
          <input type="hidden" name="id_Radios">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-primary">Actualizar</button>
        </form>
      </div>
    </div>
  </div>
</div>
