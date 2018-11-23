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
                <section style="background:#17202A;margin-left: auto;
                margin-right: auto;width:50%;border-style:ridge;border-radius: 2em;">
                <div class="form-row">

                <?php 
                $id_usuario = $_SESSION["id"];

                $Perfil = ControllerPerfil::listarPerfilCtr($id_usuario);

                foreach ($Perfil as $key => $value) {

                echo '

                <div class="form-row">
                <div class="titulo">
                <h2>
                Perfil de Usuario
                </h2></div>



                <div class="form-group ">
                <img src="'. substr($value["usuariosAvatar"], 3).'"  class="img-fluid" style="margin-top:10px; width: 40%;
                display: block;
                margin-left: auto;
                margin-right: auto;border-radius:10em;border:3px solid #45B39D  ">
                </div> 




                <div class="fondo">
                <div class="form-group col-sm-12 nombre">

                <h3>Nombre : '.$value["usuariosNombre"].'</h3>
                </div>
                <div class="form-group col-sm-12 email">
                <h3>Email : '.$value["usuariosCorreo"].'<h3>

                </div>


                <div class="form-group pass col-sm-12">
                <h3>Contraseña : <input type="password" class="sinborde confondo" disabled value ="'.$value["usuariosPass"].'"></h3>
                </div> 

                <button class="btn btn-md btn-info btnEditarRadios" OnClick="location.href=  \'editarperfil\'" >



                <i class="far fa-edit">Actualizar</i>




                </button>
                </div> 

                </div>


                </section>

  ';
}
          ?>

   
  


    </section>
    <!-- /.content -->
    <script>

$(function() {
  activarNavbar('modPerfil','regPerf1')
    console.log( "ready!" );
});
   
</script>

  </div>