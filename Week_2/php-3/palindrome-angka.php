<?php

function palindrome_angka($angka) 
{
    if(0 <= $angka && $angka <= 9)
    {
        if(($angka + 1) < 10)
        {
            return $angka + 1 . "<br>";
        }
    }

    for($i = 0; $i < 1000; ++$i)
    {
        $s      =   strval($i);
        $r      =   strrev($s);
        $y      =   intval($s.substr($r,1));

        if($y >= $angka && $y == true)
        {
            return $y . "<br>";
        }
    }
}

// TEST CASES
echo palindrome_angka(8); // 9
echo palindrome_angka(10); // 11
echo palindrome_angka(117); // 121
echo palindrome_angka(175); // 181
echo palindrome_angka(1000); // 1001

?>