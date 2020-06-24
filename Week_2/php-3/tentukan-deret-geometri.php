<?php
function tentukan_deret_geometri($arr) 
{
    $total_array            =   count($arr);

    $range                  =   $arr[1] / $arr[0];   

    for($i = 0; $i < $total_array; $i++)
    {
        if(array_key_exists($i+1, $arr) == false)
        {
            break;
        }
        else
        {
            if($arr[$i+1] / $arr[$i] == $range)
            {
                $hasil  =   "true";
            }
            
            else
            {
                $hasil  =   "false";
            break;
            }
        }
    }

    return $hasil . "<br>";
    
}
//TEST CASES
echo tentukan_deret_geometri([1, 3, 9, 27, 81]); // true
echo tentukan_deret_geometri([2, 4, 8, 16, 32]); // true
echo tentukan_deret_geometri([2, 4, 6, 8]); // false
echo tentukan_deret_geometri([2, 6, 18, 54]); // true
echo tentukan_deret_geometri([1, 2, 3, 4, 7, 9]); //false
?>