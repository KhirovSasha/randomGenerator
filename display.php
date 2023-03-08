<?php
$data = json_decode(file_get_contents('php://input'), true);

$count = $data['count'];
$dice = $data['dice'];

$results = [];

for ($i = 0; $i < $count; $i++) {
  switch ($dice) {
    case "d4":
      $results[] = rand(1, 4);
      break;
    case "d6":
      $results[] = rand(1, 6);
      break;
    case "d8":
      $results[] = rand(1, 8);
      break;
    case "d10":
      $results[] = rand(1, 10);
      break;
    case "d12":
      $results[] = rand(1, 12);
      break;
    case "d20":
      $results[] = rand(1, 20);
      break;
  }
}

if(count($results) > 0 )
{
  $arrayString = implode(', ', $results);
  $json = json_encode("Rolled $count " .strtoupper($dice) .": " . array_sum($results) ." | Rolls: $arrayString", JSON_PRETTY_PRINT);
}
else
$json = json_encode("Number of Dice not correct", JSON_PRETTY_PRINT);


echo $json;

//alt + shif + f