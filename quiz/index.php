<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
<h1>SCHOOL TEST</h1>
<form method="post">
  <p><b>1) 1000 x 1000 - 1000 - 999 x 1000 = ?</b></p>
  <label><input type="radio" name="first-question" value="1">1</label><br>
  <label><input type="radio" name="first-question" value="1000">1000</label><br>
  <label><input type="radio" name="first-question" value="1111">1111</label><br>
  <label><input type="radio" name="first-question" value="0">0</label>
  <p><b>2) 25 x 40 = ?</b></p>
  <label><input type="checkbox" name="second-question1" value="1000">1000</label><br>
  <label><input type="checkbox" name="second-question2" value="10*10*10">10*10<sup>2</sup></label><br>
  <label><input type="checkbox" name="second-question3" value="800">800</label><br>
  <label><input type="checkbox" name="second-question4" value="1200">1200</label>
  <p><b>3) 41.1 - 40.3 = ?</b></p>
  <select name="third-question" style="width: 150px">
    <option></option>
    <option>0.8</option>
    <option>-0.8</option>
    <option>-0.2</option>
    <option>0.2</option>
  </select>
  <p><b>4) 800 / 0.25 = ?</b></p>
  <label><input type="radio" name="fourth-question" value="200">200</label><br>
  <label><input type="radio" name="fourth-question" value="400">400</label><br>
  <label><input type="radio" name="fourth-question" value="3200">3200</label><br>
  <label><input type="radio" name="fourth-question" value="0">0</label>
  <p><b>5) 707 + 1818 = ?</b></p>
  <input type="text" name="fifth-question" placeholder="write right answer">
  <p><b>6) 4 / 6 x 3 / 5 = ?</b></p>
  <label><input type="radio" name="sixth-question" value="2/5">2/5</label><br>
  <label><input type="radio" name="sixth-question" value="10/9">10/9</label><br>
  <label><input type="radio" name="sixth-question" value="1/6">1/6</label><br>
  <label><input type="radio" name="sixth-question" value="14/30">14/30</label>
  <p><b>7) 1 / 4 + 1 / 5 + 1 / 10 = ?</b></p>
  <select name="seventh-question" style="width: 150px">
    <option></option>
    <option value="9/20">9/20</option>
    <option value="11/20">11/20</option>
    <option value="3/10">3/10</option>
    <option value="4/10">4/10</option>
  </select>
  <p><b>8) 123 + 456 + 789 = ?</b></p>
  <select name="eighth-question" style="width: 150px">
    <option></option>
    <option value="1368">1368</option>
    <option value="1543">1543</option>
    <option value="1675">1675</option>
    <option value="1276">1276</option>
  </select>
  <p><b>9) 36 / 3 x 2 / 6 = ?</b></p>
  <input type="text" name="ninth-question" placeholder="write right answer">
  <p><b>10) 25 x 20 = ?</b></p>
  <input type="text" name="tenth-question" placeholder="write right answer">
  <input type="submit" value="SHOW RESULT"><br>
</form>
</body>
</html>

<?php
$questions = ["first-question" => "1) 1000 x 1000 - 1000 - 999 x 1000 = ?",
  "second-question1" => "2) 25 x 40 = ?",
  "second-question2" => "2) 25 x 40 = ?",
  "third-question" => "3) 41.1 - 40.3 = ?",
  "fourth-question" => "4) 800 / 0.25 = ?",
  "fifth-question" => "5) 707 + 1818 = ?",
  "sixth-question" => "6) 4 / 6 x 3 / 5 = ?",
  "seventh-question" => "7) 1 / 4 + 1 / 5 + 1 / 10 = ?",
  "eighth-question" => "8) 123 + 456 + 789 = ?",
  "ninth-question" => "9) 36 / 3 x 2 / 6 = ?",
  "tenth-question" => "10) 25 x 20 = ?"
  ];
$rightAnswers = ["first-question" => 0,
  "second-question1" => 1000,
  "second-question2" => "10*10*10",
  "third-question" => 0.8,
  "fourth-question" => 3200,
  "fifth-question" => 2525,
  "sixth-question" => "2/5",
  "seventh-question" => "11/20",
  "eighth-question" => 1368,
  "ninth-question" => 4,
  "tenth-question" => 500
];

//Массив, содержащий ответы на нерешенные, или решенные неправильно, задачи
$differences = array_diff_assoc($rightAnswers, $_POST);
$differencesLength = count($differences);
$questionsLength = count($questions);
//Массив, содержащий задачи, на которые не был дан правильный ответ
$answersForWrongQuestions = array_intersect_key($questions, $differences);
//Массив, содержащий нерешенные задачи и правильные ответы
$newArr = array_combine($answersForWrongQuestions, $differences);
$percent = round(100 -((100*$differencesLength)/$questionsLength));

if (!empty($_POST)){
  echo "<h2>You result is {$percent}%</h2>";
  echo "<h2>Mistakes:</h2>";

  foreach ($newArr as $key => $value){
    echo "<p>$key</p>";
    echo "<p><i>Right answer is {$value} </i></p>";
  }
}