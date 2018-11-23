<div class="modal fade" id="modal-insertar-AccEquipoRadio"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
      <button type="button" class="close" title="Cerrar Modal" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h5 class="modal-title" id="exampleModalLabel">Insertar AccEquipoRadio</h5>
        
      </div>
      <div class="modal-body">
        <form id="formu-nuevo-AccEquipoRadio">
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Serie</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" placeholder="Ingrese la  Serie " required maxlength="20" name="marcaAccEquipoRadio">
            </div>
          </div>
     
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Cantidad</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" placeholder="Ingrese  Cantidad " required maxlength="20"name="modeloAccEquipoRadio" onkeypress="return controltag(event)">
            </div>
          </div>
        
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Descripcion</label>
            <div class="col-sm-10">
              <textarea class="form-control" placeholder="Texto descriptivo" required rows="5" maxlength="200"name="calibreAccEquipoRadio"></textarea>
            </div>
          </div>
      
         

          
         
       
          <input type="hidden" name="tipoOperacion" value="insertarAccEquipoRadio">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-primary">Registrar</button>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- EDITAR AccEquipoRadio -->
<div class="modal fade" id="modal-editar-AccEquipoRadio"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
      <button type="button" class="close"  title="Cerrar Modal" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h3 class="modal-title" id="exampleModalLabel">Editar AccEquipoRadio</h3>
        
      </div>
      <div class="modal-body">
        <form id="formu-editar-AccEquipoRadio">
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Serie</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" placeholder="Ingrese la  Marca " required maxlength="20" name="marcaAccEquipoRadio">
            </div>
          </div>
     
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Cantidad</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" placeholder="Ingrese  Modelo " required maxlength="20"name="modeloAccEquipoRadio" onkeypress="return controltag(event)">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Descripcion</label>
            <div class="col-sm-10">
              <textarea class="form-control" placeholder="Texto descriptivo" required rows="5" maxlength="200"name="calibreAccEquipoRadio"></textarea>
            </div>
          </div>
      
         
       
          <input type="hidden" name="tipoOperacion" value="actualizarAccEquipoRadio">
         
          <input type="hidden" name="id_AccEquipoRadio">
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