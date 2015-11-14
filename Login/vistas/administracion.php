<?php session_name('admin'); ?>
<?php session_start(); ?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
                
        <!-- Styles -->
        <link rel="stylesheet" href="../Css/styles.css">
        
        <!-- Boostrap -->
        <link rel="stylesheet" href="../Css/bootstrap.css">
        <link rel="stylesheet" href="../Css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="../Css/bootstrap.min.css">
        
        
        <!-- Responsive -->
        <link rel="stylesheet" href="../Css/responsive.css">
        
        <!-- Awesome 
        <link rel="stylesheet" href="Css/font-awesome.css">-->
        
        <!-- Carrusel -->
        <link rel="stylesheet" href="../Css/carrusel.css">        
        
        <link rel="stylesheet" href="../js/bootstrap.min.js">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

        <script>
            var nombre_admin = "<?php echo (isset($_SESSION['nombre_admin']))?$_SESSION['nombre_admin']:false ?>";
            console.info("nombre_admin");
            console.log(nombre_admin);
            //alert(nombre_admin);
            if (!nombre_admin) {
                alert('Debes ingresar primero como un administrador');
                location.href='admin.php';
            }
            

        </script>
        
        <title>Login</title>
        
    </head>  
<body id="body">

<div id="page-wrapper">
    <header id="header" class="navbar-static-top">
        <div class="topnav hidden-xs">
           <h1 class="logo navbar-brand" id="logo">
                <a href="../index.php" title="Get Pet">
                    <img src="../img/logo.png" alt="Get Pet" />
                </a>
            </h1>
            
            <div class="container" id="container">
            <div class="btn-group pull-right inline">
                <button type="button" id="btncuenta" class="btn dropdown-toggle pull-right glyphicon glyphicon-menu-down" data-toggle="dropdown"></button>
                    <ul class="dropdown-menu" role="menu">
                        <li>
                        <!--<a href="#">Configuracion</a>-->
                        <a href="salir_admin.php">Cerrar Sesion</a>
                        <!--<hr>
                        <a href="#">Ayuda</a>
                        <a href="#">Soporte</a>
                        </li>-->
                    </ul>
                <button type="button" id="btncuenta" class="btn"><?php  echo (isset($_SESSION['nombre_admin']))?$_SESSION['nombre_admin']:'Invitado'; ?></button> 
                
            </div>
            </div>
            
        </div>
</div>
 
    
<div class="col-sm-7 pull-left" style="margin-top: 20px;">
    <table class="table table-hover">
        <thead>
        <th>Id</th>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>C.C</th>
        <th>Email</th>  
        <th>Contraseña</th>
        <th>Telefono</th>
        <th>Tipo de usuario</th>
        <th></th>
        <th></th>
        </thead>
        <?php include('../modelo/conexion.php'); 

        
            $usuarios = "SELECT * FROM usuarios WHERE tipo_usuario = 'usuario'"; 
            $vusuarios = mysqli_query($link , $usuarios);
            while($noregistros = mysqli_fetch_assoc($vusuarios)){ ?>
            <tbody>
                <tr>
                    <td><?php echo $noregistros['id'] ?></td>
                    <td><?php echo $noregistros['nombre'] ?></td>
                    <td><?php echo $noregistros['apellido'] ?></td>
                    <td><?php echo $noregistros['cc'] ?></td>
                    <td><?php echo $noregistros['email'] ?></td>
                    <td><?php echo $noregistros['password'] ?></td>
                    <td><?php echo $noregistros['telefono'] ?></td>
                    <td><?php echo $noregistros['tipo_usuario'] ?></td>
                    <td><a href="#" class="glyphicon glyphicon-remove"></a></td>
                    <td><a href="#" class="glyphicon glyphicon-pencil"></a></td>
                </tr>
            </tbody>
            <?php }
            mysqli_close($link);
             ?>
        
    </table>
</div>
    
<script>
    $(".fakeRadio").click(function(){
    $(".fakeRadio").prop( "checked", false );
    $(this).prop( "checked", true );

    /* If you need to grab the value */
    // var val = $(this).attr("value") ;  
    // alert(val);   
});
</script>
     
</body>
    

</html> 

