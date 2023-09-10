<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Media</title>
</head>
<body>
    <?php
    
    $capital = $_POST["capital"];
    $taxa = $_POST["taxa"];
    $tempo = $_POST["tempo"];
    
    $resultado = ($capital * $taxa * $tempo);  

    echo "Seu juros será: $resultado";
    ?>
</body>
</html>