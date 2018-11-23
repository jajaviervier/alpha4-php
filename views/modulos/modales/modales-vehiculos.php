<div class="modal fade" id="modal-insertar-Vehiculos"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
      <button type="button" class="close" title="Cerrar Modal" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h5 class="modal-title" id="exampleModalLabel">Control de Vehiculo</h5>
        
      </div>
      <div class="modal-body">
        <form id="formu-nuevo-Vehiculos">
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Patente</label>
            <div class="col-sm-10">
            <!--
              <input type="text" class="form-control" placeholder="Ingrese Patente " required maxlength="20" name="patenteVehiculos>-->
              <select  class="form-control" name="patenteVehiculos">
              <option value="B-302">B-302</option>
              <option value="B-516">B-516</option>
              <option value="B-518">B-518</option>
              <option value="J-461">J-461</option>
              <option value="LA-033">LA-033</option>
              </select>
            </div>
          </div>
     
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Km.Salida</label>
            <div class="col-sm-10">
              <input type="number" class="form-control" placeholder="Ingrese Km. de Salida " required name="kmsalidaVehiculos" onkeypress="return controltag(event)">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Km.Llegada</label>
            <div class="col-sm-10">
              <input type="number" class="form-control" placeholder="Ingrese Km. de Llegada" name="kmllegadaVehiculos" onkeypress="return controltag(event)">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Conductor</label>
            <div class="col-sm-10">
            <select class="form-control" name="idFuncionarioForaneo" id="idFuncionarioForaneo">
       <option value="2" class="form-control">Seleccione un arma...</option>
      <?php        
          $itemArmas = ControllerFuncionarioo::listarFuncionarioConductorCtr();
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
              <input type="text" class="form-control" placeholder="Ingresar Cantidad" required name="cantidadQuimicos"  onkeypress="return controltag(event)">
            </div>
          </div>
     
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Descripcion</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" placeholder="Ingresar descripcion" required name="descripVQ">
            </div>
          </div>
   
        
        

          <input type="hidden" name="tipoOperacion" value="insertarVehiculos">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-primary">Registrar</button>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- EDITAR Vehiculos -->
<div class="modal fade" id="modal-editar-Vehiculos"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
      <button type="button" class="close" title="Cerrar Modal" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h5 class="modal-title" id="exampleModalLabel">Editar Vehiculos</h5>
        
      </div>
      <div class="modal-body">
        <form id="formu-editar-Vehiculos">
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Patente</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" placeholder="Ingrese Patente " required maxlength="20" name="patenteVehiculos">
            </div>
          </div>
     
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Km.Salida</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" placeholder="Ingrese Km. de Salida " required name="kmsalidaVehiculos">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Km.Llegada</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" placeholder="Ingrese Km. de Llegada" name="kmllegadaVehiculos">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Conductor</label>
            <div class="col-sm-10">
            <select class="form-control" name="idFuncionarioForaneo" id="idFuncionarioForaneo">
       <option value="2" class="form-control">Seleccione un arma...</option>
      <?php        
          $itemArmas = ControllerFuncionarioo::listarFuncionarioConductorCtr();
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
              <input type="text" class="form-control" placeholder="Ingresar Cantidad" required name="cantidadQuimicos">
            </div>
          </div>
     
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Descripcion</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" placeholder="Ingresar descripcion" required name="descripVQ">
            </div>
          </div>
   
        

           
        
        
       
          
       
          <input type="hidden" name="tipoOperacion" value="actualizarVehiculos">
         
          <input type="hidden" name="id_Vehiculos">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-primary">Actualizar</button>
        </form>
      </div>
    </div>
  </div>
</div>
<script>
  controltag = function (e)  {
        tecla = (document.all) ? e.keyCode : e.which; 
        if (tecla==8) return true; // para la tecla de retroseso
        else if (tecla==0||tecla==9)  return true; //<-- PARA EL TABULADOR-> su keyCode es 9 pero en tecla se esta transformando a 0 asi que porsiacaso los dos
        patron =/[0-9\s]/;// -> solo letras
       // patron =/[0-9\s]/;// -> solo numeros
        te = String.fromCharCode(tecla);
        return patron.test(te); 
    }
</script>
