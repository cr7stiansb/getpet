<?php
    error_reporting(E_ALL ^ E_NOTICE);
    $nombre = $_POST['nombre'];
    $edad = $_POST['edad'];
    $raza = $_POST['raza'];
    $vacuna = $_POST['vacuna'];
    $descripcion = $_POST['descripcion'];
    $destino = $_FILES['upload']['name'];

    
    if ($_FILES['upload']) {
   
            $dir_subida = getcwd().'/../imagenes/';
 
            if (!file_exists($dir_subida)) {
                mkdir($dir_subida, 0777, true);
            }
 
            $extensiones = array('image/jpeg','image/pjpeg','image/png','image/jpg');
 
            if (!in_array($_FILES['upload']['type'], $extensiones)){
              echo "Extension no valida";
              echo "<script>location.href='../index.php?page=darEnAdopcion'</script>";
            }
 
            $fichero_subido = $dir_subida . basename($_FILES['upload']['name']);
 
            if (move_uploaded_file($_FILES['upload']['tmp_name'], $fichero_subido)) {
                echo "<script>alert('El archivo se ha subido correctamente')</script>";
                "<script>location.href='../index.php?page=darEnAdopcion'</script>";
            } else {
               echo "<script>alert('Error al subir el archivo')</script>";
               "<script>location.href='../index.php?page=darEnAdopcion'</script>";
            }
    }else{
               echo "<script>alert('El archivo es requerido')</script>";
               "<script>location.href='../index.php?page=darEnAdopcion'</script>";
    }    
    
    include("conexion.php");

    $sql = mysqli_query($link, "INSERT INTO adopcion (nombre, edad, raza, vacunado, descripcion, foto) VALUES ('$nombre','$edad','$raza','$vacuna','$descripcion','$destino')");

    $id = mysqli_insert_id($link);
    $fotoid = $id."_".$destino;

    $update = mysqli_query($link, "UPDATE adopcion SET foto = '$fotoid' WHERE id = $id");
    
    rename("../imagenes/$destino" , "../imagenes/$fotoid");

        if($update && $sql){
            echo "<scrpt>alert('Se ha registrado correctamente');</script>";
            header("location: ../index.php?page=darEnAdopcion");
        }else{
            echo "Error" . $update . "<br>" .  $sql . "<br>" . mysql_error($link);
        }


mysqli_close($link);
      
?>