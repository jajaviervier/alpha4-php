<div class="modal fade" id="modal-insertar-crearAcc"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
      <button type="button" class="close" title="Cerrar Modal" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h5 class="modal-title" id="exampleModalLabel">Insertar crearAcc</h5>

      </div>
      <div class="modal-body">
        <form id="formu-nuevo-crearAcc">


          <div class="form-group row">
            <label class="col-sm-2 col-form-label">codigo</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" placeholder="Ingrese  Cantidad " required maxlength="20"name="codigoCrearAcc">
            </div>
          </div>

          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Nombre</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" placeholder="ingresar nombre" required maxlength="20"name="nombreCrearAcc">
            </div>
          </div>


          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Descripcion</label>
            <div class="col-sm-10">
              <textarea type="text" class="form-control" placeholder="ingresar descripcion" required maxlength="200"name="descripcionCrearAcc"></textarea>
            </div>
          </div>









          <input type="hidden" name="tipoOperacion" value="insertarcrearAcc">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-primary">Registrar</button>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- EDITAR crearAcc -->
<div class="modal fade" id="modal-editar-crearAcc"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
      <button type="button" class="close" title="Cerrar Modal" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h5 class="modal-title" id="exampleModalLabel">Editar crearAcc</h5>

      </div>
      <div class="modal-body">
        <form id="formu-editar-crearAcc">
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">codigo</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" placeholder="Ingrese Cantidad " required maxlength="20"name="codigoCrearAcc">
            </div>
          </div>

          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Nombre</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" placeholder="ingresar nombre" required maxlength="20"name="nombreCrearAcc">
            </div>
          </div>


          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Descripcion</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" placeholder="ingresar descripcion" required maxlength="200"name="descripcionCrearAcc">
            </div>
          </div>



          <input type="hidden" name="tipoOperacion" value="actualizarcrearAcc">

          <input type="hidden" name="id_crearAcc">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-primary">Actualizar</button>
        </form>
      </div>
    </div>
  </div>
</div>
