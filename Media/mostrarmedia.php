<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Media</title>
</head>
<body>
    <?php
    
    $primeiro = $_POST["primeiro"];
    $segundo = $_POST["segundo"];
    $terceiro = $_POST["terceiro"];
    $quarto = $_POST["quarto"];
    
    $resultado = ($primeiro + $segundo + $terceiro + $quarto)/4;  

    if($resultado >= 8){
        echo "Sua nota é: $resultado e sua menção é MB";
    }
    else if($resultado >= 7 && $resultado < 8){
        echo "Sua nota é: $resultado e sua menção é B";
    }
    else if($resultado >= 5 && $resultado < 7){
        echo "Sua nota é: $resultado e sua menção é R";
    }
    else if($resultado < 5){
        echo "Sua nota é: $resultado e sua menção é I";
    }
    else{
        echo "Algo deu errado, tente novamente";
    }
    ?>
</body>
</html>