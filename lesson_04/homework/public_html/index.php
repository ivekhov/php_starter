<?php

//----PHP Code Start---------------------------
include_once '../config/config.php';
?>
<!-- //----PHP Code End--------------------------- -->




<!-- //----HTML Code Start--------------------------- -->
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>likeNike: интернет-магазин кроссовок</title>
        <link rel="stylesheet" type="text/css" href="css/styles.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <!-- <script src="scripts/scripts.js"></script> -->

        <script type="text/javascript">
        $(document).ready(function() { // вся магия после загрузки страницы
            $('a#go').click( function(event){ // ловим клик по ссылки с id="go"
                event.preventDefault(); // выключаем стандартную роль элемента
                $('#overlay').fadeIn(400, // сначала плавно показываем темную подложку
                    function(){ // после выполнения предъидущей анимации
                        $('#modal_form') 
                            .css('display', 'block') // убираем у модального окна display: none;
                            .animate({opacity: 1, top: '50%'}, 200); // плавно прибавляем прозрачность одновременно со съезжанием вниз
                });
            });
            /* Закрытие модального окна, тут делаем то же самое но в обратном порядке */
            $('#modal_close, #overlay').click( function(){ // ловим клик по крестику или подложке
                $('#modal_form')
                    .animate({opacity: 0, top: '45%'}, 200,  // плавно меняем прозрачность на 0 и одновременно двигаем окно вверх
                        function(){ // после анимации
                            $(this).css('display', 'none'); // делаем ему display: none;
                            $('#overlay').fadeOut(400); // скрываем подложку
                        }
                    );
            });
        });
        </script>

  </head>   
  <body>
    
  </body>
</html>
 

	</head>
	<body>
        <h3>likeNike - здесь продаются кроссовки</h3>
        <hr>
        <h1>Каталог</h1>
            <div class="container">
                <?php 
                    showImages(PHOTO_DIR);
                ?>            
            </div>

</body> 
</html>
<!-- //----HTML Code End--------------------------- -->