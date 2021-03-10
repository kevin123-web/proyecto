<?php


    include'conexion_be.php';

    $nombre_completo=$_POST['nombre_completo'];
    $email=$_POST["email"];
    $usuario=$_POST['usuario'];
    $contrasena=$_POST['contrasena'];
    //encriptamiento de contraseña
    $contrasena= hash('sha512' , $contrasena);

    //verificar correo
    $query="INSERT INTO usuarios(nombre_completo,email,usuario,contrasena) VALUES('$nombre_completo','$email','$usuario','$contrasena')";
    $verificar_correo=mysqli_query($conexion,"SELECT *FROM usuarios WHERE email='$email'");
    if(mysqli_num_rows($verificar_correo) >0 ){
        echo '
            <script>
               alert("Este correo ya esta registrado, Intente nuevamente");
               window.location = "../index.php";
            </script>    
        ';
        exit();
    }
    //verificar usuario 
    $verificar_usuario =mysqli_query($conexion,"SELECT *FROM usuarios WHERE usuario='$usuario'");
    if(mysqli_num_rows($verificar_usuario) >0 ){
        echo '
            <script>
               alert("Este usuario ya esta registrado, Intente nuevamente");
               window.location = "../index.php";
            </script>    
        ';
        exit();
    }


    $ejecutar=mysqli_query($conexion,$query);

    if($ejecutar){
        echo'
           <script>
               alert("Usuario almacenado exitosamente");
               window.location="../index.php";
           </script>
        ';
    }else{
        echo'
        <script>
            alert("Usuario no almacenado");
            window.location="../index.php";
        </script>
     ';    
    }      

    mysqli_close($conexion);
?>