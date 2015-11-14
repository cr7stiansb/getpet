<?php
	
	$lugar = $_POST['lugar'];
	$fecha = $_POST['fechaperdida'];
	$raza = $_POST['raza'];
	$descripcion = $_POST['descripcion'];
	$destino = $_FILES['animalperdido']['name'];

	if ($_FILES['animalperdido']) {
   
            $dir_subida = getcwd().'/../imagenesanimales/';
 
            if (!file_exists($dir_subida)) {
                mkdir($dir_subida, 0777, true);
            }
 
            $extensiones = array('image/jpeg','image/pjpeg','image/png','image/jpg');
 
            if (!in_array($_FILES['animalperdido']['type'], $extensiones)){
              echo "Extension no valida";
              echo "<script>location.href='../index.php?page=darEnAdopcion'</script>";
            }
 
            $fichero_subido = $dir_subida . basename($_FILES['animalperdido']['name']);
 
            if (move_uploaded_file($_FILES['animalperdido']['tmp_name'], $fichero_subido)) {
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

    $date=date_create("$fecha",timezone_open("America/Bogota"));
    $fecha1=date_format($date,"Y/m/d");
    $insertar = mysqli_query($link, "INSERT INTO animales (lugar, raza, fecha, descripcion, tipo_mascota, foto) VALUES ('$lugar', '$raza','$fecha1', '$descripcion', 'perdido', '$destino')");

    $id = mysqli_insert_id($link);
    $fotoid = $id."_".$destino;

    $update = mysqli_query($link, "UPDATE animales SET foto = '$fotoid' WHERE id = $id");
    
    rename("../imagenesanimales/$destino" , "../imagenesanimales/$fotoid");

        if($update && $insertar){
            echo "<scrpt>alert('Se ha registrado correctamente');</script>";
            header("location: ../index.php?page=perdidos");
        }else{
            echo "Error" . $update . "<br>" .  $insertar . "<br>" . mysql_error($link);
        }


mysqli_close($link);

?>