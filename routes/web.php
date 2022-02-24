<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\PageController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ArticleController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Praktikum 1
// Route::get('/', function () {
//     return "Hi! Selamat Datang di Website Laravel";
// });

// Route::get('/about', function () {
//     return "
//     NIM     : 2041720098 <br>
//     Nama    : Daffa Aqila Rahmatullah <br>
//     Kelas   : TI - 2G";
// });

// Route::get('/articles/{id}', function ($id) {
//     return "Ini adalah halaman Artikel dengan id " . $id;
// });

// Praktikum 2
// nomer 3
// Route::get('/', [PageController::class, 'index']);
// Route::get('/about', [PageController::class, 'about']);
// Route::get('/articles/{id}', [PageController::class, 'articles']);

//nomer 5
Route::get('/', [HomeController::class, 'index']);
Route::get('/about', [AboutController::class, 'about']);
Route::get('/articles/{id}', [ArticleController::class, 'articles']);

// prak 3

// Route::get('/',[prak3Controller::class,'index']);


Route::get('/', function () {
    return "Welcome to Home Company";
});


Route::prefix('/produk') -> group(function(){
    Route::get("", function(){
        echo "Menampilkan isi List Category, isinya sebagai berikut<br><br>";
        
        echo "marbel-and-friends-kids-games<br> "; 
        echo "riri-story-books<br>";
        echo "kolak-kids-songs<br>";
        echo "marbel-edu-games";
    });
});

Route::prefix('/news') -> group(function(){

    Route::get("", function(){
        echo "Menampilkan list news, berikut ini isi list news<br><br>";

        echo "educa-studio-berbagi-untuk-warga-sekitar-terdampak-covid-19<br>";
        echo "rpp-paud-tema-air-udara-api-subtema-ciri-dan-manfaat-udara";
    });
});

Route::prefix('/program') -> group(function(){
    Route::get("", function(){
        echo "Menampilkan isi List program, isinya sebagai berikut<br><br>";
        
        echo "karir<br> "; 
        echo "magang<br>";
        echo "Kunjungan kerja<br>";
    });
     Route::get("/karir" , function(){
            echo "Menampilkan List karir";
            });
            Route::get("/magang" , function(){
                echo "Menampilkan List magang";
            });
            Route::get("/kunjungan-industri" , function(){
                echo "Menampilkan List kunjungan industri";
            });
});

Route::get("/about-us" , function(){
        return "
    NIM     : 2041720098 <br>
    Nama    : Daffa Aqila Rahmatullah <br>
    Kelas   : TI - 2G";
});