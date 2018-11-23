<!-- EDITAR SLIDER -->
<div class="modal fade" id="modal-editar-perfil"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
      <button type="button" class="close" title="Cerrar Modal" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h5 class="modal-title" id="exampleModalLabel">Editar Perfil</h5>
       
      </div>
      <div class="modal-body">
        <form id="formu-editar-perfil">
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Nombre</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" placeholder="Nombre" maxlength="20" required name="nombre">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Correo</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" placeholder="Correo" maxlength="20" required name="correo">
            </div>
          </div>
    
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Imagen</label>
            <div class="col-sm-10 conteEditarImagen">
              <input type="file" class="form-control"  id="imagenEditar" name="imagenPerfil">
              <br>
              <img src="" id="imagen" alt="" class="thumbnail" width="200">
            </div>
            </div>

               <div class="form-group row">
            <label class="col-sm-2 col-form-label">Contraseña</label>
            <div class="col-sm-10">
              <input type="password" class="form-control" placeholder="Contraseña" maxlength="20" required name="contraseña">
            </div>
          </div>
        
       

       
          <input type="hidden" name="tipoOperacion" value="actualizarPerfil">
          <input type="hidden" name="rutaActual">
          <input type="hidden" name="id_usuario">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Actualizar</button>
        </form>
      </div>
    </div>
  </div>
</div>