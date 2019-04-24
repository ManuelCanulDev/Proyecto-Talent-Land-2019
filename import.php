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
          <small>Importar archivos</small>
        </h1>
      </section>
<!-- ESTO HACE REFERENCIA A EL TITULO DE DONDE TE ENCUENTRAS -->

      <!-- DENTRO DE ESTAS ETIQUETAS COLOCAS TODO EL CONTENIDO -->
    <section class="content">

        <p style="margin-top: 10px;">Selecciona el archivo a importar</p>

        <div class="container">
            <form enctype="multipart/form-data">
                <div class="form-group">
                    <input id="file-2" type="file" class="file" readonly=true>
                </div>

                <div class="form-group">
                    <button class="btn btn-primary">Subir</button>
                    <button class="btn btn-default" type="reset">Borrar</button>
                </div>
            </form>
        </div>

        <script>
        $("#file-3").fileinput({
        showCaption: false,
        browseClass: "btn btn-primary btn-lg",
        fileType: "any"
        });
        </script>

        <table></table>

    </section>
      <!-- DENTRO DE ESTAS ETIQUETAS COLOCAS TODO EL CONTENIDO -->
      
<?php 
    include('includes/footer.php');
    include('includes/cierre-declaracion.php');
?>

 
