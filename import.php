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

        <head>
            <style>
                .subir{
                    padding: 5px 10px;
                    background: #f55d3e;
                    color:#fff;
                    border:0px solid #fff;
                    border-radius: 10px;
                }
                
                .subir:hover{
                    color:#fff;
                    background: #f7cb15;
                }
            </style>
        </head>

        <section class="content">

            <h4 style="margin-top: 10px; text-align: center;">Selecciona el archivo a importar</h4>

            <div style="width: 330px; margin: 0 auto;">
            
            <div style="padding-top: 20px; margin-left: 30%;">
                <label for="file-upload" class="subir">
                    <i class="fas fa-cloud-upload-alt"></i> Seleccionar archivo
                </label>
            </div>

            <input id="file-upload" onchange='cambiar()' type="file" style='display: none;'/>

            <div id="info" style="text-align: center;"></div>

            <div>
                <form enctype="multipart/form-data" style="margin-left: 43%; margin-top: 10px;">
                    <div class="form-group">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Subir</button>
                    </div>
                </form>
            </div>  

            <script>
                function cambiar(){
                    var pdrs = document.getElementById('file-upload').files[0].name;
                    document.getElementById('info').innerHTML = pdrs;
                }
            </script>

            <div class="container">
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

 
