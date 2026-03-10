<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RECEBA</title>
</head>
<body>
    
   <?php
        $nome = htmlspecialchars($_POST['nome']);
        $email = $_POST['email'];
        $idade = $_POST['idade'];
        $ano_atual = date('Y');
        $ano = $ano_atual - $idade;
    ?>
    <p>o Nome é : <?php echo $nome; ?></p>
    <p>o Email é : <?php echo $email; ?></p>
    <p>o Idade é : <?php echo $idade; ?></p>

    <p>ahhhhhh entao voce nasceu no de 
        <?php
        echo $ano ?>  </p>

        <?php
        if ($idade >= 18){
            echo"<p  style=' color: blue'> Voce e maior de idade </p>";
        }else {
            echo"<p  style=' color: red'> Voce e menor de idade </p>";
        }
        ?>


</body>
</html>