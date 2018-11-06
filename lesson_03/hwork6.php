<?php
echo "Задача #6 на модфикацию страницы";
echo "<br>--------------------------------------------------------------<br>";
$i = 3;
$k = 7;

$mainTitle = "Title"; // в переменную записывается название
$mainTitleTagged = "<title>Title</title>"; // в переменную записывается сам тег
$headerTitleTagged = "<h1>Title</h1>";
$year = date('Y'); // получение текущего года

// Задание №6. Начало: формируем массив для пунктов меню 

// простой вариант меню
$menuPoints = ['home', 'archive', 'contact']; 


// 2-уровневый вариант меню
$largeMenuPoints = [];

$largeMenuPoints[0] = [
    'sections'=> ['First', 'Second', 'Third'],
    'subject' => 'home',
];
$largeMenuPoints[1] = [
    'sections'=> [2017, 2016, 2015],
    'subject' => 'archive',
];
$largeMenuPoints[2] = [
    'sections'=> ['CEO', 'CFO', 'CTO'],
    'subject' => 'contact',
];
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


    <!-------Задание №6 к уроку №3. Продолжение------------------------------------------------------------------>

    <!-- Сценарий 1-уровня меню -->
    <ul><?php for($i = 0; $i < count($menuPoints); $i++) {'<li><a href="#">' . $menuPoints[$i] .  "</a></li>";} ?></ul>

    <!-- Сценарий 2-уровня меню -->
<!-- <ul> -->
        <?php
            '<ul>';

            for($i = 0; $i < count($largeMenuPoints); $i++) {
               '<li><a href="#">' . $largeMenuPoints[$i]['subject'] .  "</a></li>";

               '<ul>';
               for($j = 0; $j < count($largeMenuPoints[$i]['sections']); $j++) {
                '<li><a href="#">' . $largeMenuPoints[$i]['sections'][$j] .  "</a></li>";
               }
               '</ul>';
            }
            '</ul>';
        ?>
    <!-- </ul> -->
    <!-------Задание №6 к уроку №3. Окончание------------------------------------------------------------------>
    
    
    
    
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