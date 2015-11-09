<header id="header" class="navbar-static-top">
        <div class="topnav hidden-xs">
           <h1 class="logo navbar-brand" id="logo">
                <a href="index.php" title="Get Pet">
                    <img src="img/logo.png" alt="Get Pet" />
                </a>
            </h1>
    
            <div class="container" id="container">
            <div class="btn-group pull-right inline">
                <?php session_name('usuario'); ?>
                <?php session_start(); ?> 
                <?php if(isset($_SESSION["nombre"])){ ?>
                    <button type="button" id="btncuenta" class="btn dropdown-toggle pull-right glyphicon glyphicon-menu-down" data-toggle="dropdown"></button>
                    <ul class="dropdown-menu" role="menu">
                        <li>
                        <a href="#">Configuracion</a>
                        <a href="salir.php">Cerrar Sesion</a>
                        <hr>
                        <a href="#">Ayuda</a>
                        <a href="#">Soporte</a>
                        </li>
                    </ul>
                    <button type="button" id="btncuenta" class="btn pull-right"><?php echo $_SESSION['nombre']; ?></button> 
                <?php }else{ ?>
                <button type="button" class="btn pull-right" data-toggle="modal" data-target="#register" id="btnregister">Registrarse</button>   
                <button type="button" class="btn pull-right" data-toggle="modal" data-target="#login" id="btnlogin">Entrar</button>  
                <?php } ?>
            </div>

                    <div id="login" class="modal fade" role="dialog">
                         <div class="modal-dialog">

                           <!-- Modal content -->

                            <div class="modal-content">
                                <div class="modal-header">
                                   <button type="button" class="close" data-dismiss="modal">×</button>
                                   <h4 class="text-center">Ingreso</h4>
                                </div>
                                <div class="modal-body"> 
                                    <!-- Formulario Login -->
                                    <div class="col-md-offset-2" style="margin-right: 100px;">
                                        
                                    <form  action="modelo/validar.php" method="post" class="form-vertical">
                                        <div class="form-group">
                                            <label for="" class="control-label">Email</label>
                                            <input class="form-control" type="email" name="mail" placeholder="Email" required>
                                        </div><br>              
                                        <div class="form-group">
                                            <label for="" class="control-label">Contraseña</label>
                                            <input class="form-control" type="password" name="pass" placeholder="Contraseña" required>
                                        </div><br>
                                        <input  class="btn btn-primary center-block" type="submit" value="Iniciar Sesión">
                                        <hr>                
                                     </form>
                                    </div>
                                    <div class="form-group">
                                        <label>
                                            <input type="checkbox"> Recordar usuario
                                        </label>
                                        <a href="#" class="forgot-password pull-right">Olvidadeste la contraseña?</a>
                                        <br>
                                        <p class="text-center">No tienes cuenta? <a data-toggle="modal" href="#register" class="" data-dismiss="modal">Resgistrate</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                <!-- Modal register -->
                <div class="modal fade" id="register" role="dialog">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">x</button>
                                <h4 class="text-center">Registro</h4>
                            </div>
                            <div class="modal-body">
                            <!-- Formulario registro -->
                                <div class="col-md-offset-2" style="margin-right: 100px;">
                                <form  method="post" id="" action="modelo/registro.php" class="form-vertical">

                                    <div class="form-group">
                                        <label for="" class="control-label">Nombre</label>
                                        <input   class="form-control" type="text" name="nombre"  placeholder="Nombre" required/ >
                                    </div><br>
                                    <div class="form-group">
                                        <label for="" class="control-label">Email</label>
                                        <input   class="form-control" type="email" name="email"  placeholder="Email" required />
                                    </div><br>
                                    <div class="form-group">
                                        <label for="" class="control-label">Contraseña</label>
                                        <input   class="form-control" type="password" name="pass"  placeholder="Contraseña" required/>
                                    </div><br>
                                    <div class="form-group">
                                        <label for="" class="control-label">Confirmar contraseña</label>
                                        <input   class="form-control" type="password" name="rpass"  placeholder="Confirmar Contraseña" required/>
                                    </div><br>
                                    <input class="btn btn-danger center-block" type="submit" name="sunmit" value="Registrarse"/>
                                </form>
                                </div>
                                <hr>
                                <p class="text-right">Ya eres un miembro de GETPET? <a data-toggle="modal" href="#login" class="" data-dismiss="modal">INGRESAR</a></p> 
                            </div>   
                        </div>
                    </div>
                </div>
             </div>
        </div>
</header>
