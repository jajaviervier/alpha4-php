<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Control de Vehiculos
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Vehiculos</a></li>
        <li class="active">Control de Vehiculos</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">

      <div><button class="btn btn-primary" data-toggle="modal"  data-target="#modal-insertar-Vehiculos">Registrar <i class="fas fa-plus"></i></button></div>
      <br>
      <table class="table table-dark display table-responsive no-wrap" id="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Patente</th>    
            <th scope="col">Km.Salida</th>
            <th scope="col">Km.Llegada</th>
            <th scope="col">Km.Recorrido</th>
            <th scope="col">Cantidad</th>
            <th scope="col">Conductor</th>
            <th scope="col">Acciones</th>
          </tr>
        </thead>
        <tbody>

          <?php 
          
          $Vehiculos = ControllerVehiculos::listarVehiculosCtr();

          foreach ($Vehiculos as $key => $value) {
           
            echo '
              <tr>
                <th scope="row">'.$value["id"].'</th>
                <td>'.$value["patente"].'</td>
                <td>'.$value["km_salida"].'</td>
                <td>'.$value["km_llegada"].'</td>
                <td>'.($value["km_recorrido"]*-1).'</td>
                <td>'.($value["cantidad"]*-1).'</td>
                <td>'.$value["rut"].' '.$value["nombre"].' ' .$value["apellido"].'</td> 
                
                <td width="100">
                <button class="btn btn-sm btn-danger btnEliminarVehiculos" idVehiculos="'.$value["id"].'" ">
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
  activarNavbar('modVehiculos','regVehi')
    console.log( "ready!" );
});
   
</script>
  </div>

  <!--
  <td width="100">
                  <button class="btn btn-sm btn-info btnEditarVehiculos" idVehiculos="'.$value["id"].'" data-toggle="modal" data-target="#modal-editar-Vehiculos">
                    <i class="far fa-edit"></i>
                  </button>
                  <button class="btn btn-sm btn-danger btnEliminarVehiculos" idVehiculos="'.$value["id"].'" ">
                    <i class="far fa-trash-alt"></i>
                  </button>
                </td>
                -->