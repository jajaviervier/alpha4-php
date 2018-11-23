<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Gestor de Radios
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Radios</a></li>
        <li class="active">Gestor de Radios</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">

      <div><button class="btn btn-primary" data-toggle="modal"  data-target="#modal-insertar-Radios">Registrar <i class="fas fa-plus"></i></button></div>
      <br>
      <table class="table table-dark" id="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Serie</th>    
            <th scope="col">Modelo</th>
            <th scope="col">Tipo Equipo</th>
           
            <th scope="col">Serie GPS</th>
            <th scope="col">Observacion</th>
            <th scope="col">Cargo</th>
            <th scope="col">Acciones</th>
          </tr>
        </thead>
        <tbody>

          <?php 
          
          $Radios = ControllerRadios::listarRadiosCtr();

          foreach ($Radios as $key => $value) {
           
            echo '
              <tr>
                <th scope="row">'.$value["id"].'</th>
                <td>'.$value["serie"].'</td>
                <td>'.$value["modelo"].'</td>
                <td>'.$value["tipo_equipo"].'</td> 
                <td>'.$value["serie_GPS"].'</td> 
                <td>'.$value["observacion"].'</td>  
                <td>'.$value["id_radio_funcionario"].'</td>             
                <td width="100">
                  <button class="btn btn-sm btn-info btnEditarRadios" idRadios="'.$value["id"].'" data-toggle="modal" data-target="#modal-editar-Radios">
                  <i class="far fa-edit"></i>
                  </button>
                  <button class="btn btn-sm btn-danger btnEliminarRadios" idRadios="'.$value["id"].'" ">
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
  activarNavbar('modRadios','regRadi1')
    console.log( "ready!" );
});
   
</script>
  </div>