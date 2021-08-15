<?php
$errores="";
$enviado="";
if(isset($_POST['submit'])){
    $nombre=$_POST["nombre"];
    $correo=$_POST["correo"];
    $mensaje=$_POST["mensaje"];
    //Comprobacion y validacion de nombre
        if(!empty($nombre)){
            $nombre=trim($nombre);
            $nombre=filter_var($nombre, FILTER_SANITIZE_STRING);

        }else{
            $errores = "Por favor ingrese un nombre
             </br>";
        }
    //Comprobacion y validacion de Correo
        if(!empty($correo)) {
            $correo=filter_var($correo, FILTER_SANITIZE_EMAIL);
            if(!filter_var($correo, FILTER_VALIDATE_EMAIL)){
                $errores .= "El correo ingresado no es vállido</br>";
            }

        }else{
            $errores .= "Por favor ingrese un correo </br>";            
        }
    //Comprobacion y validacion de mensaje
    if(!empty($mensaje)){
        $mensaje = htmlspecialchars($mensaje);
        $mensaje = trim($mensaje);
        $mensaje = stripcslashes($mensaje);        
    }else{
        $errores = "Por favor ingrese un mensaje
         </br>";
    }
    if(!$errores){
        $enviara = "elmatumassa@gmail.com";
        $asunto = "Formulario de Contacto";
        $mensaje_final = "De: $nombre \n";
        $mensaje_final .= "Correo: $correo \n";
        $mensaje_final .= "Mensaje:" . $mensaje;
        mail($enviar_a,$asunto,$mensaje_final);
        $enviado = true;
    }
        
}

require "index.view.php";
?> 