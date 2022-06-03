<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../_css/estilo.css">
    <title>MODELO</title>
</head>

<body>
    <div>
        <?php
        $n1 = $_GET["a"];
        $n2 = $_GET["b"];
        $tipo = $_GET["op"];
        $resultado = ($tipo == "sum") ? ($n1 + $n2) : ($n1 * $n2);
        echo "Se quiser somar, coloque op=sum na URL, se for multiplicar, coloca op=mul na URL </br>";
        echo "O resultado é $resultado pois vc escolheu op=$tipo e os número $n1 e $n2";
        ?>
    </div>
</body>

</html>