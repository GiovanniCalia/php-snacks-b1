<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Snacks</title>
</head>
<body>

<!--Snack 1
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60-->

<h1>Primo snack</h1>
<ul><?php
  
  $arr_partite = [
    [
      "casa" => [
        "nome" => "Olympia Milano",
        "punteggio" => 95
      ],
      "ospite" => [
        "nome" => "Cantù",
        "punteggio" => 80
      ],
    ]
  ];

  for ($_i = 0; $_i < count($arr_partite); $_i++) { ?>
  <ul>
    <li>
      <span><?= $arr_partite[$_i]["casa"]["nome"]?></span> -
      <span><?= $arr_partite[$_i]["ospite"]["nome"]?></span> |
      <span><?= $arr_partite[$_i]["casa"]["punteggio"]?></span> -
      <span><?= $arr_partite[$_i]["ospite"]["punteggio"]?></span>
    </li>
  </ul><?php 
  } ?>
  </ul>

<!--Snack 2
Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”-->
<h1>Secondo Snack</h1>
<?php 
$name = $_GET["name"];
$mail = $_GET["mail"];
$age = $_GET["age"];


if (strlen($name) > 3) {
  echo "tutto ok";
} else {
  echo "non va bene";
}
?>

<!--Snack 4
Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta-->



<!--Snack 5
Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo.-->


</body>
</html>