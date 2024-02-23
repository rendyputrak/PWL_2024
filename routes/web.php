<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\PageController;
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

Route::get('/hello', [WelcomeController::class,'hello']);

Route::get('/world', function () {
    return 'World';
    });

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

Route::get('/user/{name}', function ($name){
    return 'Nama saya adalah ' . $name;
});

Route::get('/posts/{post}/comments/{comment}', 
            function ($postId, $commentId) { 
    return 'Pos ke-' . $postId." Komentar ke-: " . $commentId; 
}); 

// Route::get('/articles/{id}', function ($id){
//     return 'Halaman Artikel dengan ID ' . $id;
// });

Route::get('/user/{name?}', function ($name='John'){
    return 'Nama saya ' . $name;
});

// Route::get('/user/profile', function() {
// //
// })->name('profile'); 

Route::get('/', [PageController::class,'index']);
Route::get('/about', [PageController::class,'about']);
Route::get('/articles/{id?}', [PageController::class,'articles']);


