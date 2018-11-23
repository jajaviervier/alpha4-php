<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Stock Chalecos
      </h1>

    </section>

    <!-- Main content -->
    <section class="content container-fluid">
    <!-- Tabla que contiene los datos de la tabla Chalecos-->

      <div><button class="btn btn-primary" data-toggle="modal" data-target="#modal-insertar-itemChalecos">Registrar <i class="fas fa-plus"></i></button></div>
      <br>
      <table class="table table-dark" id="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Numero Serie</th>
            <th scope="col">Marca</th>
            <th scope="col">Modelo</th>    
            <th scope="col">Estado</th>
            <th scope="col">Chaleco Funcionario</th>

            <th scope="col">Acciones</th>
          </tr>
        </thead>
        <tbody>

           <!-- el siguiente foreach recorre la variable value para poder imprimir los datos-->

                    <?php 





          $Chalecos = ControllerItemChalecos::listarItemChalecosCtr();

          foreach ($Chalecos as $key => $value) {
            echo '
              <tr>
                <th scope="row">'.$value["id_itemchalecos"].'</th>
                <td>'.$value["serie"].'</td>
                <td>'.$value["marca"].'</td>
                <td>'.$value["modelo"].'</td>
                <td>'.$value["estado"].'</td>
                <td>'.$value["rut"].' '.$value["nombre"].'</td>
                <td width="100">
                  <button class="btn btn-sm btn-info btnEditarItemChalecos" idItemChalecos="'.$value["id_itemchalecos"].'" data-toggle="modal" data-target="#modal-editar-itemChalecos">
                    <i class="far fa-edit"></i>
                  </button>
                  
                

                  <button class="btn btn-sm btn-danger btnEliminarItemChalecos" idItemChalecos="'.$value["id_itemchalecos"].'" >
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
  activarNavbar('modChalecos','regChale2')
    console.log( "ready!" );
});
   
</script>
  </div>