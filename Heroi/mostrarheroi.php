<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Herois</title>
</head>
<body>
    <?php
        /*
            Tipagem - não
            Variável - $nome
            Operador de comparação - > < >= <= !=
            Operador lógico - and or & | && ||
            Estrutura condicional if - if(){;}elseif(){;}else{;}
            Estrutura de repetição for - for($x=1;$x<=3;$x++){;}
            Estrutura de repetição while - while($x<=3){echo $x;x++;}
        */

        $universo = $_POST["Universo"];
        $heroi = $_POST["Combo"];
        $qtd_heroi = $_POST["Quantidade"];

       
            if($universo == "DC"){
                    if($heroi == "Superman"){
                        for($x=1;$x<=$qtd_heroi;$x++){
                            echo "<img src='img/Superman.jpg'>";
                        }
                    }
                    else if($heroi == "Flash"){
                        for($x=1;$x<=$qtd_heroi;$x++){
                            echo "<img src='img/Flash.jpg'>";
                        }
                    }
                    else if($heroi == "Aquaman"){
                        for($x=1;$x<=$qtd_heroi;$x++){
                            echo "<img src='img/Aquaman.jpg'>";
                        }
                    }
                    else if($heroi == "Mulher Maravilha"){
                        for($x=1;$x<=$qtd_heroi;$x++){
                            echo "<img src='img/Mulher Maravilha.jpg'>";
                        }
                    }
                    else if($heroi == "Batman"){
                        for($x=1;$x<=$qtd_heroi;$x++){
                            echo "<img src='img/Batman.jpg'>";
                        }
                    }
                    else{
                        echo "Não é válido";
                    }
            }
            else if($universo == "Marvel"){
                if($heroi == "Rocket"){
                    for($x=1;$x<=$qtd_heroi;$x++){
                        echo "<img src='img/Rocket.jpg'>";
                    }
                }
                else if($heroi == "Homem de ferro"){
                    for($x=1;$x<=$qtd_heroi;$x++){
                        echo "<img src='img/Homem de ferro.jpg'>";
                    }
                }
                else if($heroi == "Capitao america"){
                    for($x=1;$x<=$qtd_heroi;$x++){
                        echo "<img src='img/Capitao america.jpg'>";
                    }
                }
                else if($heroi == "Capita marvel"){
                    for($x=1;$x<=$qtd_heroi;$x++){
                        echo "<img src='img/Capita marvel.jpg'>";
                    }
                }
                else if($heroi == "Homen aranha"){
                    for($x=1;$x<=$qtd_heroi;$x++){
                        echo "<img src='img/Homen aranha.png'>";
                    }
                }
                else{
                    echo "Não é válido";
                }
            }
            else{
                echo "Não é valido";
            }
    
    
    
    
    ?>
</body>
</html>