<?php
    session_name('usuario');
    session_start();
    

    if(session_destroy()){
        unset($_SESSION["nombre_usuario"]);
        header('location: index.php');
    }
    else{
        echo "ocurrió un error";
    }

?>