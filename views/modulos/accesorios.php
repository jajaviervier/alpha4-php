<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <title>Accesorios</title>
      <h1>
        Stock de Accesorios
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Accesorios</a></li>
        <li class="active">Stock de Accesorios</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">

      <div><button class="btn btn-primary" data-toggle="modal"  data-target="#modal-insertar-Accesorios">Registrar <i class="fas fa-plus"></i></button></div>
      <br>
      <table class="table table-dark display responsive no-wrap" id="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Serie</th>
            <th scope="col">Nombre</th>
            <th scope="col">Descripción</th>
            <th scope="col">Stock</th>
            
          </tr>
        </thead>
        <tbody>

          <?php

          $Accesorios = ControllerAccesorios::listarAccesoriosCtr();

          foreach ($Accesorios as $key => $value) {

            echo '
              <tr>
                <th scope="row">'.$value["id"].'</th>
                <td>'.$value["serie"].'</td>

                <td>'.$value["nombreCodigo"].'</td>
                <td>'.$value["descripcionCodigo"].'</td>
                <td>'.$value["stock"].'</td>
               
                
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
  activarNavbar('modAccesorios','regAcc1')
    console.log( "ready!" );
});
   
</script>
  </div>