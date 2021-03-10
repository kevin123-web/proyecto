<?php

 session_start();
 if(isset($_SESSION['usuario'])){
    header("location: pagina.php");
 }
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Y Registro </title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" 
    rel="stylesheet">
    <link rel="stylesheet" href="css/estilos.css">
    
</head>
<body>
    
    <main>
        <div class="contenedor__todo">
            <div class="caja__trasera">
                <div class="caja__trasera-login">
                    <h3>¿Ya tienes cuenta?</h3>
                    <p>Inicia sesión para que puedas entrar a la página</p>
                    <button id="btn__iniciar-sesion">Iniciar sesión</button>
                </div>
                <div class="caja__trasera-register">
                    <h3>¿Aún no tienes cuenta?</h3>
                    <p>Registrate para que puiedas Inciar sesión</p>
                    <button id="btn__registrarse">Registrarse</button>
                </div>
            </div>
            <div class="contenedor__login-register">
                <form action="php/login_usuario_be.php" method="POST" class="formulario__login">
                    <h2>Iniciar Sesión</h2>
                    <input type="text" placeholder="Correo Electronico" name='email'>
                    <input type="password" placeholder="Contraseña" name='contrasena'>
                    <button>Entrar</button>   
                </form>
                <form action="php/registro_usuario_be.php" method="POST" class="formulario__register">
                    <h2>Registrarse</h2>
                    <input type="text" placeholder="Nombre completo" name="nombre_completo">
                    <input type="text" placeholder="Correo Electronico" name="email">
                    <input type="text" placeholder="Usuario" name="usuario">       
                    <input type="password" placeholder="Contraseña" name="contrasena">
                    <button>Registrarse</button>   
                </form>
            </div>
        </div>
    </main>
    <script src="js/script.js"></script>
  
</body>
</html>

