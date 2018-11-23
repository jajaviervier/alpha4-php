<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="https://cdn.icon-icons.com/icons2/827/PNG/512/user_icon-icons.com_66546.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $_SESSION["nombre"];?></p>
          <!-- Status -->
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- Sidebar Menu -->
      <ul class="sidebar-menu" data-widget="tree" >
        <li class="header">Menú</li>
        <!-- Optionally, you can add icons to the links -->
        
       <!-- <li class="treeview">
                <a href="home">
                    <img src="views/dist/img/iconos/resumen.png" style="width: 25px;">
                    <span>Resumen</span>
                    <span class="pull-right-container">
                        
                    </span>
                </a>
            </li>
            <ul></ul>--->
            <li class="treeview" id="modFuncionario">
                <a href="#">
                    <img src="views/dist/img/iconos/funcionario.png" style="width: 25px;">
                    &nbsp; 
                    <span>Funcionarios</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                
                <ul class="treeview-menu"> 
                <li id="regFuncio1"><a href="funcionarioo"><i class="fa fa-circle-o"></i>Funcionarios</a></li>
                    <li id="regFuncio2"><a href="fichaDiaria"><i class="fa fa-circle-o"></i>Entrega Accesorios</a></li>
                    <li id="regFuncio3"><a href="fichaDia"><i class="fa fa-circle-o"></i>Hoja de Rg. Equipo Táctico </a></li>

                </ul>
            </li>
        <li class="treeview" id="modArmas">
                <a href="armas">
                    <img src="views/dist/img/iconos/arma.png" style="width: 25px;">
                    &nbsp; 
                    <span>Armas</span> 
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu"> 
                    <li  id="regArm1"><a href="armas"><i class="fa fa-circle-o"></i>Ingresar Armas</a></li>
                    <li id="regArm2"><a href="itemArmas"><i class="fa fa-circle-o" id="stockArm"></i>Registrar Armas</a></li>

                </ul>
            </li>
            <li class="treeview" id="modCascos">
                <a href="#">
                    <img src="views/dist/img/iconos/casco.png" style="width: 25px;"> &nbsp; 
                    <span>Cascos</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                
                <ul class="treeview-menu"> 
                    <li id="regCasc1"><a href="cascositem"><i class="fa fa-circle-o"></i>Ingresar Cascos</a></li>
                    <li id="regCasc2"><a href="cascos"><i class="fa fa-circle-o"></i>Registrar Cascos</a></li>

                </ul>
            </li>
            <li class="treeview " id="modRadios">
                <a href="#">
                    <img src="views/dist/img/iconos/radio.png" style="width: 25px;"> &nbsp; 
                    <span>Radios</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                
                <ul class="treeview-menu"> 
                    <li id="regRadi1"><a href="radios"><i class="fa fa-circle-o"></i>Ingresar Radios</a></li>
                    <li id="regRadi2"><a href="accEquipoRadio"><i class="fa fa-circle-o"></i>Accesorios de Radios</a></li>

                </ul>
            </li>
            
            <li class="treeview " id="modChalecos">
                <a href="#">
                    <img src="views/dist/img/iconos/chaleco.png" style="width: 25px;">
                    &nbsp; 
                    <span>Chalecos</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                
                <ul class="treeview-menu"> 
                    <li id="regChale1"><a href="chalecos"><i class="fa fa-circle-o"></i>Ingresar Chalecos</a></li>
                    <li id="regChale2"><a href="itemChalecos"><i class="fa fa-circle-o"></i>Registrar Chalecos</a></li>

                </ul>
            </li>
            <li class="treeview "  id="modAccesorios">
                <a href="#">
                    <img src="views/dist/img/iconos/accesorio.png" style="width: 25px;"> &nbsp; 
                    <span>Accesorios</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                
                <ul class="treeview-menu"> 
                    <li id="regAcc1"><a href="accesorios" ><i class="fa fa-circle-o"></i>Stock Accesorios</a></li>
                    <li id="regAcc2"><a href="bincardAcc"><i class="fa fa-circle-o"></i>BinCard Acc</a></li>
                    <li id="regAcc3"><a href="crearAcc"><i class="fa fa-circle-o"></i>Crear Accesorios</a></li>

                </ul>
            </li>
         
            <li class="treeview" id="modVehiculos">
                <a href="#">
                    <img src="views/dist/img/iconos/car.png" style="width: 25px;">
                    &nbsp; 
                    <span>Vehículos</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                
                <ul class="treeview-menu"> 
                    <li id="regVehi"><a href="vehiculos"><i class="fa fa-circle-o"></i>Control de Vehículos</a></li>
                   

                </ul>
            </li>
            <li class="treeview" id="modQuimicos">
                <a href="#">
                    <img src="views/dist/img/iconos/quimico.png" style="width: 25px;">
                    &nbsp; 
                    <span>Químicos</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                
                <ul class="treeview-menu"> 
                    <li id="regQuimi1"><a href="quimicos"><i class="fa fa-circle-o"></i>&nbsp; Stock de Quimicos</a></li>
                    <li id="regQuimi2"><a href="bincardQuim"><i class="fa fa-circle-o"></i>Bincard Quimicos</a></li>
                    <li id="regQuimi3"><a href="crearQuimicos"><i class="fa fa-circle-o"></i>Registrar Quimicos</a></li>

                </ul>
            </li>
            <li class="treeview " id="modPerfil">
                <a href="#">
                    <img src="views/dist/img/iconos/user.png" style="width: 25px;">
                    &nbsp; 
                    <span>Perfil</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                
                <ul class="treeview-menu"> 
                    <!--<li id="regPerf1"><a href="perfil"><i class="fa fa-circle-o"></i>Perfil</a></li>-->
                    <li id="regPerf2"><a href="editarperfil"><i class="fa fa-circle-o"></i>Editar Perfil</a></li>

                </ul>
            </li>
          
      

      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>