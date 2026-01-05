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

// Route::get('/', function () {
//     return view('index');
// });
Route::get('/', [App\Http\Controllers\InspireController::class, 'index']);
Route::get('/about-us',[App\Http\Controllers\InspireController::class, 'about'])->name('about-us');
Route::namespace('App\Http\Controllers')->group(function () {
    Route::get('/blog', 'BlogController@index');
    Route::get('/blog/posts/{post}', 'BlogController@showPost')->name('posts.view');
});

// frontend pages 
// Route::get('/', 'HomeController@index');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

