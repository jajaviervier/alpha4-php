<div class="content-wrapper homes">
    <!-- Content Header (Page header) -->
    <!--<section class="content-header">
      <h1>
        Resumen Diario
        <small>Informacion rapida.</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Inicio</a></li>
        <li class="active">Resumen Diario</li>
      </ol>
    </section>-->

    <!-- Main content -->
    <section class="content container-fluid">
    


  <div class="row">
    <!--<div class="col-sm-6">

        <div class="info-box bg-grey">
        <span class="info-box-icon"><i class="fas fa-users"></i></span>
        <div class="info-box-content">
        <span class="info-box-text">Funcionario En Terreno </span>
        <span class="info-box-number"></span>
        
        <div class="progress">
          <div class="progress-bar" style="width: %;" ></div>
        </div>
        <span class="progress-description">
         Actualizado hace 3 min...
        </span>
      </div>-->
  <!-- /.info-box-content -->

<!-- /.info-box -->
    </div>
  </div>
<!-- Tarjeta Vehiculo -->
    <!--<div class="col-sm-6">

        <div class="info-box bg-grey">
        <span class="info-box-icon"><i class="fas fa-car"></i>
        </span>
        <div class="info-box-content">
        <span class="info-box-text">Vehiculos En Terreno</span>
        <span class="info-box-number">2/8</span>
        
        <div class="progress">
          <div class="progress-bar" style="width: 20%;"></div>
        </div>
        <span class="progress-description">
         Actualizado hace 3 min...
        </span>
      </div>

    </div>
    </div>--->
<!-- Tarjeta Vehiculo -->
<!-- Tarjeta Armas -->
<!--<div class="col-sm-6">
<?php

$armas = ControlleritemArmas::listaritemArmasCtr();


$armasActivos=0;
$armasInactivos=0;
$armasTotales=0;
$porcentajeArmas=0;
          foreach ($armas as $key => $value) {
           
            switch ($value["estado"]) {
              case "en Bodega":
              $armasInactivos++;
                  break;
              case "En Terreno":
            
              $armasActivos++;
                  break;

          }
     
        



          } 
          $armasTotales=$armasActivos+$armasInactivos;
          $porcentajeArmas=$armasActivos*100;
          if($armasTotales<1){
            $porcentajeArmas=0;
          }else{
            $porcentajeArmas=$porcentajeArmas/$armasTotales;
          }
         

?>
<div class="info-box bg-grey">
<span class="info-box-icon"><i class="fas fa-list-ul"></i>
</span>
<div class="info-box-content">
<span class="info-box-text">Armas En Terreno</span>
<span class="info-box-number"><?php echo $armasActivos; ?>/<?php echo $armasInactivos; ?></span>

<div class="progress">
  <div class="progress-bar bg-green"  style="width: <?php echo $porcentajeArmas; ?>%;" ></div>
</div>
<span class="progress-description">
 Actualizado hace 3 min...
</span>
</div>

</div>
</div>-->
<!-- Tarjeta Armas -->

<!-- Tarjeta Quimico -->
<!---<div class="col-sm-6">

<div class="info-box bg-grey">
<span class="info-box-icon"><i class="fas fa-flask"></i>
</span>
<div class="info-box-content">
<span class="info-box-text">Quimicos Disponible</span>
<span class="info-box-number">200/1800</span>

<div class="progress">
  <div class="progress-bar " style="width: 20%;"></div>
</div>
<span class="progress-description">
 Actualizado hace 3 min...
</span>
</div>

</div>
</div>-->
<!-- Tarjeta Quimicos -->
    </section>
    <!-- /.content -->
</div>

<style>
.homes{
  background:  url("views/dist/img/home.jpeg");
  -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
     background-size: cover;


}
</style>