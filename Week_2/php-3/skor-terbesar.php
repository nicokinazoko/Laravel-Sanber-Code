<?php
function skor_terbesar($arr)
{
    $total_data             =    count($arr);

    $laravel                =   [];
    $react                  =   [];
    $react_js               =   [];
    $max_react              =   [];
    $max_laravel            =   [];
    $max_react              =   [];
    $max_react_js           =   [];
    for($i = 0; $i < $total_data; $i++)
    {
        if($arr[$i]["kelas"] == "Laravel")   
        {
            $laravel[]      =   $arr[$i];
        }

        else
        if($arr[$i]["kelas"] == "React Native")   
        {
            $react[]        =   $arr[$i];

        }

        else
        if($arr[$i]["kelas"] == "React JS")   
        {
            $react_js[]     =   $arr[$i];

        }
    }
    
    $max_laravel            =   $laravel[0]['nilai'];
    $laravel_person         =   $laravel[0];

    $max_react              =   $react[0]['nilai'];
    $react_person           =   $react[0];

    
    $max_react_js           =   $react_js[0]['nilai'];   
    $react_js_person        =   $react_js[0];

    for($i = 0; $i < count($laravel); $i++)
    {
        $temp               =   $laravel[$i]['nilai'];
        $temp_person        =   $laravel[$i];
        if($temp > $max_laravel)
        {
            $max_laravel        =   $temp;
            $laravel_person     =   $temp_person;
        }

        else
        {
            $max_laravel        =   $max_laravel;
            $laravel_person     =   $laravel_person;
        }
    }

    for($i = 0; $i < count($react); $i++)
    {
        $temp               =   $react[$i]['nilai'];
        $temp_person        =   $react[$i];
        if($temp > $max_react)
        {
            $max_react        =   $temp;
            $react_person     =   $temp_person;
        }

        else
        {
            $max_react          =   $max_react;
            $react_person     =   $react_person;
        }
    }


    for($i = 0; $i < count($react_js); $i++)
    {
        $temp               =   $react_js[$i]['nilai'];
        $temp_person        =   $react_js[$i];
        if($temp > $max_react)
        {
            $max_react_js       =   $temp;
            $react_js_person    =   $temp_person;
        }

        else
        {
            $max_react_js      =   $max_react_js;
            $react_js_person    =   $react_js_person;
        }
    }


    // $new_array      =   
    // [
    //     "Laravel" => 
    //     [
    //         $laravel_person
    //     ],

    //     "React Native" => 
    //     [
    //         $react_person
    //     ],

    //     "React" => 
    //     [
    //         $react_js_person
    //     ]
    // ];

    $new_array      =   
    [
        "Laravel" => 
        [
            "nama"          =>  $laravel_person['nama'],
            "kelas"         =>  $laravel_person['kelas'],
            "nilai"         =>  $laravel_person['nilai']
        ],

        "React Native" => 
        [
            "nama"          =>  $react_person['nama'],
            "kelas"         =>  $react_person['kelas'],
            "nilai"         =>  $react_person['nilai']
        ],

        "React" => 
        [
            "nama"          =>  $react_js_person['nama'],
            "kelas"         =>  $react_js_person['kelas'],
            "nilai"         =>  $react_js_person['nilai']
        ]
    ];
        
    return $new_array;
        
}

// TEST CASES
$skor = [
  [
    "nama" => "Bobby",
    "kelas" => "Laravel",
    "nilai" => 78
  ],
  [
    "nama" => "Regi",
    "kelas" => "React Native",
    "nilai" => 86
  ],
  [
    "nama" => "Aghnat",
    "kelas" => "Laravel",
    "nilai" => 90
  ],
  [
    "nama" => "Indra",
    "kelas" => "React JS",
    "nilai" => 85
  ],
  [
    "nama" => "Yoga",
    "kelas" => "React Native",
    "nilai" => 77
  ],
];

print_r(skor_terbesar($skor));
/* OUTPUT
  Array (
    [Laravel] => Array
              (
                [nama] => Aghnat
                [kelas] => Laravel
                [nilai] => 90
              )
    [React Native] => Array
                  (
                    [nama] => Regi
                    [kelas] => React Native
                    [nilai] => 86
                  )
    [React JS] => Array
                (
                  [nama] => Indra
                  [kelas] => React JS
                  [nilai] => 85
                )
  )
*/


?>