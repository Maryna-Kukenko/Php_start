<?php
$firstNumber = 0;
$secondNumber = 1;
$position = 8;

function fibonacci($position, $first, $second){
  $value = $first + $second;

  if ($position > 0) {
    echo $first."<br>";

    $first = $second;
    $second = $value;

    return fibonacci($position - 1, $first, $second);
  }
  return null;
}

echo fibonacci($position, $firstNumber, $secondNumber);