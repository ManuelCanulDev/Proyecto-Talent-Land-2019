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
                <tr>
                    <th scope="row">1</th>
                    <td>el uber</td>
                </tr>
            </tbody>
        </table>
      </section>
      <!-- DENTRO DE ESTAS ETIQUETAS COLOCAS TODO EL CONTENIDO -->
      
<?php 
    include('includes/footer.php');
    include('includes/cierre-declaracion.php');
?>

 
