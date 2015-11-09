<?php
    $link = new mysqli("localhost","root","","getpet");
        if ($link->connect_error){
      die('Problemas con la conexion a la base de datos');
    }
    
?>