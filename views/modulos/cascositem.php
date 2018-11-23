<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Categorias Cascos Item
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
        <li class="active">Here</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">

      <button class="btn btn-primary" data-toggle="modal"  data-target="#modal-insertar-cascositem">Registrar <i class="fas fa-plus"></i></button>
      <table class="table table-dark" id="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Marca</th>
            <th scope="col">Modelo</th>    
          

            <th scope="col">Acciones</th>
          </tr>
        </thead>
        <tbody>

          <?php 
          
          $cascositem = ControllerCascositem::listarCascositemCtr();

          foreach ($cascositem as $key => $value) {
           
            echo '
              <tr>
                <th scope="row">'.$value["id_cascoItem"].'</th>
                <td>'.$value["marca_item"].'</td>
                <td>'.$value["modelo_item"].'</td>            
                <td width="100">
                  <button class="btn btn-sm btn-info btnEditarcascositem" idCascos="'.$value["id_cascoItem"].'" data-toggle="modal" data-target="#modal-editar-cascositem">
                    <i class="far fa-edit"></i>
                  </button>
                  
                  <button class="btn btn-sm btn-danger btnEliminarcascositem" idCascos="'.$value["id_cascoItem"].'" ">
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
  activarNavbar('modCascos','regCasc1')
    console.log( "ready!" );
});
   
</script>
  </div>

