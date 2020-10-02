<?php

//Se reciben en POST los datos de los labels del formulario
$usuario = $_POST["usuario"];
$contra = $_POST["contra"];

//Se crean las contraseñas y usuarios para los inicios de sesión
$admin_user = 'administrador';
$admin_contra = 'nimda';
$cliente_user = 'cliente';
$cliente_contra = 'tneilc';

/* Se tiene un If para preguntar si las "credenciales" del adminsitrador y del usuario son correctas
Si cumple con los datos del admi se envía a un dashboard, caso contrario envía error
Si cumple con los datos del cliente se envia a una página especial para el, caso contrario, envía error*/
if ($usuario == $admin_user && $contra == $admin_contra){ 
        header("location: dashboard.php");
    }
    elseif ($usuario == $cliente_user && $contra == $cliente_contra){ 
        header("location: cliente.php");
    }
    else{
        /* Aqui se envía un mensaje de alerta con JS y se redirecciona al index
        Si no se redirecciona al index se quedará la página en blanco*/
        echo '<script language="javascript">alert("Datos erróneos"); window.location.href="index.php"</script>';
    }
?>
