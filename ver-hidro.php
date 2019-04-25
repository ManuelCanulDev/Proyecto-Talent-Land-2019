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

   $sql = "SELECT * FROM `hidrolisis`";
$resultado = mysqli_query($db, $sql);
   
?>
<!-- ESTO HACE REFERENCIA A EL TITULO DE DONDE TE ENCUENTRAS -->
      <section class="content-header">
        <h1>
          Dashboard
          <small>Datos de hidrólisis</small>
        </h1>
      </section>
<!-- ESTO HACE REFERENCIA A EL TITULO DE DONDE TE ENCUENTRAS -->

      <!-- DENTRO DE ESTAS ETIQUETAS COLOCAS TODO EL CONTENIDO -->
      <section class="content">

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Equipment id</th>
                    <th scope="col">ProcessValue</th>
                    <th scope="col">PLC</th>
                    <th scope="col">Manual</th>
                    <th scope="col">Unit of Measure</th>
                    <th scope="col">Type</th>
                    <th scope="col">samplesFrequency</th>
                    <th scope="col">Comments</th>
                </tr>
            </thead>

             <tbody>

                                      <?php while ($filas = mysqli_fetch_assoc($resultado)) {
                              
                                       ?>
                                        <tr>
                                            <td> <?php echo $filas['equipment_id'] ?></td>
                                            <td><?php echo $filas['process_value'] ?></td>
                                            <td><?php echo $filas['plc'] ?></td>
                                            <td><?php echo $filas['manual'] ?></td>
                                            <td><?php echo $filas['unit_of_measure'] ?></td>
                                            <td><?php echo $filas['type'] ?></td>
                                            <td><?php echo $filas['samples_frequency'] ?></td>
                                            <td><?php echo $filas['comments'] ?></td>
                                        </tr>
                                       <?php 
                                        }

                                        ?>
                                    </tbody>
        </table>
      </section>
      <!-- DENTRO DE ESTAS ETIQUETAS COLOCAS TODO EL CONTENIDO -->
      
<?php 
    include('includes/footer.php');
    include('includes/cierre-declaracion.php');
?>

 
