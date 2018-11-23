<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Gestor de AccEquipoRadio
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Equipo Radio</a></li>
        <li class="active">Gestor de Acc Equipo Radio</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">

      <div><button class="btn btn-primary" data-toggle="modal"  data-target="#modal-insertar-AccEquipoRadio">Registrar <i class="fas fa-plus"></i></button></div>
      <br>
      <table class="table table-dark" id="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Serie</th>    
            <th scope="col">Cantidad</th>
            <th scope="col">Descripcion</th>
           
            

            <th scope="col">Acciones</th>
          </tr>
        </thead>
        <tbody>

          <?php 
          
          $AccEquipoRadio = ControllerAccEquipoRadio::listarAccEquipoRadioCtr();

          foreach ($AccEquipoRadio as $key => $value) {
           
            echo '
              <tr>
                <th scope="row">'.$value["id"].'</th>
                <td>'.$value["serie"].'</td>
                <td>'.$value["cantidad"].'</td>
                <td>'.$value["descripcion"].'</td>              
                <td width="100">
                  <button class="btn btn-sm btn-info btnEditarAccEquipoRadio" idAccEquipoRadio="'.$value["id"].'" data-toggle="modal" data-target="#modal-editar-AccEquipoRadio">
                    <i class="far fa-edit"></i>
                  </button>
                  <button class="btn btn-sm btn-danger btnEliminarAccEquipoRadio" idAccEquipoRadio="'.$value["id"].'" ">
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
  activarNavbar('modRadios','regRadi2')
    console.log( "ready!" );
});
   
</script>
  </div>