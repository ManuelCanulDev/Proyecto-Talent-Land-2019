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
              <span>Destilación</span>
              <span class="pull-right-container">
                <span class="label label-primary pull-right">3</span>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="pages/layout/boxed.html"><i class="fa fa-circle-o"></i> Ver Datos</a></li>
              <li><a href="pages/layout/top-nav.html"><i class="fa fa-circle-o"></i> Registrar Nuevos Datos</a></li>
            </ul>
          </li>
        </ul>
      </section>
      <!-- /.sidebar -->
    </aside>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">