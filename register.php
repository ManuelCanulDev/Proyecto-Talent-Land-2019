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
        <form style="width: 100%; text-align:center; margin-left: auto; margin-right: auto; font-size: 15px;">
            <div class="form-group">
                <label for="exampleInputEmail1">Nombre</label>
                <input type="Name" class="form-control" id="exampleInputName1" aria-describedby="emailHelp" style="width: 30%; margin-left: auto; margin-right: auto;">
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Apellidos</label>
                <input type="LastName" class="form-control" id="exampleInputLastName1" aria-describedby="emailHelp" style="width: 30%;  margin-left: auto; margin-right: auto;">
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Correo</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  style="width: 30%; margin-left: auto; margin-right: auto;">
            </div>

            <div class="form-group">
                <label for="exampleInputPassword1">Contraseña</label>
                <input type="password" class="form-control" id="exampleInputPassword1" style="width: 30%; margin-left: auto; margin-right: auto;">
            </div>

            <div class="form-group">
                <label for="exampleInputPassword1">Confirmar Contraseña</label>
                <input type="password" class="form-control" id="exampleInputPassword1" style="width: 30%; margin-left: auto; margin-right: auto;">
            </div>

            <div class="form-group">
                <label for="exampleInputRango1">Rango</label>

                <div class="container" style="width: 100%;  margin-left: auto; margin-right: auto;">
                        <div style="background-color: green; margin-left: auto; margin-right: auto; width: 30%">
                            <select class="form-control">
                              <option value="" disabled selected>Seleccione una Provincia...</option>
                                <option value="0">Administrador</option>
                                <option value="1">Equipo Torre de Destilación</option>
                                <option value="2">Equipo Torre Rectificadora</option>
                                <option value="3">Equipo Torre Desmetilizadora</option>
                                <option value="4">Equipo Alambique</option>
                                <option value="5">Equipo Bascula</option>
                                <option value="6">Equipo Difusor</option>
                                <option value="7">Equipo Autoclave</option>
                                <option value="8">Equipo Tanque 1</option>
                                <option value="9">Equipo Tanque 2 </option>
                                <option value="10">Equipo Tanque 3</option>
                                <option value="11">Equipo Tanque de Fermentación</option>
                                <option value="12">Equipo Todos</option>
                            </select>
                </div>
            </div>

            <button type="submit" class="btn btn-primary" style="margin-top: 20px;">Registrar</button>
        </form>

        
      </section>
      <!-- DENTRO DE ESTAS ETIQUETAS COLOCAS TODO EL CONTENIDO -->
      
<?php 
    include('includes/footer.php');
    include('includes/cierre-declaracion.php');
?>
