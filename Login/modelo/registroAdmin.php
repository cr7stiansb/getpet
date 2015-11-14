<?php
    error_reporting(E_ALL ^ E_NOTICE);
    $nombre = $_POST['nombre'];
    $mail = trim($_POST['email']);
    $cc = trim($_POST['cc']);
    $pass = trim($_POST['pass']);
    $pass = md5($pass);
    $rpass = trim($_POST['rpass']);
    $rpass = md5($rpass);


    include("conexion.php");

    $checkmail=mysqli_query($link, "SELECT * FROM usuarios WHERE email='$mail'");
    $check_mail=mysqli_num_rows($checkmail);
        if($pass==$rpass){
            if($check_mail>0){  
                echo "<script> alert('Atencion, ya existe el email designado para este administrador, verifique sus datos')</script>";
                echo"<script> location.href='../vistas/registrarAdmin.php'</script>";
            }else{
                //require("conexion.php");
                $sql = mysqli_query($link, "INSERT INTO usuarios (nombre, apellido , cc, email, password, telefono, tipo_usuario) VALUES ('$nombre','', '$cc', '$mail', '$pass', '', 'administrador')");

                     echo "<script> alert('Administrador registrado')</script>";
                     echo"<script> location.href='../vistas/admin.php'</script>";
                }
            
            
        }else{
            echo "<script> alert('Las contraseñas son incorrectas')</script>";
        }

mysqli_close($link);
      
?>