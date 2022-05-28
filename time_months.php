<?php
function myDate($date){
    $today = date('Y-m-d');
    $today = strtotime($today);
    $start = strtotime($date);
    $day = date('d',$start);
    $k = 0  ;
    while ($start <= $today){
        if ($day == date('d',$start)){
            $k++;
        }
        $start += 86400;
    }
    return $k;
}