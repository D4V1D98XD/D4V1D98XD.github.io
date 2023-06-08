<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Juego del Decapitado</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
    <?php
        $Nombre = $_POST["Jugador"];
        $Palabra = $_POST["Palabra"];
        $Vidas = $_POST["Vidas"];

    ?>
    <div class="container">
        <div class="row">
            <h1>Juego del Decapitado</h1><hr><br>
            <h3>Nombre del Jugador: <?php echo $Nombre; ?></h3>
            <h3>Vidas del Jugador: <?php echo $Vidas; ?></h3>
            <?php
            for ($i=0; $i<(count(str_split($Palabra))) ; $i++) { 
                echo "<input type = 'text' name = 'frase[]' style='width: 5%;'>";
            }
            ?>
            <br><br>
            <div class="row mt-4"></div>
            <input type="text" name="letra" style="width: 10%">
            <input type="submit" value="Enviar Letra" class="btn btn-primary" style="width: 10%; margin-left: 20px;">
        </div>
    </div>
</body>
</html>