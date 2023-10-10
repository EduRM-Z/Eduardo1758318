<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta</title>
</head>

<body>
    <?php include "nav.php" ?>
    <main>


        <h1 class="titulo">Consulta PHP</h1>

        <div class="recuadros">
            <?php
            $nombre = $_POST['nombre'];
            $edad = $_POST['edad'];
            $correo = $_POST['correo'];
            $contraseña = $_POST['contraseña'];

            echo "<h2>Mi nombre es: <h2 class='campo'>$nombre<h2></h2>";
            echo "<h2>Mi edad es: <h2 class = 'campo'>$edad</h2></h2>";
            echo "<h2>Mi correo electronico es: <h2 class='campo'>$correo</h2></h2>";
            echo "<h2>Mi contraseña es: <h2 class = 'campo'>$contraseña</h2></h2>";
            ?>

            <a href="index.php">Volver al inicio</a>
        </div>
    </main>
    <?php include "footer.php" ?>
</body>

</html>