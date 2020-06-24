<?php
function tukar_besar_kecil($string)
{
    
    $string_replace         =   $string;    
    $total_string           =   strlen($string_replace);

    // str_replace("Hello", "hello", $string_replace);

    for($i = 0; $i < $total_string; $i++)
    {
        $string_cek         =   substr($string_replace,$i,1);

        //$string_cek         =   substr($string,0,1);

        if(ctype_upper($string_cek) == true)
        {
            $string_cek_baru        =   strtolower($string_cek);
        }
        else
        {
            $string_cek_baru        =   strtoupper($string_cek);
        }
        str_replace($string_cek,$string_cek_baru,$string_replace);

        echo $string_cek_baru;

    }

    echo "<br>";

}

// TEST CASES
echo tukar_besar_kecil('Hello World'); // "hELLO wORLD"
echo tukar_besar_kecil('I aM aLAY'); // "i Am Alay"
echo tukar_besar_kecil('My Name is Bond!!'); // "mY nAME IS bOND!!"
echo tukar_besar_kecil('IT sHOULD bE me'); // "it Should Be ME"
echo tukar_besar_kecil('001-A-3-5TrdYW'); // "001-a-3-5tRDyw"

?>