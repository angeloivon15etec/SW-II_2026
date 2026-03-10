<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    <form action="recebe_dados.php" method="POST">
        <p>Nome : <input type="text" name="nome" id="" placeholder="Digite seu nome"></p>
        <p>Email : <input type="email" name="email" id="" placeholder="Digite seu email"></p>
        <p>Idade : <input type="number" name="idade" id="" placeholder="Digite sua idade"></p>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>