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
        $valor = $_GET["v"];
        echo "O valor enviado foi $valor";
        echo "</br>A raiz é  " . number_format(sqrt($valor),2);
        $rq = sqrt($valor);
        ?>
        <br><br>
        <a href="01exercicio.html">Voltar</a>
    </div>
</body>

</html>

