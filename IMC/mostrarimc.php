<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IMC</title>
</head>
<body>
    <?php
    
        $altura = $_POST["altura"];
        $peso = $_POST["peso"];

        $resultado = $peso/($altura * $altura);

        echo $resultado;
    ?>
</body>
</html>