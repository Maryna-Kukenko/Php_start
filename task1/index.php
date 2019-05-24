<?php

// 1

$name = "Марина";

// 2

$age = 25;

// 3

echo "Меня зовут: ".$name;
echo "<br>";

// 4

echo "Мне {$age} лет";
echo "<br>";

// 5, 6, 7, 8

if ($age > 18 && $age <= 59) {
  echo "Вам еще работать и работать";
} elseif ($age > 59) {
  echo "Вам пора на пенсию";
} elseif ($age <= 17 && $age > 0) {
  echo "Вам еще рано работать";
} else {
  echo "Неизвестный возраст";
}
echo "<br>";

// 9

$day = 18;

// 10, 11, 12

switch ($day) {
  case 1:
  case 2:
  case 3:
  case 4:
  case 5:{
    echo "Это рабочий день";
  }
  break;
  case 6:
  case 7:{
    echo "Это выходной день";
  }
  break;
  default:{
    echo "Неизвестный день";
  };
}
echo "<br>";

// 13

$s = 625;
$t = 2;
$speed = $s / $t;
$speed2 = round($speed * 1000 / 3600, 2);

echo "Скорость (км/ч): {$speed}";
echo "<br>";
echo "Скорость (м/c): {$speed2}";
echo "<br>";

// 14

$foo = "bar";
$$foo = 10;

echo "bar = {$bar}";
echo "<br>";

// 15

$a = 15;
$b = 78;
$operator = "%";

switch ($operator) {
  case "+":{
    echo $a + $b;
    break;
  }
  case "-":{
    echo $a - $b;
    break;
  }
  case "*":{
    echo $a * $b;
    break;
  }
  case "/":{
    if ($b == 0) {
      echo "ERROR: you can't devide on 0";
      break;
    }
    echo $a / $b;
    break;
  }
  case "%":{
    if ($b == 0) {
      echo "ERROR: you can't devide on 0";
      break;
    }
    if ($a < $b) {
      echo "ERROR: its not possible when a < b";
      break;
    }
    echo $a % $b;
    break;
  }
  default:{
    echo "ERROR: choose wright operator";
    break;
  }
}
echo "<br>";

// 16

$firstNumber = 6;
$secondNumber = 6;

if ($firstNumber > $secondNumber) {
  echo $firstNumber;
} elseif ($firstNumber < $secondNumber) {
  echo $secondNumber;
} else {
  echo "firstNumber = secondNumber = {$firstNumber}";
}
echo "<br>";

// 17, 18, 19

$a = '78';
$b = 78;

if ($a == $b) {
  echo "a и b ровны по значению";
} else {
  echo "a и b ровны по значению у";
}
echo "<br>";

if ($a === $b) {
  echo "a и b ровны по значению и типу";
} else {
  echo "a и b не ровны по значению и типу";
}
echo "<br>";

var_dump($a === $b);
echo "<br>";

// 20, 21, 22
var_dump((bool)20);
var_dump((bool)0);
var_dump((bool)-20);

// 23

echo "Строка\n";
var_dump("Строка\n");
printf("Строка\n");

// 24

//Комментарий
/*Комментарий

*/
#Комментарий

// 26

const DAYS_COUNT = 7;
define("MONTH_COUNT", 12);
