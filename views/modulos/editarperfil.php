<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
     
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Perfil</a></li>
        <li class="active">Perfil de Usuario</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">

      <br>
      <table class="table table-dark" id="table">
        <thead>
          <tr>
            <th scope="col">#</th> 
           <th scope="col">Nombre</th>
            <th scope="col">Correo</th>    
            <th scope="col">Contraseña</th>    
            <th scope="col">Usuarios</th>
            <th scope="col">Activo</th>
            <th scope="col">Acciones</th>
          </tr>
        </thead>
        <tbody>

          <?php 
          $id_usuario = $_SESSION["id"];

          $Perfil = ControllerPerfil::listarPerfilCtr($id_usuario);

          foreach ($Perfil as $key => $value) {
           
            echo '
              <tr>
                <th scope="row">'.$value["idusuarios"].'</th>
                <td>'.$value["usuariosNombre"].'</td>
                <td>'.$value["usuariosCorreo"].'</td>
                <td><input type="password" class="sinborde confondo" disabled value ="'.$value["usuariosPass"].'"></td> 
                 <td width="300"> <img src="'.substr($value["usuariosAvatar"],3).'" class="img-fluid" style="width:200px;"></td>
                <td></td> 


     
                <td width="100">
                  <button class="btn btn-md btn-info btnEditarPerfil" id_usuario="'.$value["idusuarios"].'" data-toggle="modal" data-target="#modal-editar-perfil">
                    <i class="far fa-edit">Actualizar</i>
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
  activarNavbar('modPerfil','regPerf2')
    console.log( "ready!" );
});
   
</script>
  </div>