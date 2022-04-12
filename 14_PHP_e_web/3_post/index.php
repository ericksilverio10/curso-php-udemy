<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="cadastro.php" method="post">
            <div>
                <input type="text" name= "nome" placeholder= "Digite o nome do jogo" required>
            </div>
            <div>
                <input type="number" name= "preco" placeholder= "Digite o preço" required>
            </div>
            <div>
                <input type="checkbox" name="plataforma" value="Playstation 5" > Playstation 5
            </div>
            <div>
                <input type="checkbox" name="plataforma" value="Xbox Series X" > Xbox Series X
            </div>
            <div>
                <input type="checkbox" name="plataforma" value="PC" > PC
            </div>
            <div>
                <input type="submit" value="Enviar">
            </div>
    </form>
</body>
</html>