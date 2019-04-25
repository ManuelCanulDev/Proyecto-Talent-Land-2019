<aside class="main-sidebar">
      <!-- sidebar: style can be found in sidebar.less -->
      <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
          <div class="pull-left image">
            <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
          </div>
          <div class="pull-left info">
            <p><?php echo $login_session; ?></p>
            <a href="#"><i class="fa fa-circle text-success"></i> En Línea</a>
          </div>
        </div>
        
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
          <li class="header">Barra de Navegación</li>
          <li class="treeview">
            <a href="#">
              <i class="fa fa-dashboard"></i> <span>Panel de Control</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li class="active"><a href="home.php"><i class="fa fa-circle-o"></i> Dashboard </a></li>
        
            </ul>
          </li>
          
         <li class="treeview">
            <a href="#">
              <i class="fa fa-files-o"></i>
              <span>Empleados</span>
              <span class="pull-right-container">
                <span class="label label-primary pull-right">2</span>
              </span>
            </a>
            <ul class="treeview-menu">
              
              <li><a href="view-employed.php"><i class="fa fa-circle-o"></i> Empleados General</a></li>
              <li><a href="register-employed.php"><i class="fa fa-circle-o"></i> Registrar Nuevo Empleado</a></li>
            </ul>
          </li>

          <li class="treeview">
            <a href="#">
              <i class="fa fa-files-o"></i>
              <span>Fermentación</span>
              <span class="pull-right-container">
                <span class="label label-primary pull-right">4</span>
              </span>
            </a>
            <ul class="treeview-menu">
              
              <li><a href=""><i class="fa fa-circle-o"></i> Ver Datos</a></li>
              <li><a href="import-fer.php"><i class="fa fa-circle-o"></i> Importar Nuevos Datos</a></li>
               <li><a href=""><i class="fa fa-circle-o"></i> Ingresar Datos Manualmente</a></li>
            </ul>
          </li>

          <li class="treeview">
            <a href="#">
              <i class="fa fa-files-o"></i>
              <span>Extracción</span>
              <span class="pull-right-container">
                <span class="label label-primary pull-right">4</span>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href=""><i class="fa fa-circle-o"></i> Ver Datos</a></li>
              <li><a href="import-extrac.php"><i class="fa fa-circle-o"></i> Importar Nuevos Datos</a></li>
               <li><a href=""><i class="fa fa-circle-o"></i> Ingresar Datos Manualmente</a></li>
            </ul>
          </li>

           <li class="treeview">
            <a href="#">
              <i class="fa fa-files-o"></i>
              <span>Hidrolisis</span>
              <span class="pull-right-container">
                <span class="label label-primary pull-right">4</span>
              </span>
            </a>
            <ul class="treeview-menu">
              
              <li><a href=""><i class="fa fa-circle-o"></i> Ver Datos</a></li>
              <li><a href="import-hidro.php"><i class="fa fa-circle-o"></i> Importar Nuevos Datos</a></li>
               <li><a href=""><i class="fa fa-circle-o"></i> Ingresar Datos Manualmente</a></li>
            </ul>
          </li>

          
        </ul>
      </section>
      <!-- /.sidebar -->
    </aside>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">