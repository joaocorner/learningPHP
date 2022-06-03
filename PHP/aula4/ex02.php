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
        echo "<h1>Incremento</h1>";
        $ano = $_GET["aa"]; //PEGANDO O ANO ATUAL NA URL (?aa=2021 POR EXEMPLO)
        echo "O ano atual é $ano.";
        echo "</br>O ano anterior foi " . $ano--;
        echo "</br>Será que agora vai? O ano anterior foi $ano.";
        echo "</br>De novo, o ano atual é " . ++$ano;

        //ESSA LINHA É UM COMENTÁRIO

        #AQUI TAMBÉM É UM COMENTÁRIO

        /*DESSA FORMA
        VOU TESTAR
        COMENTÁRIOS MULTILINHAS*/

        ?>
    </div>
</body>

</html>