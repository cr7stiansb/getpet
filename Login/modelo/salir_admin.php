<?php
    session_name('admin');
    session_start();
    

    if(session_destroy()){
        unset($_SESSION["nombre_admin"]);
        header('location: admin.php');
    }
    else{
        echo "ocurrió un error";
    }

?>