<?php
   include("App/Config.php");
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($db,$_POST['username']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']); 

      $sql = "SELECT * FROM usuarios WHERE correo_usuario = '$myusername' AND password_usuario = '$mypassword'";

      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
        
      if($count == 1) {
         session_start();
         $_SESSION['login_user'] = $myusername;
         
         header("location: home.php");
      }else {
         $error = "Tu usuario o contraseña es incorrecto";
      }
   }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Login</title>
        <!--Made with love by Mutiullah Samim -->
    
        <!--Bootsrap 4 CDN-->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        
        <!--Fontawesome CDN-->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

        <!--Custom styles-->
        <link rel="stylesheet" type="text/css" href="styles.css">
    </head>
    
    <body background="imgs/fondo.jpg" style="font-family: Arial, Helvetica, sans-serif;">
            <div style="padding-top: 10%;">

                <div style=" text-align: center; color: white">
                        <span class="logo-lg" style="font-size: 80px">Bienvenido a <b style="font-style: oblique; font-size: 100px; color: goldenrod; font-family: gadugi;">Iungo</b></span>
                </div>

                <div> 
                    <div style="margin-top: 25px; width: 100%;">
                   <form action = "" method = "post">
                        <div>
                            <div style="margin-left: 36% ; margin-right: 20%;">
                                <div class="input-group-prepend" style="display:inline-block; align-content: center">
                                    <span class="input-group-text"><i class="fas fa-user"></i></span>
                                </div>

                                <input name="username" type="text" placeholder="usuario" style="width: 350px; display:inline-block; border-top-color: transparent; border-left-color: transparent; border-right: transparent">
                                
                            </div>
    
                            <div style="margin-left: 36% ; margin-right: 20%; margin-top: 10px;">
                                <div class="input-group-prepend" style="display:inline-block;">
                                    <span class="input-group-text"><i class="fas fa-key"></i></span>
                                </div>

                                <input name="password" type="password" placeholder="contraseña" style="width: 350px; display:inline-block; border-top-color: transparent; border-left-color: transparent; border-right: transparent;">
                            </div>

                            <div style="margin-top: 25px; margin-left: 40% ; margin-right: 20%;">
                                

                                <input type = "submit" value = "Iniciar Sesión" style="width: 300px; height: 30px;"/><br />
                            </div>
                        </div>
                    </form>
                    </div>
                </div>
            </div>

            <a href='file:///C:/xampp/htdocs/CasaSauzaWeb/login.html#' style='display:scroll;position:fixed;bottom:0px;left:0px;'>
            <img src="imgs/Logo-casa-Sauza.webp" style="width: 400px"></a>
    </body>
</html>