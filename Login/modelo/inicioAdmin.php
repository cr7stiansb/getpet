<?php
    error_reporting(E_ALL ^ E_NOTICE);

    include("conexion.php");

    $username=$_POST['email'];
    $pass=$_POST['pass'];
    $pass = md5($pass);
    if($pass == null and $username == null) {
        echo "<script type='text/javascript'>alert('Debes rellenar los campos');</script>";

        echo "<script type='text/javascript'>location.href='../vistas/admin.php'</script>";
    }else{
        $sql2 = mysqli_query($link,"SELECT * FROM administracion WHERE admin_email='$username'");
        if($f2 = mysqli_fetch_array($sql2)){
            if(trim($pass) == trim($f2['admin_pass'])){
                session_name('admin');
                session_start();
                $_SESSION['nombre_admin'] = $f2['admin_nombre'];
                echo "<script type='text/javascript'>alert('Bienvenido, Administre su sitio!');</script>";

                echo "<script type='text/javascript'>location.href='../vistas/administracion.php'</script>";
            }else{
                echo "<script type='text/javascript'>alert('CONTRASEÑA INCORRECTA');</script>";

                echo "<script type='text/javascript'>location.href='../vistas/admin.php'</script>";
            }
        }else{
            echo "<script type='text/javascript'>location.href='../vistas/admin.php'</script>";
            echo "<script type='text/javascript'>alert('error ');</script>";
        }
    }


?>