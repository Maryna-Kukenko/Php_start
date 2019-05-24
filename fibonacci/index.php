<?php
$firstNumber = 0;
$secondNumber = 1;
$position = 25;

function fibonacci($position, $first, $second){
  $value = $first + $second;

  if ($position > 3) {
    $first = $second;
    $second = $value;
    return fibonacci($position - 1, $first, $second);
  }

  return $value;
}

echo fibonacci($position, $firstNumber, $secondNumber);