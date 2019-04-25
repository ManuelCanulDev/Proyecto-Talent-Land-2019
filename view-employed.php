<?php
   include('App/session.php');
   include('includes/declaracion.php');
   include('includes/navbar.php');

   if ($status == 0) {
    include('includes/barra0.php');
   }

   if ($status == 1) {
    include('includes/barra1.php');
   }

   if ($status == 2) {
    include('includes/barra2.php');
   }

   if ($status == 3) {
    include('includes/barra3.php');
   }

   $sql = "SELECT id_usuario,nombre_usuario,apellido_usuario,correo_usuario,status_usuario FROM `usuarios`";
   $resultado = mysqli_query($db, $sql);
   
?>
<!-- ESTO HACE REFERENCIA A EL TITULO DE DONDE TE ENCUENTRAS -->
      <section class="content-header">
        <h1>
          Dashboard
          <small>Ver Usuarios</small>
        </h1>
      </section>
<!-- ESTO HACE REFERENCIA A EL TITULO DE DONDE TE ENCUENTRAS -->

      <!-- DENTRO DE ESTAS ETIQUETAS COLOCAS TODO EL CONTENIDO -->
      <section class="content">


                                    	<?php 

                                    	while ($filas = mysqli_fetch_assoc($resultado)) {
                                    	?>
<div class="col-md-4">
          <!-- Widget: user widget style 1 -->
          <div class="box box-widget widget-user">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class="widget-user-header bg-aqua-active">
              <h3 class="widget-user-username"><?php echo $filas['nombre_usuario'] ?></h3>
              <h5 class="widget-user-desc"><?php 

              if ($filas['status_usuario'] == 0) {
              	echo "Administrador";
              }

              if ($filas['status_usuario'] == 1) {
              	echo "Equipo de fermentación";
              }

              if ($filas['status_usuario'] == 2) {
              	echo "Equipo de extracción";
              }

              if ($filas['status_usuario'] == 3) {
              	echo "Equipo de destilería";
              }

               ?></h5>
            </div>
            <div class="widget-user-image">
              <img class="img-circle" src="dist/img/sauza.png" alt="User Avatar">
            </div>
            <div class="box-footer">
              <div class="row">
                <div class="col-sm-4">
                  <div class="description-block">
                    <h5 class="description-header">Correo:</h5>
                    <span class="description-text"><?php echo $filas['correo_usuario'] ?></span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
               
                <!-- /.col -->
              </div>
              <!-- /.row -->
            </div>
          </div>
          <!-- /.widget-user -->
        </div>
                                    	<?php
                                       	}

                                        ?>


      </section>
      <!-- DENTRO DE ESTAS ETIQUETAS COLOCAS TODO EL CONTENIDO -->
      
<?php 
    include('includes/footer.php');
    include('includes/cierre-declaracion.php');
?>

 
