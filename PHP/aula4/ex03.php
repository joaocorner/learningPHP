<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../_css/estilo.css">
    <title>Referência</title>
</head>

<body>
    <div>
        <?php
        $a = 3;
        $b = $a;
        $b += 1;
        echo "A variável A vale $a";
        echo "</br>A variável B vale $b";
        echo "</br>Vamos ver de novo com referência...";
        $a = 3;
        $b = &$a; //Aqui faz toda a diferença, colocando &, ele ao invés de copiar, usa a mesma posição na memória
        $b += 1;
        echo "</br>A variável A vale $a";
        echo "</br>A variável B vale $b";
        ?>
    </div>
</body>

</html>