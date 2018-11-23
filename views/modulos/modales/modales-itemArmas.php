<div class="modal fade" id="modal-insertar-itemArmas"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
      <button type="button" class="close" title="Cerrar Modal" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h5 class="modal-title" id="exampleModalLabel">Insertar Nuevo itemArmas</h5>
     
      </div>
      <div class="modal-body">
        <form id="formu-nuevo-itemArmas">
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Serie</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" placeholder="Ingrese un numero de serie.." required maxlength="20" name="serieitemArmas">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Tipo de Arma</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" placeholder="Ingrese un tipo de arma.." required maxlength="20"name="tipoitemArmas">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Armas</label>
            <div class="col-sm-10">
            <select class="form-control" name="idArmasForanea" id="optionSubca">
       <option value="2" class="form-control">Seleccione un arma...</option>
      <?php        
          $itemArmas = ControllerArmas::listarArmasCtr();
          foreach ($itemArmas as $key => $value) {
            echo '
              <option value="'.$value["id"].'">
              '.$value["marca"].'
              </option>
            ';
          }

          ?>
           </select>
          </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Imagen</label>
            <div class="col-sm-10 conteNuevaImagen">
              <input type="file" class="form-control"  id="imagen" name="imagenitemArmas">
              <img src="" id="imagenitemArmas" alt="" class="thumbnail" width="200" style="display: none">
            </div>
            </div>
            <div class="form-group row">
            <label class="col-sm-2 col-form-label">Observación</label>
            <div class="col-sm-10">
              <textarea class="form-control" placeholder="Ingrese observación del arma" maxlength="200" required rows="5"  onkeyup="countChars(this);"name="observacionArma"></textarea><p id="charNum">0 Caracteres</p>
            </div>
          </div>
          <div class="form-group row">
                <label class="col-sm-2 col-form-label" >Seleccione estado</label>
                <div class="col-sm-10">
                <select name="estado" class="form-control">
                  <option value="">Seleccione estado armas</option>
                  <option value="En Terreno">En Terreno</option>
                  <option value="Bodega">Bodega</option>
                  <option value="Reparacion">Reparacion</option>
                </select>
                </div>
               
              </div>
          
       

          <input type="hidden" name="tipoOperacion" value="insertaritemArmas">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
      </div>
    </div>
  </div>
</div>


<!-- EDITAR ARMAS -->
<div class="modal fade" id="modal-editar-itemArmas"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
      <button type="button" class="close" title="Cerrar Modal" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h5 class="modal-title" id="exampleModalLabel">Editar itemArmas</h5>
       
      </div>
      <div class="modal-body">
        <form id="formu-editar-itemArmas">
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Serie</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" placeholder="Ingrese un numero de serie.." required maxlength="20" name="serieitemArmas">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Tipo de Arma</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" placeholder="Ingrese un tipo de arma.." required maxlength="20"name="tipoitemArmas">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Armas</label>
            <div class="col-sm-10">
            <select class="form-control" name="idArmasForanea" id="optionSubca">
       <option value="2" class="form-control">Seleccione un arma...</option>
      <?php        
          $itemArmas = ControllerArmas::listarArmasCtr();
          foreach ($itemArmas as $key => $value) {
            echo '
              <option value="'.$value["id"].'">
              '.$value["marca"].'
              </option>
            ';
          }

          ?>
           </select>
          </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Imagen</label>
            <div class="col-sm-10 conteEditarImagen">
              <input type="file" class="form-control"  id="imagenEditar" name="imagenitemArmas">
              <br>
              <img src="" id="imagenitemArmas" alt="" class="thumbnail" width="200">
            </div>
            </div>
            <div class="form-group row">
            <label class="col-sm-2 col-form-label">Observación</label>
            <div class="col-sm-10">
              <textarea class="form-control" placeholder="Ingrese observación del arma" maxlength="200" required rows="5"  onkeyup="countChars(this);"name="observacionitemArma"></textarea><p id="charNum">0 Caracteres</p>
            </div>
          </div>
          <div class="form-group row">
                <label class="col-sm-2 col-form-label" >Seleccione estado</label>
                <div class="col-sm-10">
                <select name="estado" class="form-control">
                  <option value="">Seleccione estado armas</option>
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

       
          <input type="hidden" name="tipoOperacion" value="actualizaritemArmas">
          <input type="hidden" name="rutaActual">
          <input type="hidden" name="id_itemArmas">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Actualizar</button>
        </form>
      </div>
    </div>
  </div>
</div>

<script>
function countChars(obj){
    var maxLength = 200;
    var strLength = obj.value.length;
    
    if(strLength > maxLength){
        document.getElementById("charNum").innerHTML = '<span style="color: red;">'+strLength+' de '+maxLength+' caracteres</span>';
    }else{
        document.getElementById("charNum").innerHTML = strLength+' de '+maxLength+' caracteres';
    }
}
</script>