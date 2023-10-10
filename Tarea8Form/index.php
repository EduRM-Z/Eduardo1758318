<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario PHP</title>
    <link rel="shortcut icon" href="favi.png" type="image/x-icon">
</head>

<body>
    <?php include "nav.php"; ?>

    <main>
        <h1 class="titulo">Ingrese sus datos:</h1>

        <form action="form.php" method="post">

            <div class="recuadros">
                <label for="nombre"><img class = "iconos" src="media/nombre.png" alt="">Nombre:</label>
                <input type="text" id="nombre" name="nombre">

            </div>


            <div class="recuadros">
                <label for="edad"> <img class = "iconos" src="media/edad.png" alt=""> Edad:</label>
                <input type="text" id="edad" name="edad">

            </div>
            <div class="recuadros">
                <label for="correo"><img class="iconos" src="media/correo.png" alt="">Correo:</label>
                <input type="text" id="correo" name="correo">
            </div>
            <div class="recuadros">
                <label for="contraseña"><img class="iconos" src="media/contraseña.png" alt="">contraseña:</label>
                <input type="password" id="contraseña" name="contraseña">
            </div>


            <div class="recuadros">
                <label for="enviar"></label>
                <input type="submit" id="enviar">
            </div>


        </form>

    </main>

    <?php include "footer.php"; ?>
</body>

</html>