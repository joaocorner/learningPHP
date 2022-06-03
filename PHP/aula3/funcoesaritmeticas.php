<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../_css/estilo.css">
    <style>
        h2 {
            font: 16pt Arial;
            color: #171559;
            font-weight: bold;
        }
    </style>
    <title>Funções Aritmeticas em PHP</title>
</head>

<body>
    <div>
        <?php
        $v1 = $_GET["x"];
        $v2 = $_GET["y"];
        echo "<h2>Valores recebidos: $v1 e $v2</h2>";
        echo "O valor absoluto de $v1 é " . abs($v1);
        echo "</br>O valor de $v1<sup>$v2</sup> é  " . pow($v1, $v2);
        echo "</br>A raiz de $v1 é  " . sqrt($v1);
        echo "</br>O valor arredondado de $v1 é  " . ceil($v1); //no lugar de round, ceil arredonda pra cima e floor arredonda pra baixo
        echo "</br>A parte inteira de $v1 é  " . intval($v1);
        echo "</br>O valor de $v1 em moeda é  R$" . number_format($v1, 2, ",", ".");


        ?>
    </div>
</body>

</html>