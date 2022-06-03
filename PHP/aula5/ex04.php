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
        $nascimento = $_GET["ano"];
        $idade = 2022 - $nascimento;
        echo "Quem nasceu em $nascimento tem idade de $idade anos.";
        $tipo = ($idade>=18 && $idade < 65)?"OBRIGATORIO":"NÃO OBRIGATÓRIO";
        echo "</br>O voto é $tipo"
        ?>
    </div>
</body>

</html>