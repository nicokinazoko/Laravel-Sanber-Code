<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/hello',function()
// {
//     return 'Hello World';
// });

// Route::get('/belajar',function()
// {
//     echo '<p>Hello World</p>';
//     echo "<p>Sedang Belajar Laravel</p>";
// });

// Route::get('/mahasiswa/{nama}', function($nama)
// {
//     return "Tampilkan data mahasiswa bernama $nama";
// });

// Route::get('/stokbarang/{jenis}/{merk}',
//             function ($a,$b)
//             {
//                 echo "Sisa Stok untuk $a $b";
//             });
// Route::get('/stokbarang/{jenis?}/{merk?}',
//             function ($a = 'smartphone', $b = 'samsung')
//             {
//                 return "Cek Sisa Stok untuk $a $b";
//             });

// Route::get('/user/{id}', function($id)
//         {
//             return "Tampilkan user dengan id = $id";
//         });

// Route::get('/hubungi-kami',function()
// {
//     return "<h1>Hubungi Kami</h1>";
// });

// Route::redirect('/contact-us', '/hubungi-kami');

// Route::prefix('/admin')->group(function()
// {
//     Route::get('/mahasiswa',function()
//     {
//         echo "<h1>Daftar Mahasiswa</h1>";
//     });

//     Route::get('/dosen',function()
//     {
//         echo "<h1>Daftar Dosen</h1>";
//     });

//     Route::get('/karyawan',function()
//     {
//         echo "<h1>Daftar Karyawan</h1>";
//     });
// });

// Route::fallback(function ()
// {
//     return "Maaf, Alamat tidak ditemukan";
// });

// Route::get('/helloworld',function()
// {
//     $hello      =   ["Hello World",2=>['Hello Jakarta','Hello Medan']];
//     dd($hello);

//     return $hello;
// });

// Route::get('/mahasiswa',function()
// {
//     return view('mahasiswa');
// });

Route::get('/index',function()
{
    #return view('view_form/index',["nama" => "Nico"]);
    #return view('view_form/index')->with('nama','Nico');
    return view('view_form/index');
});

Route::get('/form',function()
{
    return view('view_form/form');
});

Route::get('/welcome',function()
{
    return view('view_form/welcome');
});

Route::get('/','ControllerForm@index');
#Route::get('/','ControllerForm@tampil');
Route::post('/proses-form','ControllerForm@prosesForm');
