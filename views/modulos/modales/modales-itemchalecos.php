<!-- Formulario donde se registraran los datos y se crearan Chalecos -->

<div class="modal fade" id="modal-insertar-itemChalecos"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
      <button type="button" class="close" title="Cerrar Modal" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h5 class="modal-title" id="exampleModalLabel">Registro Item Escudo</h5>
        
      </div>
      <div class="modal-body">
        <form id="formu-nuevo-itemChalecos">

          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Serie</label>
            <div class="col-sm-10">
<!-- Se valida el maximo de caracteres 03/10/2018-->

              <input autocomplete="off" maxlength="20" type="number" class="form-control" placeholder="Ingresar Número Serie" required name="SerieItemChalecos">
            </div>
          </div>

            <div class="form-group row">
       <label for="inputPassword3" class="col-sm-2 col-form-label">Marca y Modelo</label>
      
      <?php 

      echo "<div class='col-sm-10'>";
       echo "<select class='form-control' name='marcaYmodelo' required>";
       echo "";
          $Chalecos2 = ControllerChalecos::listarChalecosCtr();
          
          foreach ($Chalecos2 as $key => $value) {

            
            echo "<option value='".$value[0]."'>".$value[1]."-".$value[2]."</option>";

          }
           echo "</select>";
          echo "</div>";
          
         ?>
         </div>
         <div class="form-group row">
            <label class="col-sm-2 col-form-label">Estado</label>
            <div class="col-sm-10">
             <select class='form-control' name='estado' required>
            <option value="Bodega">Bodega</option>
            <option value="Reparacion">Reparacion</option>
            <option value="Terreno">Terreno</option>
      
                </select>
             </div>
          </div>
                    <div class="form-group row">      
                         <input type="hidden" name="tipoOperacion" value="insertarItemChalecos">
                    </div>
         <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-primary">Registrar</button>
        </form>
      </div>

      </div>
    </div>
  </div>
</div>

<!-- Formulario donde se editaran los datos -->

<div class="modal fade" id="modal-editar-itemChalecos"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
      <button type="button" class="close" title="Cerrar Modal" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h5 class="modal-title" id="exampleModalLabel">Editar Item Escudo</h5>
        
      </div>
      <div class="modal-body">
        <form id="formu-editar-itemChalecos">
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Serie</label>
            <div class="col-sm-10">
<!-- Se valida el maximo de caracteres 03/10/2018-->
              
              <input autocomplete="off" maxlength="20" type="number" class="form-control" placeholder="Ingresar Número de serie" required name="SerieItemChalecos">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Marca y Modelo</label>

            
            <?php 

      echo "<div class='col-sm-10'>";
       echo '<select  name="marca" class="form-control" required>';
      echo  '<option value="" selected="selected"></option>';


      
          $Chalecos2 = ControllerChalecos::listarChalecosCtr();
          
          foreach ($Chalecos2 as $key => $value) {

            
            echo "<option value='".$value[0]."'>".$value[1]."-".$value[2]."</option>";

          }
           echo "</select>";
          echo "</div>";
          
         ?>
          </div>
    <div class="form-group row">
            <label class="col-sm-2 col-form-label">Estado</label>
            <div class="col-sm-10">
             <select class='form-control' name='estado' required>
            <option value="" selected="selected"></option>
            <option value="Bodega">Bodega</option>
            <option value="Reparacion">Reparacion</option>
            <option value="Terreno">Terreno</option>
      
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

        
      

<div class="form-group row">
       
          <input type="hidden" name="tipoOperacion" value="actualizarItemChalecos">

          <input type="hidden" name="id_itemChalecos">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
      </div>
      </div>
    

    </div>
  </div>
</div>


















<!----ACTUALIZAR LA TABLA CHALECO PARA ASIGNAR UN CHALECO AL FUNCIONARIO----->
<div class="modal fade" id="modal-editar-Fun"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
      <button type="button" class="close" title="Cerrar Modal" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h5 class="modal-title" id="exampleModalLabel">Asignar un Chaleco a un funcionario</h5>
        
      </div>
      <div class="modal-body">
        <form id="formu-editar-Fun">
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Asignar chaleco</label>
            <div class="col-sm-10">
            <select class="form-control" name="id_funcionario" id="id_funcionario">
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
      

          <div class="form-group row">
       
            <input type="hidden" name="tipoOperacion" value="actualizarFun">

            <input type="text" name="id_itemChalecos">
          </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
      </div>
      </div>
    

    </div>
  </div>
</div>
