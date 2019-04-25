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
   
?>
<!-- ESTO HACE REFERENCIA A EL TITULO DE DONDE TE ENCUENTRAS -->
      <section class="content-header">
        <h1>
          Dashboard
          <small>Ingreso de datos hidrólisis</small>
        </h1>
      </section>
<!-- ESTO HACE REFERENCIA A EL TITULO DE DONDE TE ENCUENTRAS -->

      <!-- DENTRO DE ESTAS ETIQUETAS COLOCAS TODO EL CONTENIDO -->
      <section class="content">

      <form style="width: 100%; text-align:center; margin-left: auto; margin-right: auto; font-size: 15px;" action="register-employed.php" method="post">
            <div class="form-group">
                <label for="exampleInputEmail1">Equipment id</label>
                <input type="Name" class="form-control" id="exampleInputName1" aria-describedby="emailHelp" style="width: 30%; margin-left: auto; margin-right: auto;" name="nombre_us">
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Process Value</label>
                <input type="LastName" class="form-control" id="exampleInputLastName1" aria-describedby="emailHelp" style="width: 30%;  margin-left: auto; margin-right: auto;" name="apellido_us">
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">PLC</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  style="width: 30%; margin-left: auto; margin-right: auto;" name="correo_us">
            </div>

            <div class="form-group">
                <label for="exampleInputPassword1">Manual</label>
                <input type="password" class="form-control" id="exampleInputPassword1" style="width: 30%; margin-left: auto; margin-right: auto;" name="password_us">
            </div>

            <div class="form-group">
                <label for="exampleInputPassword1">Unit Of Measures</label>
                <input type="password" class="form-control" id="exampleInputPassword1" style="width: 30%; margin-left: auto; margin-right: auto;" name="concon_us">
            </div>

            <div class="form-group">
                <label for="exampleInputPassword1">Type</label>
                <input type="password" class="form-control" id="exampleInputPassword1" style="width: 30%; margin-left: auto; margin-right: auto;" name="concon_us">
            </div>
            
            <div class="form-group">
                <label for="exampleInputPassword1">samplesFrequency</label>
                <input type="password" class="form-control" id="exampleInputPassword1" style="width: 30%; margin-left: auto; margin-right: auto;" name="concon_us">
            </div>

            <div class="form-group">
                <label for="exampleInputPassword1">Comments</label>
                <input type="password" class="form-control" id="exampleInputPassword1" style="width: 30%; margin-left: auto; margin-right: auto;" name="concon_us">
            </div>

            <button type="submit" class="btn btn-primary" style="margin-top: 20px;" name="btn1">Registrar</button>
            <br>
        </form>

      </section>
      <!-- DENTRO DE ESTAS ETIQUETAS COLOCAS TODO EL CONTENIDO -->
      
<?php 
    include('includes/footer.php');
    include('includes/cierre-declaracion.php');
?>

 
