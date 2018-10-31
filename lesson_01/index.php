<?php
echo "====================================================================<br>";
echo "задача №1 Установка компонентов";
echo "<br>--------------------------------------------------------------<br>";
echo "Установлен XAMPP на Ubuntu 16.04";
echo "<br>";
echo "====================================================================<br>";
echo "задача №2 Повторение примеров из методички";
echo "<br>--------------------------------------------------------------<br>";
// echo "Hello, world";
// define('MY_CONST', 142);
// echo MY_CONST;
// $name = "User";
// echo "Hello, $name";

// $precise1 = 1.5;
// $precise2 = 1.5e4;
// $precise3 = 6E-8;
// echo "$precise1 | $precise2 | $precise3";

// $a = 1;
// echo $a;
// echo 'a';
// echo "a";

// $a = 'Hello,';
// $b = 'world';
// $c = $a . $b;
// echo $c;


echo "<br>";
echo "====================================================================<br>";
echo "Задача №3 на объяснение результата сравнение";
echo "<br>--------------------------------------------------------------<br>";

$a = 5;
$b = '05';
var_dump($a == $b);         // Почему true?
echo "<br>
Результат сравнения переменных a (5) и b ('05') равен true, т.к.
производится приведение переменной строкового типа к типу числовому. 
Интерпретатор РНР смог произвести посимвольное преобразование 
строки '05' в число 5. В данном случае '==' позволяет произвести 
предварительное приведение к одному типу.
В JavaScript логика сравнение через данный оператор такая же. 
Строгое сравнение через '===' выдаст в этом случае false, 
т.к.данные переменные разных типов.  
<br><br>";

var_dump((int)'012345');     // Почему 12345?
echo "<br>
Явное приведение типа 
из строки '012345' в число 12345 с помощью (int)
прошло успешно, т.к. интерпретатор РНР
смог произвести посимвольное преобразование 
строки '012345' в число 12345. Интересно, что если в данную строку
вставить символ буквы, то интерпретатор распознает число, 
состоящее из цифр, находящихся до этой буквы:
например, '012щ345' преобразуется в число 12. 
<br><br>";


var_dump((float)123.0 === (int)123.0); // Почему false?
echo "<br>
Переменная var_dump '((float)123.0 === (int)123.0)' 
равна false, т.к. при строгом сравнении оператором '===' 
сперва производится сравнение типов переменных. 
В данном случае числа с плавающей точкой и целочисленного.
<br><br>"; 

var_dump((int)0 === (int)'hello, world'); // Почему true?
// var_dump((int)0 === 0);
echo "<br>
Приведение строки 'hello, world' к целочисленному типу дает false, 
т.е. 0.
Строгое сравнение 0 с 0 дает истину.
<br><br>====================================================================<br>";
?>

<?php
echo "Задача №5 на смену значений переменных";
echo "<br>--------------------------------------------------------------<br>";
$i = 3;
$k = 7;

echo 'До изменения:<br>';
echo " i = " . $i;
echo '<br>';
echo " k = " . $k;
echo '<br>';


$i = $i + $k;
$k = $i - $k;
$i = $i - $k;

echo 'После изменения:<br>';
echo " i = " . $i;
echo '<br>';
echo " k = " . $k;
echo '<br>';
echo "<br>====================================================================<br>";
?>

<?php
echo "Задача №4 на модфикацию страницы";
echo "<br>--------------------------------------------------------------<br>";
$i = 3;
$k = 7;

$mainTitle = "Title"; // в переменную записывается название
$mainTitleTagged = "<title>Title</title>"; // в переменную записывается сам тег
$headerTitleTagged = "<h1>Title</h1>";
$year = date('Y'); // получение текущего года
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" http-equiv="content-type">
    <!-- <title>Title </title> -->

    <!-- <title><?php echo $mainTitle?></title>  -->
    <!-- вызывается печать переменной внутри нужного тега -->
    
    <?php echo $mainTitleTagged ?>
    <!-- вызывается печать переменной, в которой ранее создан нужный тег -->
</head>
<body>
    <!-- <h1><?php echo $mainTitle?></h1> -->
    <!-- вызывается печать переменной внутри нужного тега -->
 
    <?php echo $headerTitleTagged ?>
    <!-- вызывается печать переменной, в которой ранее создан нужный тег -->

    <!-- <?php echo $year ?> -->

    <ul>
        <li><a href="#">home</a></li>
        <li><a href="#">archive</a></li>
        <li><a href="#">contact</a></li>
    </ul>
    <div class="post">
        
        <div class="detail">
            <h2><a href="#">Nunc commodo euismod massa quis vestibulum</a></h2>
            <p class="info">posted 3 hours ago in <a href="#">general</a></p>
        </div>
        <div class="body">
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim</p>
        </div>
        <div class="x"></div>
    </div>
    <div class="col">
        <h3><a href="#">Ut enim risus rhoncus</a></h3>
        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim</p>
        <p>&not; <a href="#">read more</a></p>
    </div>
    <div class="col">
        <h3><a href="#">Ut enim risus rhoncus</a></h3>
        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim</p>
        <p>&not; <a href="#">read more</a></p>
    </div>
    <div class="col last">
        <h3><a href="#">Ut enim risus rhoncus</a></h3>
        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim</p>
        <p>&not; <a href="#">read more</a></p>
    </div>


    <div id="footer">
        <p>Copyright &copy; <em>mini</em> &middot; Design: <a href="#">...</a>
            <span><?php echo $year ?></span> </p>
   
        <!-- <p>Copyright &copy; <em>mini</em> &middot; Design: <a href="#">...</a><span>01.01.2018</span> </p> -->
    </div>


</body>
</html>