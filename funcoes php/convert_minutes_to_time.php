<?php
function minutes_to_time($minutes)
{
    $negativo = false;

    if( $minutes < 0 )
    {
        $negativo = true;
        $minutes = abs($minutes);
    }		

    if ($minutes < 1) {
        return;
    }

    $hours = floor($minutes / 60);

    if($negativo)
        if($hours > 0 )
            $hours = -1 * abs($hours);
        else
            $hours = '-00';
    
    $min = ($minutes % 60);


    return sprintf('%02s:%02d', $hours, $min);
}

/*
echo minutes_to_time(-20);
=> -00:20

echo minutes_to_time(70);
=> 01:10
*/