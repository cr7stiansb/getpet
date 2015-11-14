<?php
    error_reporting(E_ALL ^ E_NOTICE);

    $username=$_POST['mail'];
    $pass=$_POST['pass'];
    $pass = md5($pass);

    include("conexion.php");

    $ua = "SELECT * FROM usuarios WHERE email='$username'";
    $result = mysqli_query($link, $ua); 
    $ua2 = mysqli_fetch_array($result);
    if($ua2['tipo_usuario'] == "usuario"){
        if($pass == null and $username == null) {
            echo "<script type='text/javascript'>alert('Debes rellenar los campos');</script>";
            echo "<script type='text/javascript'>location.href='../index.php'</script>";
        }else{
            $sql2 = mysqli_query($link,"SELECT * FROM usuarios WHERE email='$username'");
            if($f2 = mysqli_fetch_array($sql2)){
                if(trim($pass) == trim($f2['password'])){
                    session_name('usuario');
                    session_start();
                    $_SESSION['nombre']= $f2['nombre'];
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
}else{
    echo "<script type='text/javascript'>alert('Ingrese con usuario correcto');</script>";
    echo "<script type='text/javascript'>location.href='../index.php'</script>";
}

mysqli_close($link);
?>