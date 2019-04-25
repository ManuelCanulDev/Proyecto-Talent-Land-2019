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
          <small>Importar archivos</small>
        </h1>
      </section>
<!-- ESTO HACE REFERENCIA A EL TITULO DE DONDE TE ENCUENTRAS -->

      <!-- DENTRO DE ESTAS ETIQUETAS COLOCAS TODO EL CONTENIDO -->
    <section class="content">

     

        <div class="container">
            <form action="import-extrac.php" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <input id="file-2" type="file" class="file" readonly=true name="archivo">
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#myModl" name="enviar">Subir</button>
                </div>
            </form>
        </div>

        <?php 
      if(isset($_POST['enviar'])){
        include('Classes/PHPExcel/IOFactory.php');
        $archivo = $_FILES['archivo']['name'];
        $archivocopiado = $_FILES['archivo']['tmp_name'];
        $archivoguardado = "copia_".$archivo;
        
        $objPHPExcel = PHPExcel_IOFactory::load($archivocopiado);

        $objPHPExcel->setActiveSheetIndex(0);


        echo "<table border=1><tr><td>equipment_id</td><td>process_value</td><td>manual</td><td>plc</td><td>unit_of_measure</td><td>type</td><td>samples_frequency</td><td>Comments</td></tr>";

        for ($i=2; $i <= 18; $i++) { 
            $equipment_id = $objPHPExcel->getActiveSheet()->getCell('B'.$i)->getCalculatedValue();
            $process_value = $objPHPExcel->getActiveSheet()->getCell('C'.$i)->getCalculatedValue();
            $manual = $objPHPExcel->getActiveSheet()->getCell('D'.$i)->getCalculatedValue();
            $plc = $objPHPExcel->getActiveSheet()->getCell('E'.$i)->getCalculatedValue();
            $unit_of_measure = $objPHPExcel->getActiveSheet()->getCell('F'.$i)->getCalculatedValue();
            $type = $objPHPExcel->getActiveSheet()->getCell('G'.$i)->getCalculatedValue();
            $samples_frequency = $objPHPExcel->getActiveSheet()->getCell('H'.$i)->getCalculatedValue();
            $comments = $objPHPExcel->getActiveSheet()->getCell('I'.$i)->getCalculatedValue();

            echo "<tr>";
            echo "<td>".$equipment_id."</td>";
            echo "<td>".$process_value."</td>";
            echo "<td>".$manual."</td>";
            echo "<td>".$plc."</td>";
            echo "<td>".$unit_of_measure."</td>";
            echo "<td>".$type."</td>";
            echo "<td>".$samples_frequency."</td>";
            echo "<td>".$comments."</td>";
            echo "<tr>";

            $sql = "INSERT INTO extraccion (equipment_id,process_value,manual,plc,unit_of_measure,type,samples_frequency,comments) VALUES ('$equipment_id','$process_value','$manual', '$plc', '$unit_of_measure', '$type','$samples_frequency', '$comments')";
            
         
            $ja = mysqli_query($db, $sql);

        }         

      }

         ?>

        <script>
        $("#file-3").fileinput({
        showCaption: false,
        browseClass: "btn btn-primary btn-lg",
        fileType: "any"
        });
        </script>

        <table></table>

        <div class="container">
            <!-- Trigger the modal with a button -->
            

            <!-- Modal -->
            <div class="modal fade" id="myModal" role="dialog">
                <div class="modal-dialog">
                
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-body">
                    <p>¿Seguro que quiere importar este archivo?</p>
                    </div>

                    <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Aceptar</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                    </div>
                </div>
                
                </div>
            </div>
            
        </div>


    </section>
      <!-- DENTRO DE ESTAS ETIQUETAS COLOCAS TODO EL CONTENIDO -->
      
<?php 
    include('includes/footer.php');
    include('includes/cierre-declaracion.php');
?>

 
