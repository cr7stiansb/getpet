<?php
    error_reporting(E_ALL ^ E_NOTICE);
    $nombre = $_POST['nombre'];
    $mail = trim($_POST['email']);
    $pass = trim($_POST['pass']);
    $pass = md5($pass);
    $rpass = trim($_POST['rpass']);
    $rpass = md5($rpass);

    include("conexion.php");
    $checkmail=mysqli_query($link, "SELECT * FROM user WHERE user_email='$mail'");
    $check_mail=mysqli_num_rows($checkmail);
        if($pass==$rpass){
            if($check_mail>0){  
                echo "<script> alert('Atencion, ys existe un usuario con ese email, verifique sus datos.')</script>";
                echo"<script> location.href='../index.php'</script>";
            }else{
                //require("conexion.php");
                $sql = mysqli_query($link, "INSERT INTO user VALUES('','$nombre','$mail','$pass')");

                     echo "<script> alert('usuario registrado')</script>";
                     echo"<script> location.href='../index.php'</script>";
                }
            
            
        }else{
            echo "<script> alert('Las contraseñas son incorrectas')</script>";
            echo"<script> location.href='../index.php'</script>";
        }

mysqli_close($link);
      
?>