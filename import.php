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
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Subir</button>
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

 
