<?php

require_once "models/quimicos.modelo.php";
require_once "controllers/quimicos.controller.php";
?>
<div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Bincard De Quimicos
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Bincard</a></li>
        <li class="active">Bincard Quimicos </li>
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
            <th scope="col">Tipo</th>
            <th scope="col">Calibre</th>
            <th scope="col">Marca</th>
            <th scope="col">Cantidad</th>
            <th scope="col">Descripción</th>
            <th scope="col">Fecha Registro</th>
            <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>

          <?php

          $Quimicos = ControllerQuimicos::listarbincardQuimicosCtr();

          foreach ($Quimicos as $key => $value) {

            echo '
              <tr>
                <th scope="row">'.$value["id"].'</th>
                <td>'.$value["serie"].'</td>
                <td>'.$value["tipo"].'</td>
                <td>'.$value["calibre"].'</td>
                <td>'.$value["marca"].'</td>
                <td>'.$value["cantidad"].'</td>
                <td>'.$value["descripcion"].'</td>
                <td>'.$value["fecha"].'</td>
                <td width="100">
                
                <button class="btn btn-sm btn-danger btnEliminarQuimicos" idQuimicos="'.$value["id"].'" ">
                  <i class="far fa-trash-alt"></i>
                </button>
              </td>

                </td>
              </tr>
            ';
          }

          ?>
        </tbody>
      </table>

    </section>
    <!-- /.content -->

        <script>

$(function() {
  activarNavbar('modQuimicos','regQuimi2')
    console.log( "ready!" );
});
   
</script>
  </div>



  <div class="modal fade" id="modal-editar-Quimicos"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
      <button type="button" class="close" title="Cerrar Modal" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h5 class="modal-title" id="exampleModalLabel">Editar Quimicos</h5>
      
      </div>
      <div class="modal-body">
        <form id="formu-editar-Quimicos">
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
            <label class="col-sm-2 col-form-label">Descripción</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" placeholder="Ingresar descripcion" name="descripQuimicos">
            </div>
          </div>
      
          <input type="hidden" name="tipoOperacion" value="actualizarQuimicos">
         
          <input type="hidden" name="id_Quimicos">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-primary">Actualizar</button>
        </form>
      </div>
    </div>
  </div>
</div>
