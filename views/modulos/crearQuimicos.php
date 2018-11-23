<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Registrar  Quimicos
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>CrearQuimicos</a></li>
        <li class="active">Gestor de CrearQuimicos</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">

      <div><button class="btn btn-primary" data-toggle="modal"  data-target="#modal-insertar-CrearQuimicos">Registrar <i class="fas fa-plus"></i></button></div>
      <br>
      <table class="table table-dark" id="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Serie</th>
            <th scope="col">Tipo</th>
            <th scope="col">Calibre</th>
            <th scope="col">Marca</th>
            <th scope="col">Modelo</th>
            <th scope="col">Acciones</th>
          </tr>
        </thead>
        <tbody>

          <?php

          $CrearQuimicos = ControllerCrearQuimicos::listarCrearQuimicosCtr();

          foreach ($CrearQuimicos as $key => $value) {

            echo '
              <tr>
                <th scope="row">'.$value["id"].'</th>
                <td>'.$value["codigo"].'</td>
                <td>'.$value["tipo"].'</td>
                <td>'.$value["calibre"].'</td>
                <td>'.$value["marca"].'</td>
                <td>'.$value["modelo"].'</td>
               
                <td width="100">
                  <button class="btn btn-sm btn-info btnEditarCrearQuimicos" idCrearQuimicos="'.$value["id"].'" data-toggle="modal" data-target="#modal-editar-CrearQuimicos">
                    <i class="far fa-edit"></i>
                  </button>
                  <button class="btn btn-sm btn-danger btnEliminarCrearQuimicos" idCrearQuimicos="'.$value["id"].'" ">
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
  activarNavbar('modQuimicos','regQuimi3')
    console.log( "ready!" );
});
   
</script>
  </div>