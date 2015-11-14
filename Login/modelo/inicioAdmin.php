<?php
    error_reporting(E_ALL ^ E_NOTICE);

    include("conexion.php");

    $username=$_POST['email'];
    $pass=$_POST['pass'];
    $pass = md5($pass);

    $ua = "SELECT * FROM usuarios WHERE email='$username'";
    $result = mysqli_query($link, $ua); 
    $ua2 = mysqli_fetch_array($result);
    if($ua2['tipo_usuario'] == "administrador"){
        if($pass == null and $username == null) {
            echo "<script type='text/javascript'>alert('Debes rellenar los campos');</script>";

            echo "<script type='text/javascript'>location.href='../vistas/admin.php'</script>";
        }else{
            $sql2 = mysqli_query($link,"SELECT * FROM usuarios WHERE email='$username'");
            if($f2 = mysqli_fetch_array($sql2)){
                if(trim($pass) == trim($f2['password'])){
                    session_name('admin');
                    session_start();
                    $_SESSION['nombre_admin'] = $f2['nombre'];
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
}else{
    echo "<script type='text/javascript'>alert('Ingrese con un usuario correcto');</script>";
    echo "<script type='text/javascript'>location.href='../vistas/admin.php'</script>";
}

mysqli_close($link);

?>