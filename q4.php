<?php

$totalTres = 0;
$valorTres = 0;

while ($totalTres < 1000 ){
  $valorTres = $totalTres;
  $totalTres+=3;
};

$totalCinco = 0;
$valorCinco = 0;

while ($totalCinco < 1000 ){
  $valorCinco = $totalCinco;
  $totalCinco+=5;
};

echo 'Total Multiplos 3: ' . $valorTres . PHP_EOL;
echo 'Total Multiplos 5: ' . $valorCinco . PHP_EOL;
echo 'Soma do Total dos Multiplos 3 e 5: ' . ($valorTres + $valorCinco) . PHP_EOL;