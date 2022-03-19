<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/register.css">
    <title>Registro</title>
    
</head>
<body>
<header>
<span>Registro</span>
</header>
    <form action="../model/registro.php" method="POST">
        <input type="text" name="nombres" id="nombres" placeholder="Ingrese sus nombres" required>
        <input type="text" name="apellidos" id="apellidos" placeholder="Ingrese sus apellidos" required>
        <input type="text" name="correo" id="correo" placeholder="Ingrese su correo" required>
        <input type="password" name="pass" id="pass" placeholder="Ingrese una contraseña" required>
        <input type="submit" value="Registrarse">
    </form>
</body>
</html>