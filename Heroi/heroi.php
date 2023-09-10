<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="mostrarheroi.php" method="post">
        Universo: <br>
        Marvel: <input type="radio" name="Universo" value="Marvel"><br>
        DC: <input type="radio" name="Universo" value="DC"><br>
        Herois: <select name="Combo">
                    <option value="Superman">Superman</option>
                    <option value="Flash">Flash</option>
                    <option value="Aquaman">Aquaman</option>
                    <option value="Mulher Maravilha">Mulher Maravilha</option>
                    <option value="Batman">Batman</option>
                    <option value="Rocket">Rocket</option>
                    <option value="Homem de ferro">Homem de ferro</option>
                    <option value="Capitao america">Capitao america</option>
                    <option value="Capita marvel">Capita marvel</option>
                    <option value="Homen aranha">Homen aranha</option>
                </select><br>
        Quantidade de imagens: <input type="text" name="Quantidade"><br>
        <input type="submit">
    </form>
</body>
</html>