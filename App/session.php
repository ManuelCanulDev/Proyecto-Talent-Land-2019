<?php
   include('App/Config.php');
   session_start();
   
   $user_check = $_SESSION['login_user'];
   
   $ses_sql = mysqli_query($db,"SELECT nombre_usuario, apellido_usuario,status_usuario FROM usuarios WHERE correo_usuario = '$user_check'");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   $nom = $row['nombre_usuario'];
   $ape = $row['apellido_usuario'];
   $status = $row['status_usuario'];
   
   $login_session = $nom . " " .$ape;
   
   
   if(!isset($_SESSION['login_user'])){
      header("location:login.php");
      die();
   }
?>