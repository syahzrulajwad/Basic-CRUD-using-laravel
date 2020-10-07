<?php

use App\Http\Controllers\PostsController;
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
//     return view('welcome');

//     // can make style to text and view some text*
//     // return('<h1>Hello World</h1>');
    
// });

// dynamic route wil display id (database) at selected page
// Route::get('/users/{id}/{name}', function ($id,$name) {
//     return 'This is id '.$id.' User name is '.$name;    
// });

// Route::get('/about', function () {
//     return view('pages.about');    
// });

Route::get('/','PagesController@index');
Route::get('/about','PagesController@about');
Route::get('/services','PagesController@services');

Route::resource('posts','PostsController');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

