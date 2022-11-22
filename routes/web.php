<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyController;
use App\Http\Controllers\GenreFilmController;
use App\Http\Controllers\TahunRilisController;
use App\Http\Controllers\CastingController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\FrontController;

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

Route::get('/testmodel', function() {
    $query = Post :: all();
    return $query;
    });
        

// Route::get('/about', function() {
//     return view('about');
//     });

Route::get('/about', 'MyController@showAbout');
        


        
Auth::routes();

// route admin
Route::group(['prefix' => 'admin',
    'middleware' => ['auth', 'isAdmin']], function () {
    Route::get('/', function () {
        return view('admin.index');
    });

    Route::resource('genre', GenreFilmController::class);
    // Route::resource('durasi_film', DurasiFilmController::class);
    Route::resource('movie', MovieController::class);
    // Route::resource('reviewer', ReviewerController::class);
    Route::resource('tahun_rilis', TahunRilisController::class);
    Route::resource('casting', CastingController::class);

});


// Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'isAdmin']], function () {
//     Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//     Route::get('/', function () {
//         return view('admin.index');
        
//     });
    
//     Route::resource('genre', GenreFilmController::class);
// });


 Route::group(['middleware' => ['auth'],'prefix' => 'client-area'], function () {
     Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
 });

 Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'isAdmin']], function () {
     Route::get('profile', function () {
         return view('profile');
     });
     
 });

 Route::get('/errors', function () {
     return view(403);
 });

 Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
 Route::get('/test-admin', function(){
     return view('layouts.admin');
 });
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::get('/test-admin', function(){
//     return view('layouts.admin');
// });

Route::get('/', [FrontController::class, 'index'])->name('front');
Route::get('/about', [FrontController::class, 'about']);
Route::get('/profile', [FrontController::class, 'profile']);