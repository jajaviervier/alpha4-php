<div class="modal fade" id="modal-insertar-Funcionarioo"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
      <button type="button" class="close" title="Cerrar Modal" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h5 class="modal-title" id="exampleModalLabel">Insertar Nuevo Funcionarioo</h5>
     
      </div>
      <div class="modal-body">
        <form id="formu-nuevo-Funcionarioo">
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Rut</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" placeholder="Ingrese un numero de rut" required maxlength="10" name="rutFuncionarioo"  id="rut" required oninput="checkRut(this)">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Nombre</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" placeholder="Ingrese un nombre" required maxlength="20"name="nombreFuncionarioo">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Apellido</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" placeholder="Ingrese un apellido" required maxlength="20"name="apellidoFuncionarioo">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Grado</label>
            <div class="col-sm-10">
              <!--
              <input type="text" class="form-control" placeholder="Ingrese un grado" required name="gradoFuncionarioo">
              -->
              <select name="gradoFuncionarioo" class="form-control">
                  <option value='Capitan'>Capitán</option>
                  <option value='Teniente'>Teniente</option>
                  <option value='Subteniente'>Subteniente</option>
                  <option value='Suboficial Mayor'>Suboficial Mayor</option>
                  <option value='Suboficial'>Suboficial</option>
                  <option value='Sargento 1º'>Sargento 1º</option>
                  <option value='Sargento 2º'>Sargento 2º</option>
                  <option value='Cabo 1º'>Cabo 1º</option>
                  <option value='Cabo 2º'>Cabo 2º</option>
                  <option value='Carabinero'>Carabinero</option>
              </select>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Estado Civil</label>
            <div class="col-sm-10">
                <!--            
              <input type="text" class="form-control" placeholder="Ingrese estado civil" required name="estado_CivilFuncionarioo">
              -->
              <select name="estado_CivilFuncionarioo" class="form-control">
                <option value='Soltero(a)'>Soltero(a)</option>
                <option value='Casado(a)'>Casado(a)</option>
                <option value='Viudo(a)'>Viudo(a)</option>
              </select >
            </div>
          </div>
          <div class="form-group row">
                <label class="col-sm-2 col-form-label" >Conductor</label>
                <div class="col-sm-10">
                <select name="conductor" class="form-control">
                  <option value="1">SI</option>
                  <option value="0" SELECTED>NO</option>
                </select>
                </div>
               
              </div>
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Imagen</label>
            <div class="col-sm-10 conteNuevaImagen">
              <input type="file" class="form-control"  id="imagen" name="imagenFuncionarioo">
              <img src="" id="imagenFuncionarioo" alt="" class="thumbnail" width="200" style="display: none">
            </div>
            </div>
          
          
       

          <input type="hidden" name="tipoOperacion" value="insertarFuncionarioo">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- EDITAR SLIDER -->
<div class="modal fade" id="modal-editar-Funcionarioo"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
      <button type="button" class="close" title="Cerrar Modal" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h5 class="modal-title" id="exampleModalLabel">Editar Funcionarioo</h5>
       
      </div>
      <div class="modal-body">
        <form id="formu-editar-Funcionarioo">
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Rut</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" placeholder="Ingrese un numero de rut" required maxlength="11" name="rutFuncionarioo"  id="rut" required oninput="checkRut(this)">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Nombre</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" placeholder="Ingrese un nombre" required maxlength="20"name="nombreFuncionarioo">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Apellido</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" placeholder="Ingrese un apellido" required maxlength="20"name="apellidoFuncionarioo">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Grado</label>
            <div class="col-sm-10">
              <!--
              <input type="text" class="form-control" placeholder="Ingrese un grado" required name="gradoFuncionarioo">
              -->
              <select name="gradoFuncionarioo" class="form-control">
                  <option value='Capitan'>Capitán</option>
                  <option value='Teniente'>Teniente</option>
                  <option value='Subteniente'>Subteniente</option>
                  <option value='Suboficial Mayor'>Suboficial Mayor</option>
                  <option value='Suboficial'>Suboficial</option>
                  <option value='Sargento 1º'>Sargento 1º</option>
                  <option value='Sargento 2º'>Sargento 2º</option>
                  <option value='Cabo 1º'>Cabo 1º</option>
                  <option value='Cabo 2º'>Cabo 2º</option>
                  <option value='Carabinero'>Carabinero</option>
              </select>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Estado Civil</label>
            <div class="col-sm-10">
                <!--            
              <input type="text" class="form-control" placeholder="Ingrese estado civil" required name="estado_CivilFuncionarioo">
              -->
              <select name="estado_CivilFuncionarioo" class="form-control">
                <option value='Soltero(a)'>Soltero(a)</option>
                <option value='Casado(a)'>Casado(a)</option>
                <option value='Viudo(a)'>Viudo(a)</option>
              </select >
            </div>
          </div>
          <div class="form-group row">
                <label class="col-sm-2 col-form-label" >Conductor</label>
                <div class="col-sm-10">
                <select name="conductor" class="form-control">
                  <option value="1">SI</option>
                  <option value="0" SELECTED>NO</option>
                </select>
                </div>
               
              </div>
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Imagen</label>
            <div class="col-sm-10 conteNuevaImagen">
              <input type="file" class="form-control"  id="imagen" name="imagenFuncionarioo">
              <img src="" id="imagenFuncionarioo" alt="" class="thumbnail" width="200" style="display">
            </div>
            </div>
          

       
          <input type="hidden" name="tipoOperacion" value="actualizarFuncionarioo">
          <input type="hidden" name="rutaActual">
          <input type="hidden" name="id_Funcionarioo">
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
function checkRut(rut) {
    // Despejar Puntos
    var valor = rut.value.replace('.','');
    // Despejar Guión
    valor = valor.replace('-','');
    
    // Aislar Cuerpo y Dígito Verificador
    cuerpo = valor.slice(0,-1);
    dv = valor.slice(-1).toUpperCase();
    
    // Formatear RUN
    rut.value = cuerpo + '-'+ dv
    
    // Si no cumple con el mínimo ej. (n.nnn.nnn)
    if(cuerpo.length < 7) { rut.setCustomValidity("RUT Incompleto"); return false;}
    
    // Calcular Dígito Verificador
    suma = 0;
    multiplo = 2;
    
    // Para cada dígito del Cuerpo
    for(i=1;i<=cuerpo.length;i++) {
    
        // Obtener su Producto con el Múltiplo Correspondiente
        index = multiplo * valor.charAt(cuerpo.length - i);
        
        // Sumar al Contador General
        suma = suma + index;
        
        // Consolidar Múltiplo dentro del rango [2,7]
        if(multiplo < 7) { multiplo = multiplo + 1; } else { multiplo = 2; }
  
    }
    
    // Calcular Dígito Verificador en base al Módulo 11
    dvEsperado = 11 - (suma % 11);
    
    // Casos Especiales (0 y K)
    dv = (dv == 'K')?10:dv;
    dv = (dv == 0)?11:dv;
    
    // Validar que el Cuerpo coincide con su Dígito Verificador
    if(dvEsperado != dv) { rut.setCustomValidity("RUT Inválido"); return false; }
    
    // Si todo sale bien, eliminar errores (decretar que es válido)
    rut.setCustomValidity('');
}
</script>
<!--
 <form>
        <input type="text" id="rut" name="rut" required oninput="checkRut(this)" placeholder="Ingrese RUT">
        <button type="submit">Validar RUT y Enviar Form</button>
 </form>
-->