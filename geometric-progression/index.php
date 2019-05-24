<?php
$qValue = 3;
$startNumber = 2;
$endPosition =5;

function geometricProgression ($startNumber, $endPosition, $qValue) {
    if ($endPosition > 0){
      echo $startNumber." ";

      $progressionNumber = $startNumber * $qValue;
      $startNumber = $progressionNumber;

      return geometricProgression($startNumber, $endPosition - 1, $qValue);
  }
    return null;
}

echo geometricProgression($startNumber, $endPosition, $qValue);