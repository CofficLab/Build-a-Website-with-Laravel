<?php
$a = [1, 2, 5,3,4];
$b = [3, 4];

$c = array_merge_and_sort($a, $b);
echo sizeof($a);
print_r($c);

function array_merge_and_sort($a, $b) {
    sort($a);
    sort($b);
    $i = 0;
    $j = 0;
    while ($i < count($a) && $j < count($b)) { //loop to keep them going out of bounds
        if ($a[$i] <= $b[$j]) { 
            $c[] = $a[$i];
            $i++;
        } else {
            $c[] = $b[$j];
            $j++;
        }
    }
    while ($i < count($a)){
        $c[] = $a[$i];
        $i++;
    }
    while ($j < count($b)){
        $c[] = $b[$j];
        $j++;
    }
    return $c;
}




   