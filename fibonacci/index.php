<?php
$firstNumber = 0;
$secondNumber = 1;
$position = 8;

function fibonacci($position, $first, $second){
  $value = $first + $second;

  if ($position > 3) {
    $first = $second;
    $second = $value;
    echo $value." ";
    return fibonacci($position - 1, $first, $second);
  }
  echo "<br>";
  return "Fibonacci number on position {$position} = {$value}";
}

echo fibonacci($position, $firstNumber, $secondNumber);