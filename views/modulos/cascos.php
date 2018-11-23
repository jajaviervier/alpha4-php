<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Stock Cascos item
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
        <li class="active">Here</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">

      <button class="btn btn-primary" data-toggle="modal"  data-target="#modal-insertar-cascos">Registrar <i class="fas fa-plus"></i></button>
      <tbody>
      <table class="table table-dark" id="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Marca y Modelo</th>
             <th scope="col">Serie</th> 
            <th scope="col">Observación</th> 
            <th scope="col">Estado</th>
            <th scope="col">Casco Funcionario</th>
             <th scope="col">Fecha Registro</th>
             
            <th scope="col">Acciones</th>
          </tr>
        </thead>
        

          <?php 
          
          $cascos = ControllerCascos::listarCascosCtr();

          foreach ($cascos as $key => $value) {
            if($value["estado_casco"]=="0"){
              $estado="Operativo";
            }elseif($value["estado_casco"]=="1"){
              $estado="En merma";
            }
            else{
              $estado="En reparación";
            }
           
            $date=date_create($value["fecha_registro"]);
            $fecha=date_format($date,'d-m-Y');
            //$fecha=date_format($date,'d-m-Y H:i:s');
            
            echo '
              <tr>
                <th scope="row">'.$value["id_cascos"].'</th>
                <td>'.$value["marca_item"].' '.$value["modelo_item"].'  </td>
                <td>'.$value["serie"].'</td>
                <td>'.$value["observacion"].'</td>
                <td>'.$estado.'</td> 
                <td>'.$value["rut"].' '.$value["nombre"].' '.$value["apellido"].'</td>
                <td>'.$fecha.'</td>              
                <td width="100">
                  <button class="btn btn-sm btn-info btnEditarcascos" idCascos="'.$value["id_cascos"].'" data-toggle="modal" data-target="#modal-editar-cascos" >
                    <i class="far fa-edit"></i>
                  </button>
                  <button class="btn btn-sm btn-danger btnEliminarCascos" idCascos="'.$value["id_cascos"].'" ">
                    <i class="far fa-trash-alt"></i>
                  </button> 
                </td>
              </tr>
            ';
          }
          echo " <script> $('#tablaCascos').DataTable(); </script>";
          ?>
        </tbody>
      </table>

    </section>
    <!-- /.content -->
    <script>

$(function() {
  activarNavbar('modCascos','regCasc2')
    console.log( "ready!" );
});
   
</script>
  </div>
  
