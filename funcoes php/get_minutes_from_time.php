<?php
function get_minutes_from_time($hr)
{
    $time = explode(":",$hr);
    $t1 = intval($time[0]) * 60;
    $t2 = intval($time[1]);
    if ( strpos($hr,'-') !== false )
        return $t1 - $t2;
    else
        return $t1 + $t2;
}

/*
echo get_minutes('02:30');
=> 150
echo get_minutes('-00:10');
=> -10
*/