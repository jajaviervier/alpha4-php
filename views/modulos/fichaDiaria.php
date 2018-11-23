<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Entrega de Accesorios
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Entrega de Accesorios</a></li>
        <li class="active">Entrega de Accesorios</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">

      <div><button class="btn btn-primary" data-toggle="modal"  data-target="#modal-insertar-fichaDiaria">Registrar <i class="fas fa-plus"></i></button></div>
      <br>
      <table class="table table-dark display table-responsive no-wrap" id="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Funcionario</th>
            <th scope="col">Accesorio</th>
            <th scope="col">Cantidad</th>
            <th scope="col">Obs.</th>
            <th scope="col">Fecha</th>
            <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>

          <?php

          $fichaDiaria = ControllerfichaDiaria::listarfichaDiariaCtr();

          foreach ($fichaDiaria as $key => $value) {

            echo '
              <tr>
                <th scope="row">'.$value["id"].'</th>
                <td>'.$value["rut"].' '.$value["nombre"].' '.$value["apellido"].'</td>
                <td>'.$value["nombreCodigo"].'</td>
                <td>'.($value["cantidad"]*-1).'</td>
                <td>'.$value["descripcion"].'</td>
                <td>'.$value["fecha"].'</td>
                
                <td width="100">
                <button class="btn btn-sm btn-info btnEditarfichaDiaria" idfichaDiaria="'.$value["id"].'" data-toggle="modal" data-target="#modal-editar-fichaDiaria">
                <i class="far fa-edit"></i>
              </button>
              
              ';
            if ($_SESSION['id']==2 ){
              echo '
              
              <button class="btn btn-sm btn-danger btnEliminarfichaDiaria" idfichaDiaria="'.$value["id"].'" ">
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
  activarNavbar('modFuncionario','regFuncio2')
    console.log( "ready!" );
});
   
</script>
  </div>