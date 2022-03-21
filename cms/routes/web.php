<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\PageController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\profil\HomeController as BerandaController;
use App\Http\Controllers\profil\ProductsController as ProductsController;
use App\Http\Controllers\profil\NewsController as NewsController;
use App\Http\Controllers\profil\ProgramController as ProgramController;
use App\Http\Controllers\profil\AboutusController as AboutusController;
use App\Http\Controllers\beranda\HomeController as HalamUtamaController;

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
//Praktikum 1
// Route::get('/', function () {
//     echo "Selamat Datang";
// });

// Route::get('/about', function () {
//     echo "Nama : Ferdiansyah Wardana Putra <br/>";
//     echo "NIM : 2041720060  <br/>";
//     echo "Kelas : TI 2H <br/>";
// });

// Route::get('/articles/{id}', function ($id) {
//     echo "Ini adalah halaman Artikel dengan ID ". $id ;
// });

//Praktikum 2 - Bagian 1
// Route::get('/', [PageController::class, 'index']);

// Route::get('/about', [PageController::class, 'about']);

// Route::get('/articles/{id}', [PageController::class, 'articles']);

//Praktikum 2 - Bagian 2
// Route::get('/', [HomeController::class, 'index']);

// Route::get('/about', [AboutController::class, 'about']);

// Route::get('/articles/{id}', [ArticleController::class, 'articles']);

// //Praktikum 3
// //home
// Route::get('/',[BerandaController::class, 'index']);
// //Product
// Route::prefix('/products')->group(function(){
//     Route::get('/',[ProductsController::class, 'index']);  
// });
// //News
// Route::get('/news',[NewsController::class, 'index']);
// //Program
// Route::get('/program/{id}',[ProgramController::class, 'index']);
// //Aboutus
// Route::get('/about',[AboutusController::class, 'index']);

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// //Pertemuan 3
// Route::get('/', function(){
//     return view('index');
// });
// Route::get('/contact', function(){
//     return view('contact');
// });
// Route::get('/about', function(){
//     return view('about');
// });

//Pertemuan 4 
// Route::get('/', [App\Http\Controllers\post\HomeController::class, 'index'])->name('home');
// Route::get('/home', function(){
//     return view('home');
// });

//Pertemuan 6
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/', [App\Http\Controllers\post\HomeController::class, 'index']);
Route::get('/contact', function(){
    return view('contact');
});
Route::get('/about', function(){
    return view('about');
});

