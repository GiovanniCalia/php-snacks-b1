<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Snacks</title>
</head>
<body>

<!-- Snack 1
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60 -->

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
</body>
</html>