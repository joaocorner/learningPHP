<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../_css/estilo.css">
    <title>Exercícios</title>
</head>

<body>
    <div>
        <?php
        $preco = $_GET["p"];
        echo "O produto custa R$" . number_format($preco, 2, ",", ".");
        $preco -= ($preco * 10 / 100);
        echo "</br>O novo preço com desconto custa R$" . number_format($preco, 2, ",", ".");

        ?>
    </div>
</body>

</html>