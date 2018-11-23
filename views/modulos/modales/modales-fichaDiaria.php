<div class="modal fade" id="modal-insertar-fichaDiaria"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
      <button type="button" class="close" title="Cerrar Modal" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h5 class="modal-title" id="exampleModalLabel">Insertar fichaDiaria</h5>
<!-- ENTREGA DE ACCESORIOS A FUNCIONARIOS -->
      </div>
      <div class="modal-body">
        <form id="formu-nuevo-fichaDiaria">
        

        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Funcionario</label>
            <div class="col-sm-10">
            <select class="form-control" name="idFuncionarioForaneo" id="idFuncionario">
              <option value="2" class="form-control">Seleccione un Funcionario..</option>
            <?php
                  $itemFuncionario = ControllerFuncionarioo::listarFuncionariooCtr();
                  foreach ($itemFuncionario as $key => $value) {
                    echo '
                      <option value="'.$value["id_funcionario"].'">
                      '.$value["nombre"].'
                      </option>
            ';
          }

          ?>
           </select>
          </div>
          </div>
        
          <div class="form-group row">
                <label class="col-sm-2 col-form-label" >Accesorio</label>
                <div class="col-sm-10">
                    <select class="form-control" name="serieAccesorios" id="serieAccesorios">
                    <option value="2" class="form-control">Seleccione </option>
                    <?php
                    $itemaCrearAcc = ControllercrearAcc::listarcrearAccCtr();
                    foreach ($itemaCrearAcc as $key => $value) {
                    echo '
                    <option value="'.$value["codigo"].'">
                    '.$value["codigo"].' / '.$value["nombreCodigo"].'
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
              <input type="text" class="form-control" placeholder="Ingrese Cantidad" required maxlength="20"name="cantidadAccesorios">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Observación</label>
            <div class="col-sm-10">
              <textarea type="text" class="form-control" maxlength="200"placeholder="Ingrese Observacion" required name="desAccesorios"></textarea>
            </div>
          </div>

          

          
         






          <input type="hidden" name="tipoOperacion" value="insertarfichaDiaria">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-primary">Registrar</button>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- EDITAR fichaDiaria     -->
<div class="modal fade" id="modal-editar-fichaDiaria"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
      <button type="button" class="close" title="Cerrar Modal" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h5 class="modal-title" id="exampleModalLabel">Editar fichaDiaria</h5>

      </div>
      <div class="modal-body">
        <form id="formu-editar-fichaDiaria">
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Funcionario</label>
            <div class="col-sm-10">
            <select class="form-control" name="idFuncionarioForaneo" id="idFuncionario">
              <option value="2" class="form-control">Seleccione un Funcionario..</option>
            <?php
                  $itemFuncionario = ControllerFuncionarioo::listarFuncionariooCtr();
                  foreach ($itemFuncionario as $key => $value) {
                    echo '
                      <option value="'.$value["id_funcionario"].'">
                      '.$value["nombre"].'
                      </option>
            ';
          }

          ?>
           </select>
          </div>
          </div>
        
          <div class="form-group row">
                <label class="col-sm-2 col-form-label" >Accesorio</label>
                <div class="col-sm-10">
                    <select class="form-control" name="serieAccesorios" id="serieAccesorios">
                    <option value="2" class="form-control">Seleccione </option>
                    <?php
                    $itemaCrearAcc = ControllercrearAcc::listarcrearAccCtr();
                    foreach ($itemaCrearAcc as $key => $value) {
                    echo '
                    <option value="'.$value["codigo"].'">
                    '.$value["codigo"].' / '.$value["nombreCodigo"].'
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
              <input type="text" class="form-control" placeholder="Ingrese Cantidad" required maxlength="20"name="cantidadAccesorios">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Observación</label>
            <div class="col-sm-10">
              <textarea type="text" class="form-control" placeholder="Ingrese Observacion" required maxlength="200" name="desAccesorios"></textarea>
            </div>
          </div>
          <div class="form-group row">
            
          
            <div class="col-sm-10">
               <!--             
              <input type="text" class="form-control" placeholder="Ingrese estado civil" required name="estado_CivilFuncionarioo">
              -->
              <input type="hidden" name="estadoAccesorios" value="1" class="form-control">
              <!--
              <select name="estadoAccesorios" class="form-control">
                <option value='0'>De Baja</option>
                <option value='1'>Terrenno</option>
                <option value='2'>Bodega</option>
              </select >
              -->
            </div>
          </div>

        
        


          <input type="hidden" name="tipoOperacion" value="actualizarfichaDiaria">

          <input type="hidden" name="id_fichaDiaria">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-primary">Actualizar</button>
        </form>
      </div>
    </div>
  </div>
</div>
