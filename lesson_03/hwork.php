<?php

// # 1
echo "Задание №1: Делятся на 3 без остатка: ";
$num = 0;
$stop = 100;

while($num <= $stop) {
        if(++$num % 3 === 0) echo ($num . " ");
}
echo PHP_EOL;


// #2
echo "Задание №2: Четные и нечетные числа: ";
echo PHP_EOL;
$i = 0;
$n = 10;
do{
        if($i == 0) {
	echo($i . " - это ноль");
	echo PHP_EOL;
        } else if ($i % 2 == 0) {
                echo($i . " - четное число");
		echo PHP_EOL;
	} else {
                echo($i . " - нечетное число");
		echo PHP_EOL;
       }
        $i++;
} while($i <= $n);
//echo PHP_EOL;

// #3
echo "Задание №3: Тренировка создания массивов";
//echo PHP_EOL;
$regions = [];
$regions[0] = [
  'Города субъекта'=> ['Москва', 'Зеленоград', 'Клин'],
  'Субъект' => 'Московская область',
];
$regions[1] = [
  'Города субъекта' => ['Санкт-Петербург', 'Всеволожск', 'Кронштадт'],
  'Субъект' => 'Ленинградская область'
];

$regions[2] = [
  'Города субъекта' => ['Грозный', 'Гудермес'],
  'Субъект' => 'Республика Чечня'
];
$regions[3] = [
  'Города субъекта' => ['Владивосток', 'Уссурийск'],
  'Субъект' => 'Приморский край'
];
$regions[4] = [
  'Города субъекта' => ['Тула', 'Керамзитовск', 'Новомосковск'],
  'Субъект' => 'Тульская область' 
];
echo PHP_EOL;


// #4
function rusToEng($str) {

  $dict = [
    'а' => 'a',
    'б' => 'b',
    'в' => 'v',
    'г' => 'g',
    'д' => 'd',
    'е' => 'e',
    'ё' => 'yo',
    'ж' => 'shz',
    'з' => 'z',
    'и' => 'i',
    'к' => 'k', 
    'л' => 'l',
    'м' => 'm',
    'н' => 'n',
    'о' => 'o',
    'п' => 'p',
    'р' => 'r',
    'с' => 's',
    'т' => 't',
    'у' => 'u',
    'ф' => 'f',
    'х' => 'h',  
    'ц' => 'ts',  
    'ч' => 'ch',
    'ш' => 'sch',
    'щ' => 'tsch',
    'э' => 'e',
    'ю' => 'yu',
    'я' => 'ya',
    'й' => 'yi',
    'ь' => '',
    'ъ' => '',
    'ы' => 'ue',
    '-' => '-',
    '_' => '_',
    '.' => '.',
    ',' => ',',
    '!' => '!',
    '?' => '?',
    ' ' => ' ',
  ];
  
  $newStr = '';
  $newArr = [];
  $keysDict = array_keys($dict);
  $wordArray = preg_split('//u', $str, null, PREG_SPLIT_NO_EMPTY);

  for($i = 0; $i < count($wordArray); $i++) {
    array_push($newArr, $dict[$wordArray[$i]]);
  }
return implode('', $newArr);



/*

//previous decision - more complex 

  for($i = 0; $i < count($wordArray); $i++) {
    for($j = 0; $j < count( $keysDict ); $j++) {
	if($wordArray[$i] === $keysDict[$j]) {
		array_push($newArr, $dict[$wordArray[$i]]);
		//$newStr = $newStr .  $dict[$wordArray[$i]];
      	}
    }
  }

return implode('', $newArr);
*/
};

print_r("Задача #4: передаем слово 'падчерица', получаем : " . rusToEng('падчерица'));
print_r(PHP_EOL);

// #5
function underline($str) {
    for( $i=0; $i < strlen($str); $i++ ) {
        if($str[$i] === ' ') {
                 $str[$i] = '_';
        }
    }
    return $str;
}

print_r("Задача №5: передаем 'кто виноват и что делать' получаем: " . underline('кто виноват и что делать'));
print_r(PHP_EOL);


// #6
print_r("Задача №6 в файле hwork6.php");
print_r(PHP_EOL);

// #7
print_r("Задача №7: ");
for($i = 0; $i < 10; print_r($i), print_r(' '),  $i++ ) {}
print_r(PHP_EOL);


// #8
print_r("Задача №8: ");
$newArr = [];
for($i = 0; $i < count($regions); $i++) {
  for($j = 0; $j < count($regions[$i]['Города субъекта']); $j++){
    if( mb_substr( $regions[$i]['Города субъекта'][$j] , 0, 1) === 'К'  )   {
      array_push( $newArr,  $regions[$i]['Города субъекта'][$j] );
      //print_r(', '); 
      
      //print_r(   $regions[$i]['Города субъекта'][$j] );
      //print_r(', '); 
    };
  }
}
$newArr = implode(', ', $newArr);
print_r($newArr);


//echo count($regions[0]);
print_r(PHP_EOL);


// #9
function transliteUnderline($str){
  return  underline(rusToEng($str));
}
print_r("Задача №9: передаем строку 'сине бело голубые хой! хой!', получаем ответ: " . transliteUnderline("сине бело голубые хой! хой!") );

