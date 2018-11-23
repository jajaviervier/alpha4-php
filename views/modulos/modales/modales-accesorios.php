<div class="modal fade" id="modal-insertar-Accesorios"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
      <button type="button" class="close" title="Cerrar Modal" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h5 class="modal-title" id="exampleModalLabel">Insertar Accesorios</h5>

      </div>
      <div class="modal-body">
        <form id="formu-nuevo-Accesorios">
        <div class="form-group row">
                <label class="col-sm-2 col-form-label" >Tipo de Accesorio</label>
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

                <!--<select name="serieAccesorios" class="form-control">
                  <option value="">Seleccione estado Accesorios</option>
                  <option value="0707050106-0">Par de Guante / 0707050106-0</option>
                  <option value="0707050106-8">Baston /0707050106-8</option>
                  <option value="0707050106-2">Mascara Anti Gases /0707050106-2 </option>
                  <option value="0707050106-1">Protector de Pierna / 0707050106-1</option>
                  <option value="0707050106-3">Protector Hombro / 0707050106-3</option>
                </select>-->
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
              <textarea type="text" class="form-control" placeholder="Ingrese Observacion" required name="desAccesorios"maxlength="200"></textarea>
            </div>
          </div>








          <input type="hidden" name="tipoOperacion" value="insertarAccesorios">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-primary">Registrar</button>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- EDITAR Accesorios -->
<div class="modal fade" id="modal-editar-Accesorio"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
      <button type="button" class="close" title="Cerrar Modal" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h5 class="modal-title" id="exampleModalLabel">Editar Accesorios</h5>

      </div>
      <div class="modal-body">
        <form id="formu-editar-Accesorios">
        <div class="form-group row">
                <label class="col-sm-2 col-form-label" >Tipo de Accesorio</label>
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

                <!--<select name="serieAccesorios" class="form-control">
                  <option value="">Seleccione estado Accesorios</option>
                  <option value="0707050106-0">Par de Guante / 0707050106-0</option>
                  <option value="0707050106-8">Baston /0707050106-8</option>
                  <option value="0707050106-2">Mascara Anti Gases /0707050106-2 </option>
                  <option value="0707050106-1">Protector de Pierna / 0707050106-1</option>
                  <option value="0707050106-3">Protector Hombro / 0707050106-3</option>
                </select>-->
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
              <textarea type="text" class="form-control" placeholder="Ingrese Observacion" required name="desAccesorios"maxlength="200"></textarea>
            </div>
          </div>

          <input type="hidden" name="tipoOperacion" value="actualizarAccesorios">

          <input type="hidden" name="id_Accesorios">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-primary">Actualizar</button>
        </form>
      </div>
    </div>
  </div>
</div>
