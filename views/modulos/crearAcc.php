<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Crear Accesorios
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>crearAcc</a></li>
        <li class="active">Crear Accesorios</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">

      <div><button class="btn btn-primary" data-toggle="modal"  data-target="#modal-insertar-crearAcc">Registrar <i class="fas fa-plus"></i></button></div>
      <br>
      <table class="table table-dark display responsive no-wrap" id="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Codigo</th>
            <th scope="col">Nombre</th>
            <th scope="col">Descripcion</th>
            <th scope="col">Fecha</th>
            <th scope="col">Acciones</th>
          </tr>
        </thead>
        <tbody>

          <?php

          $crearAcc = ControllercrearAcc::listarcrearAccCtr();

          foreach ($crearAcc as $key => $value) {
              $date = date_create ($value ["fecha"]);
              $fecha = date_format ($date , 'd-m-Y');
            echo '
              <tr>
                <th scope="row">'.$value["id"].'</th>
                <td>'.$value["codigo"].'</td>

                <td>'.$value["nombreCodigo"].'</td>
                <td>'.$value["descripcionCodigo"].'</td>
                <td>'.$fecha.'</td>

                <td width="100">
                  <button class="btn btn-sm btn-info btnEditarcrearAcc" idcrearAcc="'.$value["id"].'" data-toggle="modal" data-target="#modal-editar-crearAcc">
                    <i class="far fa-edit"></i>
                  </button>
                  <button class="btn btn-sm btn-danger btnEliminarcrearAcc" idcrearAcc="'.$value["id"].'" ">
                    <i class="far fa-trash-alt"></i>
                  </button>
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
  activarNavbar('modAccesorios','regAcc3')
    console.log( "ready!" );
});
   
</script>
  </div>