<?php

$estados = ['ES', 'MG', 'RJ', 'SP'];
$cidade = ['São Paulo', 'Rio de Janeiro', 'Minas Gerais', 'Espírito Santo'];

$count = count($estados);
$estatosCidade = [];

for ($i = 0; $i < $count; $i++) {
  $estatosCidade[$estados[$i]] = $cidade[$i];
};

foreach($estatosCidade as $keyItem => $itemValue) {
  echo $keyItem . ' - ' . $itemValue . PHP_EOL;
}
