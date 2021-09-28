<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

// class model ini tidak digunakan, hanya sebagai riwayat belajar saja

class PostModel
{
    // use HasFactory;
    private static $blog_post = [
        [
            "title" => "Postingan Pertama",
            "slug" => "postingan-pertama",
            "author" => "Muhammad Hasan",
            "article" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Mollitia quasi commodi reiciendis ducimus, nisi quia, amet maiores placeat iusto, minima harum porro suscipit cupiditate sint fugiat! Ullam esse recusandae similique maiores officia voluptas repellendus aliquid consequatur eaque? Similique distinctio ex, asperiores velit temporibus saepe minima itaque voluptate, doloremque soluta nihil, praesentium rem cum! Et ex ducimus dolorem quia, facilis alias voluptatibus, consequatur perspiciatis, suscipit eum similique? Ipsa quidem, repellendus minus laborum aliquid accusantium. Itaque ducimus laborum ipsa, perferendis nam nesciunt?"
        ],
        [
            "title" => "Postingan Kedua",
            "slug" => "postingan-kedua",
            "author" => "Salsa Ayu",
            "article" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Mollitia quasi commodi reiciendis ducimus, nisi quia, amet maiores placeat iusto, minima harum porro suscipit cupiditate sint fugiat! Ullam esse recusandae similique maiores officia voluptas repellendus aliquid consequatur eaque? Similique distinctio ex, asperiores velit temporibus saepe minima itaque voluptate, doloremque soluta nihil, praesentium rem cum! Et ex ducimus dolorem quia, facilis alias voluptatibus, consequatur perspiciatis, suscipit eum similique? Ipsa quidem, repellendus minus laborum aliquid accusantium. Itaque ducimus laborum ipsa, perferendis nam nesciunt?"
        ]
    ];

    public static function allPost(){
        return collect(self::$blog_post);
    }

    public static function searchPost($slug){
        $posts = static::allPost();
        // $post = array();
        // foreach($posts as $x){
        //     if($x["slug"] == $slug){
        //         $post = $x;
        //     }
        // }
        return $posts->firstWhere('slug', $slug);
    } 
}
