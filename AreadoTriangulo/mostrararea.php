<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrar area</title>
</head>
<body>
    <?php
        $base = $_POST["base"];
        $altura = $_POST["altura"];

        $resultado = ($base * $altura)/2;

        echo $resultado;
    ?>
</body>
</html>