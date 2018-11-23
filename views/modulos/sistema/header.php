

<header class="main-header">

    <!-- Logo -->
    <a href="home" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>LPHA</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Alpha</b></span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
      <i class="fas fa-bars"></i>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
    

          <!-- Notifications Menu -->
          <li class="dropdown notifications-menu">
   
            <!-- Menu toggle button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <i class="fas fa-exclamation-triangle"></i>
              <span class="label label-warning">10</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 10 notifications</li>
              <li>
                <!-- Inner Menu: contains the notifications -->
                <ul class="menu">
                  <li><!-- start notification -->
                    <a href="#">
                      <i class="fa fa-users text-aqua"></i>Salió el Funcionario  "Funcionario 1" a las : 17:37.
                    </a>
                  </li>
                  <li><!-- start notification -->
                    <a href="#">
                      <i class="fa fa-users text-green"></i>Salió el Vehiculo  "TTTT-00" a cargo de : "Funcionario 2" a las : 19:50 .
                    </a>
                  </li>
                  <li><!-- start notification -->
                    <a href="#">
                      <i class="fa fa-users text-aqua"></i>Salió el Funcionario  "Funcionario 2" a las : 19:50.
                    </a>
                  </li>
                  <li><!-- start notification -->
                    <a href="#">
                      <i class="fa fa-users text-green"></i>Ingresó el Funcionario  "Funcionario 1" a las : 20:50.
                    </a>
                  </li>
                  <li><!-- start notification -->
                    <a href="#">
                      <i class="fa fa-users text-green"></i>Ingresó el Vehiculo  "TTTT-00" a cargo de : "Funcionario 2" a las : 20:50 .
                    </a>
                  </li>
                  <!-- end notification -->
                </ul>
              </li>
              <li class="footer"><a href="#">View all</a></li>
            </ul>
          </li>
          <!-- Tasks Menu -->

          <!-- User Account Menu -->
          <li class="dropdown user user-menu">
            <!-- Menu Toggle Button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <!-- The user image in the navbar-->
              <img src="<?php echo substr( $_SESSION["avatar"], 3) ; ?>" class="user-image" alt="User Image">

              <span class="hidden-xs"><?php echo $_SESSION["nombre"]; ?></span>
            </a>
            <ul class="dropdown-menu">
              <li class="user-header">
                <img src="<?php echo substr( $_SESSION["avatar"], 3) ; ?>" class="img-circle" alt="User Image">
                <p>
                  <?php echo $_SESSION["nombre"]; ?>
                </p>
              </li>

              <li class="user-footer">
                <div class="pull-left">
                  <a href="perfil" class="btn btn-default btn-flat">Perfil</a>
                </div>  
                <div class="pull-right">
                  <a href="salir" class="btn btn-default btn-flat">Salir</a>
                </div>
              </li>
            </ul>
          </li>
          <li>
            <script type="text/javascript">
  function makeArray() {
for (i = 0; i<makeArray.arguments.length; i++)
this[i + 1] = makeArray.arguments[i];}
var months = new makeArray('Enero','Febrero','Marzo','Abril','Mayo',
'Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre');
var date = new Date();
var day = date.getDate();
var month = date.getMonth() + 1;
var yy = date.getYear();
var year = (yy < 1000) ? yy + 1900 : yy;

document.write(" " + day + " de " + months[month] + " del " + year);

</script>
                   <!-- /.messages-menu -->
<div id="reloj" style="font-size:20px;"></div>
          </li>

          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>