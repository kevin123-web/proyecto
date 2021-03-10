<?php

 session_start();
 include'conexion_be.php';
 $email = $_POST['email'];
 $contrasena = $_POST['contrasena'];
 $contrasena=hash('sha512',$contrasena);

 $validar_login = mysqli_query($conexion,"SELECT*FROM usuarios WHERE email='$email'and contrasena='$contrasena' ");

 if(mysqli_num_rows($validar_login)>0){
    $_SESSION['usuario']=$email;
    header("location: ../pagina.php");
    exit;
 }else{
    echo'
        <script>
            alert("Usuario no exite, por favor verifique su usuario ")
            window.location="../index.php";
        </script>
    ';
    exit;
 }

?>