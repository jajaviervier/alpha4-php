<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Categoría Armas
      </h1>
      <ol class="breadcrumb">
        <li><a href="armas"><i class="fa fa-dashboard"></i>Armas</a></li>
        <li class="active">Categoría Armas</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">
      <div><button class="btn btn-primary" data-toggle="modal"  data-target="#modal-insertar-armas">Registrar <i class="fas fa-plus"></i></button></div>
      <br>
      
      
      <table class="table  table-dark  table-responsive"   id="table"><!--como llamar la otra funcion para cambiar el idioma? -->
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Marca</th>    
            <th scope="col">Modelo</th>
            <th scope="col">Calibre</th>
           
            

            <th scope="col">Acciones</th>
          </tr>
        </thead>
        <tbody>

          <?php 
          
          $armas = ControllerArmas::listarArmasCtr();

          foreach ($armas as $key => $value) {
           
            echo '
              <tr>
                <th scope="row">'.$value["id"].'</th>
                <td>'.$value["marca"].'</td>
                <td>'.$value["modelo"].'</td>
                <td>'.$value["calibre"].'</td>              
                <td width="100">
                  <button class="btn btn-sm btn-info btnEditarArmas" idArmas="'.$value["id"].'" data-toggle="modal" data-target="#modal-editar-armas">
                    <i class="far fa-edit"></i>
                  </button>
                  <button class="btn btn-sm btn-danger btnEliminarArmas" idArmas="'.$value["id"].'" ">
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
  activarNavbar('modArmas','regArm1')
    console.log( "ready!" );
});
   
</script>
  </div>