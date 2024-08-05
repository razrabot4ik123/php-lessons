<!-- <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP</title>
</head>
<body>
  <div class="div">
    <?php 
    // echo 'Hello world';
    ?>
  
    <?php 
  
    // назначение const в php
    // первое значение ее название, а второе ее значение
    // define('NAME', "Albus");
    // var_dump(NAME);
  
    // назначение переменной, верблюд стилем
    // $string = '1';
    // $stringTwo = 'asdasdgvs';
    // $num = 11234;
  
    // $resultsrting = $stringTwo + $string;
  
    // $float = 1.123;
  
    // $boole = true;
  
    // $result = $string + $num;
    // вывести командой echo
    // echo $result;
    
    // вывести тип данных 
    // var_dump($result);
    // var_dump($string);
    // var_dump($float);
    // var_dump($boole);
    ?>
  </div>
</body>
</html> -->

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP-2</title>
  <style>
    .Zirni {
      font-size: 30px;
    }
  </style>
</head>
<body>
  <div class="div">
  <?php 
  $args = ['Alex', 10, 76.6, [true, false, 123123, 'hello']];
  
  // старая версия объявления массива
  $argsDva = array('Alex', 10, 76.6, true);

  var_dump($args);
  var_dump($argsDva);

  // обратиться к какому-то элементу по его индексу
  var_dump($args[0]);
  ?>

  <?php 
  // ассоциативный массив
  // пара ключ значение
  $argsTri = [
    'name' => 'Alex',
    'age' => 10,
    'height' => 183.5,
    'is_male' => true,
    'fruits' => ['bananas', 'apples']
  ];
  
  var_dump($argsTri);

  // обратиться к ключу и получить его значение
  var_dump($argsTri['name']);
  ?>

  <?php 
  // Конкатенация строк
  $num = 1;
  $string = 'asdasdasd';

  var_dump($num . $string);

  echo '1Hello' . ' ' . 'Wolrd';

  $arrayChet = ['2Hello', 'World'];

  echo $arrayChet[0] . $arrayChet[1];

  $var = 'World!';
  echo "3Hello {$var}s";
  
  // экранирование ковычек
  echo "4Hello \"little\" World";
  ?>
  
  <br>
  
  <?php
  $a = 10;
  $a++; 
  
  echo $a;
  ?>

  <br>

  <?php
  $b = 10;
  //выведется 10 
  $res = $b++;
  echo $res;
  
  // выведется 11(не учитывая что написано выше про $b++)
  $res = ++$b;
  echo $res;

  ?>

  <br>

  <?php 
  for ($b=0; $b < 10; $b++) { 
    echo "Hello $b" . '<br>';
  }
  ?>
  
  <div class="Zirni">Домашка ниже</div>
  
  <br>
  <br>
  <br>
  <br>
  <br>

  <!-- Домашнее задание урок 6 ==================================================================================================================================================================================================================-->
  <?php 
  for ($i = 0; $i < 10; $i++) { 
    echo "<span class=\"class_{$i}\">span - {$i}</span> <br>";
  }

  // реализация преподавателья
  for ($c=0; $c < 10; $c++) { 
    echo "<span class='class$c'> Я span " . $c + 1 . " </span> <br>";
  } 
  ?>

  <!-- более читабельная конструкция -->
  <?php
    for ($y=0; $y < 10; $y++) {
  ?>
      <span class="<?php echo $y?>"> I'm спан <?php echo $y + 1 ?></span> <br>
  <?php
    }
  ?>

  <!-- еще более читабельная версия -->

  <?php for ($u=0; $u < 10; $u++) { ?>

    <span class="class<?php echo $u?>"> I'm спан <?php echo $u + 1 ?></span> <br>

  <?php } ?>

  <br>
  <br>
  <br>
  <br>
  <br>

  <!-- if -->
  <!-- есть строгое сравнение при помощи === -->

  <?php for ($p=0; $p < 10; $p++) { 
    if ($p % 2 == 0) {
      echo $p;
    } else if (true) {
      echo 'else if';
    } else {
      echo 'else';
    }
  } ?>

  <!-- while -->
  
  <?php 
  $t = 0;
  
  while ($t <= 10) {
    echo "while $t <br>";
    $t++;
  } 
  ?>

  <!-- массивы и for -->

  <?php 
  $argsDesat = ['Один', 'Два', 'Три', 'Четыре'];
  
  // count == свойству lenght в js
  echo count($argsDesat);

  echo '<br>';

  for ($q = 0; $q < count($argsDesat); $q++) { 
    echo $argsDesat[$q] . '<br>';
  }
  ?>

  <!-- do while -->

  <?php

  $a = 0;

  do {
    echo ++$a; 
  } while ($a < 10);
  ?>

  <!-- foreach -->
  <?php 
  $argsMillion = ['Один', 'Два', 'Три', 'Четыре'];

  foreach ($argsMillion as $argNew) {
    echo $argNew . '<br>';
  };
  ?>
  
  <br>
  <br>
  <br>
  <br>
  <br>

  <!-- подключение php файлов друг в друга -->
  <?php 
  // если ошибиться в пути, то выдаст ошибку и сайт ниже будет грузиться 
    include 'sample.php';
  
    // если ошибиться в пути, то выдаст ошибку и сайт ниже НЕ будет грузиться(фатальная ошибка остановит работу сайта) 
    require 'sample.php';

    // если подключать без прописки _once, то один и тот же файл можно будет подключить несколько раз и все разы будут работать, а если с этой пропиской, то при повторном подключении файла не будет ошибки, но и дублироваться он не будет
    include_once 'sample.php';

    // работает также как и include_once, за исключением такой же ошибки путей при подключении файла
    require_once 'sample.php';
  ?>

  <br>
  <br>
  <br>
  <br>

  <!-- функции -->
  <?php 
  function doSomething($argssss) {
    echo $argssss;
  }

  doSomething('asdasdasd');

  echo '<br>';
  echo '<br>';
  echo '<br>';

  function newFunc() {
    return 'сынок, а парода А-ла-бай';
  }

  echo newFunc();
  ?>

  <div class="Zirni">Домашка ниже</div>

  <br>
  <br>
  <br>
  <br>
  <br>

  <!-- дз к 7 уроку ==============================================================================================================================================================================-->
  <div class="Zirni">первая домашка к 7 уроку</div>
  <?php 
  include 'output.php';
  ?>
  
  <br>
  <br>
  <br>

  <div class="Zirni">Вторая домашка к 7 уроку</div>
  <?php 
  include 'output-сycle.php';
  ?>

  <br>
  <br>
  <br>

  <div class="Zirni">Третья домашка к 7 уроку</div>
  <?php 
  include 'counter-even.php'
  ?>
  </div>
</body>
</html>