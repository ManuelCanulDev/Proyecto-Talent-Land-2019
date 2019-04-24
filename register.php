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
          <small>Registrar usuarios</small>
        </h1>
      </section>
<!-- ESTO HACE REFERENCIA A EL TITULO DE DONDE TE ENCUENTRAS -->

      <!-- DENTRO DE ESTAS ETIQUETAS COLOCAS TODO EL CONTENIDO -->
      <section class="content" style="font-family: Arial, Helvetica, sans-serif">

        <p style="text-align: center; font-size: 60px">Registro de usuarios</p>
        <form style="width: 50%; text-align:center; margin-left: auto; margin-right: auto; font-size: 25px;">
            <div class="form-group">
                <label for="exampleInputEmail1">Nombre</label>
                <input type="Name" class="form-control" id="exampleInputName1" aria-describedby="emailHelp" placeholder="Ingrese su nombre" style="width: 30%; margin-left: auto; margin-right: auto;">
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Apellidos</label>
                <input type="LastName" class="form-control" id="exampleInputLastName1" aria-describedby="emailHelp" placeholder="Ingrese sus apellidos" style="width: 30%;  margin-left: auto; margin-right: auto;">
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Usuario</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ingrese un correo electrónico" style="width: 30%; margin-left: auto; margin-right: auto;">
            </div>

            <div class="form-group">
                <label for="exampleInputPassword1">Contraseña</label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Ingrese una contraseña" style="width: 30%; margin-left: auto; margin-right: auto;">
            </div>

            <div class="form-group">
                <label for="exampleInputRango1">Rango</label>

                <div class="container" style="width: 100%;  margin-left: auto; margin-right: auto;">
                        <div style="background-color: green; margin-left: auto; margin-right: auto; width: 30%">
                            <select class="form-control">
                                <option>Usuario</option>
                                <option>Administrador</option>
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
