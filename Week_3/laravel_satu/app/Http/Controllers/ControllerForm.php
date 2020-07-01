<?php

namespace App\Http\Controllers;

use Facade\Ignition\DumpRecorder\Dump;
use Illuminate\Http\Request;

class ControllerForm extends Controller
{
    public function index()
    {
        return view('view_form/index');
    }

    // public function tampil()
    // {
    //     return view('view_form/index');
    // }

    public function prosesForm(Request $request)
    {
        // echo $request->first_name;              echo "<br>";
        // echo $request->last_name;               echo "<br>";
        // echo $request->gender;                  echo "<br>";
        // echo $request->nationality;             echo "<br>";
        // echo $request->nationality_indo;        echo "<br>";
        // echo $request->bio;                     echo "<br>";

        return view('view_form/welcome',
        [
            "first_name"        =>  $request->first_name,
            "last_name"         =>  $request->last_name
        ]);
        #return view('view_form/index',["nama" => "Nico"]);
    }
    
}
