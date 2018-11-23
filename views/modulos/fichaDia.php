<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       Hoja de Registro Equipo Tactico
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Hoja de Registro</a></li>
        <li class="active">Hoja de Registro Equipo Tactico</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">

      <div></div>
      <br>
      <table class="table table-dark display table-responsive no-wrap" id="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Funcionario</th>
            <th scope="col">Chaleco</th>
            <th scope="col">Arma</th>
            <th scope="col">Casco</th>
            <th scope="col">Radio</th>
            
            </tr>
        </thead>
        <tbody>

          <?php

          $FichaDia = ControllerFichaDia::listarFichaDiaCtr();

          foreach ($FichaDia as $key => $value) {

            echo '
              <tr>
                <th scope="row">'.$value["id_funcionario"].'</th>
                <td scope="row">'.$value["rut"].'&nbsp;&nbsp;'.$value["nombre"].'&nbsp;&nbsp;'.$value["apellido"].'</td>
                <td>'.$value["serie_chaleco"].'&nbsp;&nbsp;'.$value["marca_chaleco"].'&nbsp;&nbsp;'.$value["modelo_chaleco"].'</td>
                <td >'.$value['serie_arma'].'</td>
                <td >'.$value['modelo_casco'].'&nbsp;&nbsp;'.$value['casco_marca'].'</td>
                <td >'.$value['serie_radio'].'</td>
               
          
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
  activarNavbar('modFuncionario','regFuncio3')
    console.log( "ready!" );
});
   
</script>
  </div>