<?php

function listDivisor($n) {
    $list = [];
    
    for ($i = 1; $i <= sqrt($n); $i++) {
        if($n % $i === 0) {
            $list[] = $i;
            $list[] = $n / $i;
        }
    }

    sort($list);
    
    return $list;
}
