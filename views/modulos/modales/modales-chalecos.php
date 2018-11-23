
<!-- Formulario donde se registraran los datos y se crearan modelo y marca -->

<div class="modal fade" id="modal-insertar-Chalecos"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
      <button type="button" class="close" title="Cerrar Modal" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h5 class="modal-title" id="exampleModalLabel">Registrar Nueva Categoria </h5>
       
      </div>
      <div class="modal-body">
        <form id="formu-nuevo-Chalecos">
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Marca</label>
            <div class="col-sm-10">
<!-- Se valida el maximo de caracteres 03/10/2018-->

              <input autocomplete="off" maxlength="20" type="text" class="form-control" placeholder="Ingresar Marca" required name="escudoMarca">
            </div>
          </div>

                    <div class="form-group row">
            <label class="col-sm-2 col-form-label">Modelo</label>
            <div class="col-sm-10">
<!-- Se valida el maximo de caracteres 03/10/2018-->

              <input autocomplete="off" maxlength="20" type="text" class="form-control" placeholder="Ingresar Modelo" required name="escudoModelo">
            </div>
          </div>

       
          <input type="hidden" name="tipoOperacion" value="insertarChalecos">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-primary">Registrar</button>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- Formulario donde se editaran los datos -->

<div class="modal fade" id="modal-editar-Chalecos"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
      <button type="button" class="close" title="Cerrar Modal" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h5 class="modal-title" id="exampleModalLabel">Editar Escudo</h5>
      
      </div>
      <div class="modal-body">
        <form id="formu-editar-Chalecos">
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Marca</label>
            <div class="col-sm-10">
<!-- Se valida el maximo de caracteres 03/10/2018-->
              
              <input autocomplete="off" maxlength="20" type="text" class="form-control" placeholder="Ingresar Marca" required name="escudoMarca">
            </div>
          </div>

               <div class="form-group row">
            <label class="col-sm-2 col-form-label">Modelo</label>
            <div class="col-sm-10">
<!-- Se valida el maximo de caracteres 03/10/2018-->

              <input autocomplete="off" maxlength="20" type="text" class="form-control" placeholder="Ingresar Modelo" required name="escudoModelo">
            </div>
          </div>


       
          <input type="hidden" name="tipoOperacion" value="actualizarChalecos">
    
          <input type="hidden" name="id_Chalecos">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-primary">Actualizar</button>
        </form>
      </div>
    </div>
  </div>
</div>

