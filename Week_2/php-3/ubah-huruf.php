<?php
function ubah_huruf($string)
{
    $total_huruf                    =   strlen($string);
    $string_temp                    =   $string;

    for($i = 0; $i < $total_huruf; $i++)
    {
        $temp                   =   substr($string_temp,$i,1);
        //++$temp;

        //str_replace($temp,$temp_baru,$string_temp);

        echo ++$temp;
    }

    echo "<br>";

}

// TEST CASES
echo ubah_huruf('wow'); // xpx
echo ubah_huruf('developer'); // efwfmpqfs
echo ubah_huruf('laravel'); // mbsbwfm
echo ubah_huruf('keren'); // lfsfo
echo ubah_huruf('semangat'); // tfnbohbu

?>