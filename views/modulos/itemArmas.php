<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Stock Armas
        
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Armas</a></li>
        <li class="active">Stock Armas</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">

<div><button class="btn btn-primary" data-toggle="modal" data-target="#modal-insertar-itemArmas">Registrar <i class="fas fa-plus"></i></button></div>
<br>
<div class=" table-responsive">
<table class="table table-dark "  id="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Serie</th>
      <th scope="col">Tipo de Arma</th>
      <th scope="col">Marca</th>
      <th scope="col">Modelo</th>
      <th scope="col">Funcionario</th>
      <th scope="col">Estado</th>
      <th scope="col">Imagen </th>
      <th scope="col">Fecha </th>
      <th scope="col">Acciones </th>
    </tr>
  </thead>
  <tbody>

    <?php 
    
    $itemArmas = ControlleritemArmas::listaritemArmasCtr();
    foreach ($itemArmas as $key => $value) {
      echo '
        <tr>
          <th scope="row">'.$value["id"].'</th>
          <td>'.$value["serie"].'</td>
          <td>'.$value["tipoarma"].'</td>
          <td>'.$value["marca"].'</td>
          <td>'.$value["modelo"].'</td>
          <td>'.$value["rut"].' '.$value["nombre"].' '.$value["apellido"].'</td>
         


          <td>'.$value["estado"].'</td>
          <td width="300"> <img src="'.substr($value["rutaImg"],3).'" class="img-fluid" style="width:200px;"></td>
            <td>'.$value["fecha"].'</td>
          <td width="100">
        

            <button class="btn btn-sm btn-info btnEditaritemArmas" iditemArmas="'.$value["id"].'" data-toggle="modal" data-target="#modal-editar-itemArmas">
              <i class="far fa-edit"></i>
            </button>
            <button class="btn btn-sm btn-danger btnEliminaritemArmas" iditemArmas="'.$value["id"].'" rutaImagen="'.$value["rutaImg"].'">
              <i class="far fa-trash-alt"></i>
            </button>
          
          

          
          </td>
        </tr>
      ';
    }
    ?>
  </tbody>
</table>
  </div>

</section>

    <!-- /.content -->

    <script>

$(function() {
  activarNavbar('modArmas','regArm2')
    console.log( "ready!" );
});
   
</script>
  </div>