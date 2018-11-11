<?php
function isIntersect(array $a, array $b) {
    $flag = true;
    $right = []; 
    $left = [];

    if($a[1] !== $b[1]) {
        if($a[1] > $b[1]) {
            $right = $a; 
            $left = $b;
        } else if($a[1] < $b[1]) {
            $right = $b; 
            $left = $a;
        }
        ($right[0] > $left[1]) ?  $flag = false : $flag = true;
    }
    return $flag; 
}

// testing
// $a = [1, 4];
// $b = [5, 8];

$a = [2, 6];
$b = [0, 6];

if (isIntersect($a, $b)) {
    print_r("intersect");
} else {
    print_r(" not intersect");
}