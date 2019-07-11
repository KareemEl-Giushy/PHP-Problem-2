<?php
    // The Element;
    $theEl = 'kareem';
    // The Array
    $arr = ['mohmmed', 'kareem', 'ahmed', 'eslame'];

    // Version - 1
    /********************************/
    // if(!empty(array_search($theEl, $arr))) {

    //     $indx = array_search($theEl, $arr);
    //     unset($arr[$indx]);
    
    // }

    // Version - 2
    /********************************/
    // $indx = !empty(array_search($theEl, $arr)) ? array_search($theEl, $arr): false;

    // if($indx !== false){

    //     unset($arr[$indx]);
    
    // }

    // Printing Out For Version -  1 , 2
    echo '<pre>';
    print_r($arr);
    echo '</pre>';


    // Version - 3
    /********************************/
    $result = [];
    foreach($arr as $item) {
        
        if($item != $theEl) {
            $result[] = $item;
        
        }

    }

    echo '<pre>';
    print_r($result);
    echo '</pre>';