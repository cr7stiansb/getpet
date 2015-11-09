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
                   
                </div>
             </div>
        </div>
    </header>
</div>

<div class="container">
    <div class="col-md-offset-5" style="margin-top: 100px;">
      <h2 class="">Registro</h2>
          <form role="form" action="../modelo/registroAdmin.php" method="POST">
            <div class="form-group">
              <input type="text" class="" name="nombre" placeholder="nombre" required>
            </div>
            <div class="form-group">
              <input type="text" class="" name="cc" placeholder="C.C" required>
            </div>
            <div class="form-group">
              <input type="email" class="" name="email" placeholder="Email" required>
            </div>
            <div class="form-group">
              <input type="password" class="" name="pass" placeholder="Contraseña" required>
            </div>
            <div class="form-group">
              <input type="password" class="" name="rpass" placeholder="Repite contraseña" required>
            </div>
            <button type="submit" class="btn btn-default">Registrar</button>
          </form><br>
          <p>Ya estas registrado? <a href="admin.php">Ingresa como administrador</a></p>
    </div>      
</div>

</body>
   
</html> 