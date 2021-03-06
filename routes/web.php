<?php

use App\Models\Post;
use App\Models\Category;
use App\Models\User;
use App\Models\PostModel;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;


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
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Muhammad Hasan Johan Alfarizi",
        "email" => "joe.alfarizii@gmail.com",
        "img" => "asset/img1.jpg"
    ]);
});

Route::get('/blog', [PostController::class, "index"]);
Route::get('/blog/{post:slug}', [PostController::class, "findPost"]);
Route::get('/categories', function(Category $category){
    return view("categories", [
        "title" => "Categories",
        "categories" => Category::all()
    ]);
});
Route::get('/categories/{category:slug}', function(Category $category){
    return view("blog", [
        "title" => "Post By Category : $category->name",
        "post" => $category->posts->load('category', 'author'),
    ]);
});
Route::get('/authors/{author:username}', function(User $author){
    return view('blog', [
        "title" => "Post By Author : $author->name",
        //"post" => Post::all()
        "post" => $author->post->load('category', 'author')
    ]);
});
