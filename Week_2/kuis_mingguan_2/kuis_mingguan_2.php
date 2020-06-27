<?php

    //Menghitung panjang String
    $string = 'Nico';
    //Jawaban
    echo strlen($string);

    echo "<br>";
    //Diketahui sebuah array $numbers = [75, 80, 60]; 
    //Manakah cara yang tepat jika ingin menambahkan angka 100 ke 
    //dalam array $numbers di posisi indeks paling belakang 
    //(tanpa menggantikan isi dari array yang sudah ada)?
    $numbers = [75, 80, 60]; 

    //Jawaban
    $numbers[] = 100;

    //print_r($numbers);

    echo "<br>";

    //Perhatikanlah ketiga variabel di bawah ini, 
    //manakah di antara pilihan jawaban yang bernilai true (benar) ?

    $challenges     =   ["dom","php","oop","SQL"];
    $grade          =   [90,85,95,65,70];
    $namaSiswa      =   "Abduh";

    //$hasil = 
    $hasil1         =   count($challenges) > 4;
    $hasil2         =   $challenges[1] == "dom" && $grade[1] = 85;
    $hasil3         =   $namaSiswa[2] == "b" || $namaSiswa[3] == "d";
    $hasil4         =   strlen($namaSiswa) <= 5 && $namaSiswa[strlen($namaSiswa)-1] == "h";
    $hasil5         =   count($grade) == 4 || $namaSiswa[3] == "d";
    
    var_dump($hasil4);
    
    //Jawaban adalah $hasil4
    
    echo "<br>";

    //Membuat array asosiatif
    //Jika kita ingin membuat array asosiatif yang memuat data seorang murid yang memiliki nama 
    //"Adrian", alamat "Bandung" , gender "Laki-laki" , manakah cara yang tepat di bawah ini?
    $murid = ["nama" => "Adrian", "alamat" => "Bandung", "gender" => "Laki-laki"];

    print_r($murid);

    echo "<br>";
    function hitung($string_data)
    {
        $parts = explode(':', $string_data);

        // if(array_key_exists(1, $parts) == false)
        // {
            
        // }
        if(count($parts) == 1)
        {
            eval( '$result = (' . $string_data . ');' );
            echo $result . "<br>";
        } 

        else
        {
            $result     =   $parts[0] / $parts[1];
            echo $result . "<br>";
        }
    }

    
    echo hitung("102*2"); //204
    echo hitung("2+3"); //5
    echo hitung("100:25"); //4
    echo hitung("10%2"); //0
    echo hitung("99-2"); //97


/**
 * CONTOH:
 * perolehan_medali(
 *  array(
 *    array('Indonesia', 'emas'),
 *    array('India', 'perak'),
 *    array('Korea Selatan', 'emas' ),
 *    array('India', 'perak'),
 *    array('India', 'emas'),
 *    array('Indonesia', 'perak'),
 *    array('Indonesia', 'emas'),
 *  )
 * );
 *
 * output:
 * Array(
 *    Array (
 *      [negara] => 'Indonesia'
 *      [emas] => 2
 *      [perak] => 1
 *      [perunggu] => 0
 *    ),
 *    Array (
 *      [negara] => 'India'
 *      [emas] => 1
 *      [perak] => 2
 *      [perunggu] => 0
 *    ),
 *    Array (
 *      [negara] => 'Korea Selatan'
 *      [emas] => 1
 *      [perak] => 0
 *      [perunggu] => 0
 *    )
 * )
 *
 *
 */
 
    function perolehan_medali($arr)
    {
        $emas_indo      =   0;
        $emas_india     =   0;
        $emas_korsel    =   0;

        $perak_indo      =   0;
        $perak_india     =   0;
        $perak_korsel    =   0;

        $perunggu_indo      =   0;
        $perunggu_india     =   0;
        $perunggu_korsel    =   0;
        
        if(count($arr) == 0)
        {
            echo "no data" . "<br>";
        }

        else
        {
            foreach($arr as $arr_new)
            {
                if($arr_new[0] == 'Indonesia')
                {
                    $negara1 = 'Indonesia';
                    if($arr_new[1] == 'emas')
                    {
                        $emas_indo += 1;
                    }
                    else
                    if($arr_new[1] == 'perak')
                    {
                        $perak_indo += 1;
                    }
                    if($arr_new[1] == 'perunggu')
                    {
                        $perunggu_indo += 1;
                    }
                }
                else
                if($arr_new[0] == 'India')
                {
                    $negara2 = 'India';
                    if($arr_new[1] == 'emas')
                    {
                        $emas_india += 1;
                    }
                    else
                    if($arr_new[1] == 'perak')
                    {
                        $perak_india += 1;
                    }
                    if($arr_new[1] == 'perunggu')
                    {
                        $perunggu_india += 1;
                    }
                }
                else
                if($arr_new[0] == 'Korea Selatan')
                {
                    $negara3 = 'Korea Selatan';
                    if($arr_new[1] == 'emas')
                    {
                        $emas_korsel += 1;
                    }
                    else
                    if($arr_new[1] == 'perak')
                    {
                        $perak_korsel += 1;
                    }
                    if($arr_new[1] == 'perunggu')
                    {
                        $perunggu_korsel += 1;
                    }
                }        
            }

            $arr_medali[]       =
            [
                [
                    "negara"            =>  $negara1,
                    "emas"              =>  $emas_indo,
                    "perak"             =>  $perak_indo,
                    "perunggu"          =>  $perunggu_indo,
                ],
                [
                    "negara"            =>  $negara2,
                    "emas"              =>  $emas_india,
                    "perak"             =>  $perak_india,
                    "perunggu"          =>  $perunggu_korsel,
                ],
                [
                    "negara"            =>  $negara3,
                    "emas"              =>  $emas_korsel,
                    "perak"             =>  $perak_korsel,
                    "perunggu"          =>  $perunggu_korsel,
                ]
            ];
            print_r ($arr_medali);
        }
    }
   
   
   // TEST CASES
   print_r (perolehan_medali(
     array(
      array('Indonesia', 'emas'),
      array('India', 'perak'),
      array('Korea Selatan', 'emas' ),
      array('India', 'perak'),
      array('India', 'emas'),
      array('Indonesia', 'perak'),
      array('Indonesia', 'emas')
     )
    ));
  /**
   * output:
   * Array(
   *    Array (
   *      [negara] => 'Indonesia'
   *      [emas] => 2
   *      [perak] => 1
   *      [perunggu] => 0
   *    ),
   *    Array (
   *      [negara] => 'India'
   *      [emas] => 1
   *      [perak] => 2
   *      [perunggu] => 0
   *    ),
   *    Array (
   *      [negara] => 'Korea Selatan'
   *      [emas] => 1
   *      [perak] => 0
   *      [perunggu] => 0
   *    )
   * )
   */
   
   print_r(perolehan_medali([])); // no data

?>