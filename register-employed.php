<?php
   include('App/session.php');
   include('includes/declaracion.php');
   include('includes/navbar.php');
   include('includes/barra-navegacion.php');

?>
<!-- ESTO HACE REFERENCIA A EL TITULO DE DONDE TE ENCUENTRAS -->
      <section class="content-header">
        <h1>
          Dashboard
          <small>Registro de Usuarios</small>
        </h1>
      </section>
<!-- ESTO HACE REFERENCIA A EL TITULO DE DONDE TE ENCUENTRAS -->

      <!-- DENTRO DE ESTAS ETIQUETAS COLOCAS TODO EL CONTENIDO -->
      <section class="content" style="font-family: Arial, Helvetica, sans-serif">

        <form style="width: 100%; text-align:center; margin-left: auto; margin-right: auto; font-size: 15px;" action="register.php" method="post">
            <div class="form-group">
                <label for="exampleInputEmail1">Nombre</label>
                <input type="Name" class="form-control" id="exampleInputName1" aria-describedby="emailHelp" style="width: 30%; margin-left: auto; margin-right: auto;" name="nombre_us">
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Apellidos</label>
                <input type="LastName" class="form-control" id="exampleInputLastName1" aria-describedby="emailHelp" style="width: 30%;  margin-left: auto; margin-right: auto;" name="apellido_us">
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Correo</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  style="width: 30%; margin-left: auto; margin-right: auto;" name="correo_us">
            </div>

            <div class="form-group">
                <label for="exampleInputPassword1">Contraseña</label>
                <input type="password" class="form-control" id="exampleInputPassword1" style="width: 30%; margin-left: auto; margin-right: auto;" name="password_us">
            </div>

            <div class="form-group">
                <label for="exampleInputPassword1">Confirmar Contraseña</label>
                <input type="password" class="form-control" id="exampleInputPassword1" style="width: 30%; margin-left: auto; margin-right: auto;" name="concon_us">
            </div>

            <div class="form-group">
                <label for="exampleInputRango1">Tipo de usuario</label>

                <div class="container" style="width: 100%;  margin-left: auto; margin-right: auto;">
                        <div style="background-color: green; margin-left: auto; margin-right: auto; width: 30%">
                            <select class="form-control" name="tipo_us">
                              <option value="se" disabled selected>Seleccione un nuevo rol...</option>
                                <option value="0">Administrador</option>
                                <option value="1">Equipo de Fermentación</option>
                                <option value="2">Equipo de Extracción e Hidrosis</option>
                                <option value="3">Equipo de Destileria</option>
                            </select>
                </div>
            </div>

            <button type="submit" class="btn btn-primary" style="margin-top: 20px;" name="btn1">Registrar</button>
            <br>
        </form>

        <?php  

        if(isset($_POST['btn1'])){ 

          $nombre = $_POST['nombre_us'];
          $apellido = $_POST['apellido_us'];
          $correo = $_POST['correo_us'];
          $contraseña = $_POST['password_us'];
          $confcontra = $_POST['concon_us'];
          $tipo = $_POST['tipo_us'];

          if ($contraseña == $confcontra) {
            $ja = mysqli_query($db, "INSERT INTO usuarios (nombre_usuario, apellido_usuario, correo_usuario, password_usuario, status_usuario)  VALUES ('$nombre', '$apellido', '$correo', '$contraseña', '$tipo')");

       

        if(!$ja){
          //echo "NO REGISTRO";
          echo "<div class='alert alert-danger' role='alert'>
  Usuario No registrado
</div>";
        }else{
          //echo "REGISTRO";
          echo "<div class='alert alert-success' role='alert'>
  Usuario Registrado
</div>";
        } 
          }else{
            echo "<div class='alert alert-danger' role='alert'>
  Contraseña no similar
</div>";
          }

        
        }

        ?>

        
      </section>
      <!-- DENTRO DE ESTAS ETIQUETAS COLOCAS TODO EL CONTENIDO -->
      
<?php 
    include('includes/footer.php');
    include('includes/cierre-declaracion.php');
?>
