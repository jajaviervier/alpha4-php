<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Categoria Chalecos
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Chalecos</a></li>
        <li class="active">Categoria Chalecos</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">

      <div><button class="btn btn-primary" data-toggle="modal" data-target="#modal-insertar-Chalecos">Registrar <i class="fas fa-plus"></i></button></div>
      <br>
      <table class="table table-dark" id="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Modelo</th>    
            <th scope="col">Marca</th>
        

            <th scope="col">Acciones</th>
          </tr>
        </thead>
        <tbody>
<!-- se soluciona problema de visualizacion 27/09/2018 -->
          <?php 
          
          $Chalecos = ControllerChalecos::listarChalecosCtr();

          foreach ($Chalecos as $key => $value) {
        
            echo '
              <tr>
                <th scope="row">'.$value["id_chalecos"].'</th>
                <td>'.$value["modelo"].'</td>
                <td>'.($value["marca"]).'</td>
                             
                <td width="100">
                  <button class="btn btn-sm btn-info btnEditarChalecos " id_chalecos="'.$value["id_chalecos"].'" data-toggle="modal" data-target="#modal-editar-Chalecos">
                    <i class="far fa-edit"></i>
                  </button>
                  <button class="btn btn-sm btn-danger btnEliminarChalecos" idChalecos="'.$value["id_chalecos"].'" ">
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
  activarNavbar('modChalecos','regChale1')
    console.log( "ready!" );
});
   
</script>
  </div>