
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Stock de Quimicos
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Stock Quimicos</a></li>
        <li class="active">Stock de  Quimicos</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">

      <div><button class="btn btn-primary" data-toggle="modal"  data-target="#modal-insertar-Quimicos">Registrar <i class="fas fa-plus"></i></button></div>
      <br>
      <table class="table table-dark" id="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Tipo de Quimico</th>
            <th scope="col">Stock</th>
           
          </tr>
        </thead>
        <tbody>

          <?php

          $Quimicos = ControllerQuimicos::listarQuimicosCtr();

          foreach ($Quimicos as $key => $value) {

            echo '
              <tr>
                <th scope="row">'.$value["id"].'</th>
                <td>'.$value["tipo"].'</td>
                <td>'.$value["stock"].'</td>
                
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
  activarNavbar('modQuimicos','regQuimi1')
    console.log( "ready!" );
});
   
</script>
  </div>