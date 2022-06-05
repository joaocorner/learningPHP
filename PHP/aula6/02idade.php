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
        // isset significa se foi passado como parametro
        $nome = isset($_GET["nome"]) ? $_GET["nome"] : "[não informado]";
        // no caso acima, se o nome foi configurado, vai puxar o nome, senão dá a msg de erro
        $ano = isset($_GET["ano"]) ? $_GET["ano"] : 0;
        $sexo = isset($_GET["sexo"]) ? $_GET["sexo"] : "[não informado]";
        $idade = date("Y") - $ano;
        echo "$nome é $sexo e tem $idade anos."
        ?><br>
        <a href="02exercicio.html">VOLTAR</a>
    </div>
</body>

</html>