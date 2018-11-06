<?php


// #1
$a = -42;
$b = 7;

echo "Задание №1\t\t" . "a = " . $a . " b = " . $b . ". Результат работы скрипта = "; 
if ($a >= 0 && $b >= 0) {
    echo $a - $b;
} else if($a < 0 && $b < 0)  {
    echo $a * $b;
} else {
    echo $a + $b;
}
echo PHP_EOL;


// #2
$num = 0;
echo "Задание №2\n"; 
switch($num) {
	case "0":
		echo "\t\t\tЗначение = " . 0 . "\n";
	case "1":
        echo "\t\t\tЗначение = " . 1 . "\n";
	case "2":
		echo "\t\t\tЗначение = " . 2 . "\n";		
	case "3":
		echo "\t\t\tЗначение = " . 3 . "\n";
	case "4":
		echo "\t\t\tЗначение = " . 4 . "\n";
	case "5":
		echo "\t\t\tЗначение = " . 5 . "\n";
	case "6":
		echo "\t\t\tЗначение = " . 6 . "\n";
	case "7":
		echo "\t\t\tЗначение = " . 7 . "\n";
	case "8":
		echo "\t\t\tЗначение = " . 8 . "\n";
	case "9":
		echo "\t\t\tЗначение = " . 9 . "\n";
	case "10":
		echo "\t\t\tЗначение = " . 10 . "\n";
	case "11":
		echo "\t\t\tЗначение = " . 11 . "\n";
	case "12":
		echo "\t\t\tЗначение = " . 12 . "\n";		
	case "13":
		echo "\t\t\tЗначение = " . 13 . "\n";
	case "14":
		echo "\t\t\tЗначение = " . 14 . "\n";
	case "15":
		echo "\t\t\tЗначение = " . 15 . "\n";
		break;
}


// #3
function summation($x, $y){
	return $x + $y;
}
function multiplication($x, $y){
	return $x * $y;
}
function division($x, $y){
	return $x / $y;
}
function substraction($x, $y) {
	return $x - $y;
}
$temp = substraction(11, 14);
echo "Задание №3\t\t" . "substraction(11, 14) = " . $temp;
echo PHP_EOL;



// ---

// #4
function mathOperation($x, $y, $operation) {
	switch ($operation) {
		case "+":
			return summation($x, $y);
		case "-":
			return substraction($x, $y);
		case "*":
			return multiplication($x, $y);
		case "/":
			return division($x, $y);
		default:
			echo "Вы не ввели символ арифметической операции";
	}
}
$temp = mathOperation(11, 14, "+");
echo "Задание №4\t\t" . "mathOperation(11, 14, '+'') = " . $temp;
echo PHP_EOL;


// #5 - 
echo "Задание №5\t\tрешено в задании к уроку №1\n";


// #6
echo "Задание №6\t\t";
function power($val, $pow){
	if ($pow == 0) {
		return 1;
	} else if($pow > 0) {
		return $val * power($val, $pow - 1);
	} else if($pow < 0) {
		return 1 / ($val * power($val, -$pow - 1));
	} 
}
$temp = power(2, 4);
echo $temp;
echo PHP_EOL;


// #7 
$curHour = date('H');
$curMinute = date('i');
echo "Текущее время:\t\t";

if($curHour == 0 || ($curHour >= 5 && $curHour <= 20)) {
    echo $curHour . " часов ";
} else if($curHour == 1 || $curHour == 21) {
    echo $curHour . " час ";
} else if(($curHour >= 2 && $curHour <= 4) 
    || ($curHour >= 22 && $curHour <= 24)) {
    echo $curHour . " часа ";
}

if($curMinute == 0 || ($curMinute >= 5 && $curMinute <= 20)
    // || ($curMinute >= 25 && $curMinute <= 30)
    // || ($curMinute >= 35 && $curMinute <= 40)
    // || ($curMinute >= 45 && $curMinute <= 50)
    // || ($curMinute >= 55 && $curMinute <= 60) 
    || $curMinute % 10 == 5
    || $curMinute % 10 == 6
    || $curMinute % 10 == 7
    || $curMinute % 10 == 8
    || $curMinute % 10 == 0
    ) {
        echo $curMinute . " минут";
} else if($curMinute % 10 == 1 || $curMinute == 1 ) {
    echo $curMinute . " минута";
} else if ($curMinute % 10 == 2 || $curMinute % 10 == 3 
    || $curMinute % 10 == 4 || $curMinute == 2 
    || $curMinute == 3 || $curMinute == 4) {
    echo $curMinute . " минуты";
}
echo PHP_EOL;

//0, 5 - 20 часов
// 1 , 21 час
// 2 - 4, 22-24 часа

// 0, 5-20, 25-30, 35-40, 45-50, 55-60 - минут
// 1, 21, 31, 41, 51 - минута
// 2 -4, 22-24, 32-34, 42-44, 52-54,  - минуты
