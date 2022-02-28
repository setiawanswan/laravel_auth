<?php

use App\Models\Post;
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
// });

Route::get('/', function () {
    return view('home', [
        "title" => "Home",
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Setiawan Setiawan",
        "email" => "setiawan@gmail.com",
        "image" => "setiawan.jpg"
    ]);
});

Route::get('/blog', function () {
    return view('blog', [
        "title" => "Blog",
        "posts" => Post::all()
    ]);
});

// halaman single post
Route::get('posts/{slug}', function ($slug) {
    return view('post', [
        "title" => "Single post",
        "post" => Post::find($slug)
    ]);
});