<?php

function menor($numero) {
  if (($numero % 2 == 0) and ($numero % 3 == 0) and ($numero % 10 == 0)) {
    $numero = $numero;
  } else {
    $numero = menor($numero+1);
  }
  return $numero;
}

echo menor(1) . PHP_EOL;