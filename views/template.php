<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>ALPHA</title>

  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="views/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
  
  <!--Data table Resposive -->
  <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.min.css">
  <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css"/>
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
 
  <link href="css/style.css" rel="stylesheet">
  <!-- data table css PDF-->
  
  <link href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet" >
  <link href="https://cdn.datatables.net/buttons/1.5.2/css/buttons.dataTables.min.css"  rel="stylesheet" >


  <link rel="stylesheet" href="views/bower_components/Ionicons/css/ionicons.min.css">
  <link rel="stylesheet" href="views/dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="views/dist/css/skins/skin-blue.min.css">
  <link rel="stylesheet" href="views/dist/plugins/iCheck/square/blue.css">
  <script src="views/bower_components/jquery/dist/jquery.min.js"></script>
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
  <link rel="stylesheet" type="text/css"  href="views/dist/css/estilosperfil.css">
  
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
<style>
body{
  font-family: 'Roboto', sans-serif;
 
}
.login-page, .register-page{
  background:  url("views/dist/img/fondologin.jpg");
  -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
     background-size: cover;


}

</style>
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  
</head>
<body class="hold-transition skin-blue sidebar-mini  register-page  ">
  
  <?php
    session_start();
    
    if (isset($_SESSION["autenticar"]) && $_SESSION["autenticar"] == "ok") {
      include "modulos/header.php";
      include "modulos/main-sidebar.php";

      if( isset($_GET["ruta"])) {
        
        $enrutar = new ControllerEnrutamiento();
        $enrutar -> enrutamiento();
error_reporting(0);
        include "modulos/modales/modales-".$_GET["ruta"].".php";
      } else {
        include "modulos/home.php";
      }
      include "modulos/footer.php";
    } else {
      include "modulos/login.php";
    }
    
    
  ?>

<script src="views/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="views/dist/js/adminlte.min.js"></script>
<script src="views/dist/plugins/iCheck/icheck.min.js"></script>
<script>
  
  $(function () {
  
  });
</script>

<script src="views/dist/js/funcionarioo.js"></script>

<script src="views/dist/js/chalecos.js"></script>
<script src="views/dist/js/itemchalecos.js"></script>
<script src="views/dist/js/quimicos.js"></script>
<script src="views/dist/js/armas.js"></script>
<script src="views/dist/js/itemArmas.js"></script>
<script src="views/dist/js/cascos.js"></script>
<script src="views/dist/js/cascositem.js"></script>
<script src="views/dist/js/reloj.js"></script>
<script src="views/dist/js/vehiculos.js"></script>
<script src="views/dist/js/crearAcc.js"></script>
<script src="views/dist/js/accEquipoRadio.js"></script>
<script src="views/dist/js/cargaQuimicoVehi.js"></script>
<script src="views/dist/js/crearQuimicos.js"></script>

<script src="views/dist/js/fichaDiaria.js"></script>

<script src="views/dist/js/radios.js"></script>
<script src="views/dist/js/perfil.js"></script>
<script src="views/dist/js/navBar.js"></script>
<script src="views/dist/js/accesorios.js"></script>
<script src="views/dist/js/tableEspañol.js"></script>

<!--Data table Resposive -->
<script src= "https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
<!---sceipt data table-->


    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.flash.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.print.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.26.11/dist/sweetalert2.all.min.js"></script></body>
</html>