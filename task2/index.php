<?php
// 1

$array = ["html", "css", "php", "js", "jq"];

foreach ($array as $arrayItem) {
  echo "<pre>";
  var_dump($arrayItem);
  echo "</pre>";
}

// 2

$numbers = [1, 20, 15, 17, 24, 35];
$result = 0;

foreach ($numbers as $number) {
  $result += $number;
}

echo "summ = ".$result;
echo "<br />";

// 3

$numbers2 = [26, 17, 136, 12, 79, 15];
$result2 = 0;

foreach ($numbers2 as $number) {
  $number *= $number;
  $result2 += $number;
}

echo "sum of square numbers = ".$result2;
echo "<br />";

// 4

$arr = array('green' => 'зеленый', 'red' => 'красный', 'blue' => 'голубой');

foreach ($arr as $key => $arrItem) {
  echo "<pre>";
  var_dump($key);
  echo "</pre>";
}

foreach ($arr as $arrItem) {
  echo "<pre>";
  var_dump($arrItem);
  echo "</pre>";
}

// 5

$arr2 = ["Коля" => "200", "Вася" => "300", "Петя" => "400"];

foreach ($arr2 as $name => $salary) {
  echo "<pre>";
  var_dump($name." - зарплата {$salary} долларов.");
  echo "</pre>";
}

// 6

$en = [];
$ru = [];

foreach ($arr as $enColors => $ruColors) {
  array_push($en, $enColors);
  array_push($ru, $ruColors);
}

echo "<pre>";
var_dump($en);
echo "</pre>";

echo "<pre>";
var_dump($ru);
echo "</pre>";

// 7

$numbers3 = [2, 5, 9, 15, 0, 4];

foreach ($numbers3 as $number) {
  if ($number > 3 && $number < 10) {
    echo "<pre>";
    var_dump($number);
    echo "</pre>";
  }
}

// 8

$numbers4 = [1, 2, 3, 4, 5, 6, 7, 8, 9];
$str = ' ';

foreach ($numbers4 as $number) {
  $str = $str.(string)$number."-";
}

echo $str;

// 9

for ($i = 1; $i <= 100; $i++) {
  echo $i;
  echo "<br />";
}

// 10

for ($i = 11; $i <= 33; $i++) {
  echo $i;
  echo "<br />";
}

// 11

for ($i = 1; $i <= 100; $i++) {
  if ($i % 2 == 0) {
    echo $i;
    echo "<br />";
  }
}

// 12

$n = 1000;

for ($i = 0; $n >= 50; $i++) {
  $n = $n / 2;
  $num = $i + 1;
}

echo "num = {$num}";

// 13

for ($i = 1; $i <= 10; $i++) {
  for ($j = 1; $j <= 10; $j++) {
    $result = $i * $j;

    echo "<pre>";
    var_dump("{$i} * {$j} = {$result}");
    echo "</pre>";
  }
}

// 14, 15

$numbers5 = [4, 2, 5, 19, 13, 0, 10];
$count = 0;

foreach ($numbers5 as $number) {
  if ($number == 2 || $number == 3 || $number == 4) {
    echo "Есть!";
    echo "<br />";
    break;
  } else {
    echo "Нет";
  }
}

foreach ($numbers5 as $number) {
  if ($number || $number === 0) {
    $count += 1;
  }
}

echo "count = {$count}";
echo "<br />";

// 16

$count = 0;
$row = '';

foreach ($numbers4 as $number) {
  $count++;
  $row = $row . $number;
  if ($count % 3) {
    $row = "{$row}, ";
  } else {
    echo $row;
    echo "<br />";
    $row = '';
  }
}

// 17

$months = ["янврь", "февраль", "март", "апрель", "май", "июнь", "июль", "август", "сентябрь", "октябрь", "декабрь"];
$currentMonth = "май";

foreach ($months as $month) {
  if ($month == $currentMonth) {
    echo "<b>{$month} </b>";
  } else {
    echo $month." ";
  }
}
echo "<br />";

// 18, 19

$week = ["понедельник", "вторник", "среда", "четверг", "пятница", "субота", "воскресенье"];
$saturday = "субота";
$sunday = "воскресенье";
$currentDay = "вторник";

foreach ($week as $day) {
  if ($day == $currentDay) {
    echo "<i>{$day} </i>";
  } elseif ($day == $sunday || $day == $saturday) {
    echo "<b>{$day} </b>";
  } else {
    echo "{$day} ";
  }
}
echo "<br />";

// 20

$xTriangle = "";

for ($i = 0; $i < 20; $i++) {
  echo "{$xTriangle}</br>";
  $xTriangle = $xTriangle."x";
}


// 21

$numberTriangle = null;

for ($i = 1; $i <= 9; $i++) {
  for ($j = 1; $j <= $i; $j++) {
    $numberTriangle = $numberTriangle.$i;
  }
  echo "{$numberTriangle}<br>";
  $numberTriangle = null;
}

// 22

$xTriangle2 = '';

for ($i = 0; $i < 6; $i++) {
  echo "{$xTriangle2}</br>";
  $xTriangle2 = $xTriangle2."xx";
}

// 23

$enterNumber = 123;

function calculateSum($int)
{
  $string = (string)$int;
  $array = preg_split("//", $string);

  echo array_sum($array);
}

calculateSum($enterNumber);
echo "<br />";

// 24

$number6 = 14583339578439;
$checkedNumber = 3;
$repeatTimes = null;

function calculateRepeating($numbers, $number){
  $string = (string)$numbers;
  $array = preg_split("//", $string);
  $repeatNumbers = array_count_values($array);

  foreach ($repeatNumbers as $element => $countNum) {
    if ($element === $number) {
      echo "Число {$number} повторяется {$countNum} раз";
    }
  }
}

calculateRepeating($number6, $checkedNumber);
echo "<br />";

// 25

$randArray = [];

for ($i = 0; $i < 10; $i++) {
  $randArray[$i] = rand(0, 5);
}

function changingData ($randArray){
  $minValue = min($randArray);
  $maxValue = max($randArray);

  $minKey = array_keys($randArray, $minValue);
  $maxKey = array_keys($randArray, $maxValue);

  foreach ($minKey as $miItem) {
    $randArray[$miItem] = $maxValue;
  }

  foreach ($maxKey as $maxItem) {
    $randArray[$maxItem] = $minValue;
  }
  return $randArray;
}

changingData($randArray);

// 26

$randArray2 = [];

for ($i = 0; $i < 10; $i++) {
  $randArray2[$i] = rand(-100, 100);
}

function filterArray($plusValue, $doubleKey)
{
  return $doubleKey % 2 == 0 && $plusValue > 0;
}

function filterArray2($plusValue, $doubleKey)
{
  return $doubleKey % 2 !== 0 && $plusValue > 0;
}

$newRandArray = array_filter($randArray2, "filterArray", ARRAY_FILTER_USE_BOTH);
$newRandArray2 = array_filter($randArray2, "filterArray2", ARRAY_FILTER_USE_BOTH);
$multiplication = 1;

foreach ($newRandArray as $arrayItem) {
  $multiplication *= $arrayItem;
}

echo "Произведение элементов, которые больше ноля и у которых парные
индексы = {$multiplication}";

echo "<pre>";
var_dump($newRandArray2);
echo "</pre>";
