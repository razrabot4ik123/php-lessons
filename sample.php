  <!-- как работать с ассоциативными массивами -->
  <?php
  $argAssoc = [
    'Один' => 1,
    'Два' => 2,
    'Три' => 3,
    'Четыре' => 4,
  ];

  // если не использовать $key => будет выводиться только значение ключа т.е. 'Один' его значение => 1
  foreach ($argAssoc as $key => $newArg) {
    // только значения
    echo $newArg . '<br>';
    // только ключи
    echo $key . '<br>';
    // и ключи и значения
    echo $key . $newArg . '<br>';
  };