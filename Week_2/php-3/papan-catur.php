<?php

function papan_catur($angka) 
{

    for ($i=0; $i <$angka ; $i++) 
    {
        $catur = '';
        
        if ($i % 2 == 0) 
        {
            for ($j=0; $j<$angka; $j++) 
            { 
            $catur .= '# &nbsp';
            }
        } 
        
        else 
        { 
            for ($j=0; $j < $angka-1; $j++) 
            { 
            $catur .= "&nbsp #";
            }
        }
    
        echo "$catur <br>";
    }

    echo "<br>";
}



// TEST CASES
echo papan_catur(4);
/*
# # # #
 # # #
# # # #
 # # #
 */

echo papan_catur(8);
/* 
# # # # # # # #
 # # # # # # # 
# # # # # # # #
 # # # # # # # 
# # # # # # # #
 # # # # # # #
# # # # # # # #
 # # # # # # #

 */
echo papan_catur(5) ;
/*
# # # # #
 # # # #
# # # # #
 # # # # 
# # # # #
*/