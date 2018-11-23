<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Funcionarios
        
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Funcionarios</a></li>
        <li class="active">Funcionarios</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">

<div><button class="btn btn-primary" data-toggle="modal" data-target="#modal-insertar-Funcionarioo">Registrar <i class="fas fa-plus"></i></button></div>
<br>
<div class=" table-responsive">
<table class="table table-dark "  id="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Rut</th>
      <th scope="col">Nombre</th>
      <th scope="col">Apellido</th>
      <th scope="col">Grado</th>

      <th scope="col">Estado Civil</th>
      <th scope="col">Imagen </th>
      <th scope="col">Conductor</th>
      <th scope="col">Fecha </th>

      <th scope="col">Acciones </th>
    </tr>
  </thead>
  <tbody>

    <?php 
    
    $Funcionarioo = ControllerFuncionarioo::listarFuncionariooCtr();
    foreach ($Funcionarioo as $key => $value) {
      
      echo '
        <tr>
          <th scope="row">'.$value["id_funcionario"].'</th>
          <td>'.$value["rut"].'</td>
          <td>'.$value["nombre"].'</td>
          <td>'.$value["apellido"].'</td>
          <td>'.$value["grado"].'</td>
          <td>'.$value["estado_civil"].'</td>
          <td width="300"> <img src="'.substr($value["rutaImg"],3).'" class="img-fluid" style="width:200px;"></td>
          <td>'.$value["conductor"].'</td>
         <td>'.$value["fecha"].'</td>
          <td width="100">
          <button class="btn btn-sm btn-info btnEditarFuncionarioo" idFuncionarioo="'.$value["id_funcionario"].'" data-toggle="modal" data-target="#modal-editar-Funcionarioo">
              <i class="far fa-edit"></i>
            </button>
            
           
      ';
    
    if ($_SESSION['id']==2 ){
      echo '
      <button class="btn btn-sm btn-danger btnEliminarFuncionarioo" idFuncionarioo="'.$value["id_funcionario"].'" rutaImagen="'.$value["rutaImg"].'">
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
  </div>

</section>

    <!-- /.content -->
    <script>

$(function() {
  activarNavbar('modFuncionario','regFuncio1')
    console.log( "ready!" );
});
   
</script>
  </div>