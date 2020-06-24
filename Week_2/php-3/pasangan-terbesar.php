<?php
function pasangan_terbesar($angka)
{
    $total                      =   strlen($angka);
    $max_new                    =   0; 

    for($i = 0; $i < $total; $i++)
    {        
        $temp                   =   substr($angka,$i,2);
        if($max_new > $temp)
        {
            $max_new            =   $max_new;
        }
        else
        {
            $max_new            =   $temp;
        }
    }
 
    return $max_new . "<br>";

}


// TEST CASES
echo pasangan_terbesar(641573); // 73
echo pasangan_terbesar(12783456); // 83
echo pasangan_terbesar(910233); // 91
echo pasangan_terbesar(71856421); // 85
echo pasangan_terbesar(79918293); // 99

?>