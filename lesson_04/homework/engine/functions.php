<?php
function showImages ($pathToImages){
    $temp = array_diff(scandir($pathToImages), array('..', '.'));
    foreach($temp as $image) {
        $product = '
        <div class="product">
            <a href="' . 
                '/images' .  '/' . $image . '" target="_blank" ><img src="' .
                '/images' .  '/' . $image . '" title="' . $image .  '" class="frame">
            </a>
        </div> 
        '; 



        echo $product;
    }
}
 
//rows 25 - 37
// toDo scenario #2

/*
        <div id="modal_form">
        <span id="modal_close">X</span>
                <form action="" method="post">
                                <img src="' . 
                                '/images' .  '/' .  $image .
                                '" title="' . $image .
                                '" id="frame">

                                </form> 
                                    </div>
                                    <div id="overlay"></div>
*/