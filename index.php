<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ENVIO DE CORREOS</title>
</head>
<body>
    <form action="enviar.php" class="box" method="POST" enctype="multipart/form-data">
    <input class="input" pattern="[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*@[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{1,5}" type="email" name="correo" placeholder="CORREO" required="">
    <input class="input" pattern="[a-zA-Z  ]{1,30}" type="text" name="asunto" placeholder="ASUNTO" required="">
    <input class="input" pattern="[a-zA-Z  ]{1,30}" type="text" name="texto" placeholder="TEXTO" required="">
    <input class="input" pattern="[a-zA-Z  ]{1,30}" type="text" name="remitente" placeholder="REMITENTE" required="">
    <input class="input"  type="file" name="img" required="">
    <input type="submit" value="Registrar">
    </form>
</body>
</html>