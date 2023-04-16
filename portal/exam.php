<?php
    $a = array(100,2,9,16);
    sort($a);
    
    $n = count($a);
    $x = 2;
    $y = 3;
    function Minimization($x, $y, $a)
    {
        foreach($a as $b)
        {
            $rp_1 = $x * $a[1];
            $rp_2 = $y * $a[0];

            $out = $rp_1 - $rp_2;
        }
        return $out;
    }
    echo Minimization($x, $y, $a);
?>