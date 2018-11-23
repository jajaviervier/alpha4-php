<div class="modal fade" id="modal-insertar-FichaDia"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
      <button type="button" class="close" title="Cerrar Modal" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h5 class="modal-title" id="exampleModalLabel">Servicio Diario</h5>
<!---ENTREGA DE EQUIPO TACTICO A FUNCIONARIOS --->
      </div>
      <div class="modal-body">
        <form id="formu-nuevo-FichaDia">
          <div class="form-group row">
          

          
          





          <input type="hidden" name="tipoOperacion" value="insertarFichaDia">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-primary">Registrar</button>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- EDITAR FichaDia -->
<div class="modal fade" id="modal-editar-FichaDia"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
      <button type="button" class="close" title="Cerrar Modal" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h5 class="modal-title" id="exampleModalLabel">Editar FichaDia</h5>

      </div>
      <div class="modal-body">
        <form id="formu-editar-FichaDia">
 




          <input type="hidden" name="tipoOperacion" value="actualizarFichaDia">

          <input type="hidden" name="id_FichaDia">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-primary">Actualizar</button>
        </form>
      </div>
    </div>
  </div>
</div>
