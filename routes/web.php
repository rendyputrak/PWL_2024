<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\PhotoController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Routing Basic

// Route::get('/hello', function () {
//     return 'Hello World';
//     });

// Route::get('/world', function () {
//     return 'World';
//     });

// Route::get('/', function () {
//     return 'Selamat Datang';
//     });

// Route::get('/about', function ($nim = '2241720124', 
//                                 $name = 'Rendy Putra Kusuma') {
//     return 'Nama saya adalah ' . $name . 
//     ' dan NIM saya adalah ' . $nim;
// });

// Route::get('/about/{name}/{nim}', function ($name, $nim) {
//     return 'Nama saya adalah ' . $name . ' dan NIM saya adalah ' . $nim;
// });

//Routing menggunakan Parameter

// Route::get('/user/{name}', function ($name){
//     return 'Nama saya adalah ' . $name;
// });

// Route::get('/posts/{post}/comments/{comment}', 
//             function ($postId, $commentId) { 
//     return 'Pos ke-' . $postId." Komentar ke-: " . $commentId; 
// }); 

// Route::get('/articles/{id}', function ($id){
//     return 'Halaman Artikel dengan ID ' . $id;
// });

//Routing menggunakan Parameter Opsional

// Route::get('/user/{name?}', function ($name='John'){
//     return 'Nama saya ' . $name;
// });

//Routing Controller

Route::get('/hello', [WelcomeController::class,'hello']);

//Routing Single Action Controller

Route::get('/', [HomeController::class,'index']);
Route::get('/about', [AboutController::class,'about']);
Route::get('/articles/{id?}', [ArticleController::class,'articles']);

//Resource Controller
Route::resource('photos', PhotoController::class)->only(['index', 'show']);
Route::resource('photos', PhotoController::class)->except(['create', 'store', 'update', 'destroy']);

//Route View
// Route::get('/greeting', function () {  	
//     return view('blog.hello', ['name' => 'Rendy']); 
// }); 

//Route View dari Controller
Route::get('/greeting', [WelcomeController::class, 'greeting']); 








