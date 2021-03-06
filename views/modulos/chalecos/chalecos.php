<script src="views/modulos/chalecos/chalecos.js">

</script>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
     Chalecos
        <small>Registro historico.</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
        <li class="active">Chalecos</li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content container-fluid">
 <div class="row">
<form class="col-md-12 card" onsubmit="chac.filtrarTabl(fechaInicio.value,fechaFinal.value); return false">
<div class="row">
<!-- Dede-->
<div class="col-md-4 ">
<div class="form-group">
    <input type="date" class="form-control" id="fechaInicio" required min="2018-01-01">
    <label>Desde</label>
  </div>
</div>
   <!--Fin desde -->
<!-- Dede-->
<div class="col-md-4 ">
<div class="form-group">
    <input type="date" class="form-control" id="fechaFinal"  required min="2018-01-01">
    <label>Hasta</label>
  </div>
</div>
   <!--Fin Hasta -->
   <!-- Dede-->
<div class="col-md-4 ">
  <div class="form-group">
    <input type="submit" class="form-control" value="Filtrar">
  </div>
</div>
   <!--Fin Hasta -->
</div>
 </div>


<form class="col-md-12">
<table class="table table-dark table-bordered"  id="tablaChalecos">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Fecha</th>
      <th scope="col">Hora</th>
      <th scope="col">Descripcion</th>
     
    </tr>
  </thead>
  <tbody id="cuerpoChalecos">
  </tbody>
</table>

</div>





<script>
var chac= new Chalecos();
$(document).ready( function () {
    $('#tablaChalecos').hide(50);

} );</script>
    </section>
    <!-- /.content -->
  </div>