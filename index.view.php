<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
    <link rel="stylesheet" href="estilo.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300&display=swap" rel="stylesheet">
</head>
<body>
    <div class="contenido">
        <h1>Formulario de Contacto</h1>
        <form action="<?php htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
             <input type="text" class="form-control" name="nombre" placeholder="Nombre" id="nombre" value="">
             <input type="text" class="form-control" name="correo" placeholder="Correo" id="correo" value="">
            <textarea name="mensaje" id="mensaje" placeholder="Ingrese tu mensaje"></textarea>
            <?php if(!empty($errores)): ?>
                <div class="error alerta">
                    <?php echo $errores; ?>
                </div>
            <?php elseif($enviado): ?>
                <div class="exito alerta">
                    Mensaje de error.
                </div>
            <?php endif ?>
            <input type="submit" name="submit" class="btn btn-primary" value="Enviar">
    </form>
    </div>
</body>
</html>