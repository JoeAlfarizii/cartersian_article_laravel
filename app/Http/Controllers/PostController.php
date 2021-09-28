<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index(){
        return view('blog', [
            "title" => "All Post",
            //"post" => Post::all()
            "post" => Post::with(['author','category'])->latest()->get()
        ]);
    }

    //route model binding pada model post, sehingga tidap perlu repot2 panggil method find()
    public function findPost(Post $post){
        return view('article', [
            "title" => "Blog",
            "post" => $post
        ]);
    }
}
