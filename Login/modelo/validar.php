<?php
    error_reporting(E_ALL ^ E_NOTICE);

    include("conexion.php");

    $username=$_POST['mail'];
    $pass=$_POST['pass'];
    $pass = md5($pass);
    if($pass == null and $username == null) {
        echo "<script type='text/javascript'>alert('Debes rellenar los campos');</script>";
        echo "<script type='text/javascript'>location.href='../index.php'</script>";
    }else{
        $sql2 = mysqli_query($link,"SELECT * FROM user WHERE user_email='$username'");
        if($f2 = mysqli_fetch_array($sql2)){
            if(trim($pass) == trim($f2['user_contra'])){
                session_name('usuario');
                session_start();
                $_SESSION['nombre']= $f2['user_nombre'];
                echo "<script type='text/javascript'>alert('Bienvenido a GetPet');</script>";
                echo "<script type='text/javascript'>location.href='../index.php'</script>";
            }else{
                echo "<script type='text/javascript'>alert('CONTRASEÑA INCORRECTA');</script>";
                echo "<script type='text/javascript'>location.href='../index.php'</script>";
            }
            }else{
            echo "<script type='text/javascript'>location.href='../index.php'</script>";
            echo "<script type='text/javascript'>alert('error ');</script>";
        }
    }


?>