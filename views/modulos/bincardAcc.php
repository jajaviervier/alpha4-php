
<div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Bincard De Accesorios
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Bincard</a></li>
        <li class="active">Bincard Accesorios </li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">
    <br>
      <table class="table table-dark display responsive no-wrap" id="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Serie</th>
            <th scope="col">Nombre</th>
            <th scope="col">Descripción Accesorio</th>
            <th scope="col">Descripción</th>
            <th scope="col">Cantidad</th>
            <th scope="col">Fecha Registro</th>
            <?php if ($_SESSION['id']==2 ){
            echo' <th scope="col">Acciones</th> ';
            }?>
            </tr>
        </thead>
        <tbody>

          <?php


          $Accesorio = ControllerAccesorios::listarbincardAccesoriosCtr();

          foreach ($Accesorio as $key => $value) {

            echo '
              <tr>
                <th scope="row">'.$value["id"].'</th>
                <td>'.$value["serie"].'</td>
                <td>'.$value["nombreCodigo"].'</td>
                <td>'.$value["descripcionCodigo"].'</td>
                <td>'.$value["descripcion"].'</td>
                <td>'.$value["cantidad"].'</td>
                <td>'.$value["fecha"].'</td>
              
            ';
         
          if ($_SESSION['id']==2 ){
            echo'
            <td width="100">
            <button class="btn btn-sm btn-danger btnEliminarAccesorios" idAccesorios="'.$value["id"].'" ">
            <i class="far fa-trash-alt"></i>
          </button>
          </td>
          </tr>
            ';
          }
        }
          ?>
          
        </tbody>
      </table>
    </section>
    <!-- /.content -->
    <script>

$(function() {
  activarNavbar('modAccesorios','regAcc2')
    console.log( "ready!" );
});
   
</script>
  </div>
  
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
            <label class="col-sm-2 col-form-label">Serie</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" placeholder="Ingrese serie " required maxlength="20" name="serieAccesorios">
            </div>
          </div>

          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Cantidad</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" placeholder="Ingrese Cantidad " required name="cantidadAccesorios">
            </div>
          </div>
          <div class="form-group row">
                <label class="col-sm-2 col-form-label" >Seleccione estado Accesorios...</label>
                <div class="col-sm-10">
                <select name="estado" class="form-control">
                  <option value="">Seleccione estado Accesorios</option>
                  <option value="En Terreno">En Terreno</option>
                  <option value="Bodega">Bodega</option>
                  <option value="Reparacion">Reparacion</option>
                </select>
                </div>

              </div>
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Observacion</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" placeholder="Ingrese una observación  " required name="obserAccesorios">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Descripcion</label>
            <div class="col-sm-10">
              <textarea class="form-control" placeholder="Texto descriptivo" required rows="5" name="desAccesorios"></textarea>
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
