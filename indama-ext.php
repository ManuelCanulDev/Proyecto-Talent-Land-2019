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
          <small>Ingreso de datos extracción</small>
        </h1>
      </section>
<!-- ESTO HACE REFERENCIA A EL TITULO DE DONDE TE ENCUENTRAS -->

      <!-- DENTRO DE ESTAS ETIQUETAS COLOCAS TODO EL CONTENIDO -->
      <section class="content">

      <form style="width: 100%; text-align:center; margin-left: auto; margin-right: auto; font-size: 15px;" action="indama-ext.php" method="post">
            <div class="form-group">
                <label for="exampleInputEmail1">Equipment id</label>
                <input type="text" class="form-control" id="exampleInputName1" aria-describedby="emailHelp" style="width: 30%; margin-left: auto; margin-right: auto;" name="equipment_id">
            </div>


            <div class="form-group">
                <label for="exampleInputEmail1">Process Value</label>
                <input type="text" class="form-control" id="exampleInputLastName1" aria-describedby="emailHelp" style="width: 30%;  margin-left: auto; margin-right: auto;" name="process_value">
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">PLC</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  style="width: 30%; margin-left: auto; margin-right: auto;" name="plc">
            </div>

            <div class="form-group">
                <label for="exampleInputPassword1">Manual</label>
                <input type="text" class="form-control" id="exampleInputPassword1" style="width: 30%; margin-left: auto; margin-right: auto;" name="manual">
            </div>

            <div class="form-group">
                <label for="exampleInputPassword1">Unit Of Measures</label>
                <input type="text" class="form-control" id="exampleInputPassword1" style="width: 30%; margin-left: auto; margin-right: auto;" name="unit_of_measure">
            </div>

            <div class="form-group">
                <label for="exampleInputPassword1">Type</label>
                <input type="text" class="form-control" id="exampleInputPassword1" style="width: 30%; margin-left: auto; margin-right: auto;" name="type">
            </div>
            
            <div class="form-group">
                <label for="exampleInputPassword1">samplesFrequency</label>
                <input type="text" class="form-control" id="exampleInputPassword1" style="width: 30%; margin-left: auto; margin-right: auto;" name="samples_frequency">
            </div>

            <div class="form-group">
                <label for="exampleInputPassword1">Comments</label>
                <input type="text" class="form-control" id="exampleInputPassword1" style="width: 30%; margin-left: auto; margin-right: auto;" name="comments">
            </div>

            <button type="submit" class="btn btn-primary" style="margin-top: 20px;" name="btn1">Registrar</button>
            <br>
        </form>

        <?php  

        if(isset($_POST['btn1'])){ 

          $equipment_id = $_POST['equipment_id'];
          $process_value = $_POST['process_value'];
          $plc = $_POST['plc'];
          $manual = $_POST['manual'];
          $unit_of_measure = $_POST['unit_of_measure'];
          $type = $_POST['type'];
          $samples_frecuency = $_POST['samples_frequency'];
          $comments = $_POST['comments'];

       
           $sql = "INSERT INTO extraccion (equipment_id,process_value,manual,plc,unit_of_measure,type,samples_frequency,comments) VALUES ('$equipment_id','$process_value','$manual', '$plc', '$unit_of_measure', '$type','$samples_frecuency', '$comments')";
             $ja = mysqli_query($db, $sql);


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
          

        
        }

        ?>
      </section>
      <!-- DENTRO DE ESTAS ETIQUETAS COLOCAS TODO EL CONTENIDO -->
      
<?php 
    include('includes/footer.php');
    include('includes/cierre-declaracion.php');
?>

 
