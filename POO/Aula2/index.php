<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Aula 02 - POO</title>
</head>

<body>
  <?php
  require_once 'Caneta.php';
  $c1 = new Caneta;
  $c1->cor = "Azul";
  $c1->ponta = 0.5;
  $c1->tampada = false; //falso mostra vazio, verdadeiro mostra 1
  $c1->tampar(); //mudando tampar e destampar, ele influencia no método seguinte
  $c1->rabiscar();

  var_dump($c1); //para mostrar o estado em PHP
  print_r($c1); //outro jeito de mostrar o estado do objeto
  ?>
</body>

</html>