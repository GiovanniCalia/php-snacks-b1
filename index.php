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
?>

<h2>Nome</h2>
<?php

if (strlen($name) > 3){
  echo "accesso riuscito";
} else {
  echo "accesso negato";
}
?>

<h2>Mail</h2>
<?php
if (strpos($mail, "@") !== false && strpos($mail, ".",strpos($mail, "@") !== false)){
  echo "acesso riuscito";
} else {
  echo "accesso negato";
}
?>

<h2>Età</h2>
<?php 

if (is_numeric($age)){ 
  echo "accesso riuscito";
} else {
  echo "accesso negato";
}
?>

<!--Snack 4
Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta-->

<h1>Quarto snack</h1>

<?php 
$min = 1;
$max = 100;
$total_numbers = 15;

$arr_numbers = [];
while (count($arr_numbers) < $total_numbers){
  $number = rand($min, $max);
  if (!in_array($number, $arr_numbers)){
    $arr_numbers[] = $number;
  }
}
var_export($arr_numbers);
?>

<!--Snack 5
Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo.-->

<h1>Quinto snack</h1>

<?php 
$paragraph = "Lorem ipsum dolor sit amet. Consectetur adipisicing elit. Voluptatibus praesentium sequi dolores veritatis veniam reiciendis atque commodi at dolorum quod. Molestias aliquid ducimus. Odit amet hic deserunt blanditiis molestias aliquid!";

echo $paragraph;
?>

<h2>Testi tagliati</h2>

<?php
$cut = explode(".", $paragraph);
for ($_i = 0; $_i < count($cut); $_i++){
  echo $cut[$_i] . "<br>";
}

?>
</body>
</html>