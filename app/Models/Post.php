<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    //protected $fillable = ["judul", "slug", "excerpt", "body"];
    protected $guarded = ["id"];

    public function category(){
        //model post berelasi dengan category 1 on 1 pada foreign key category_id
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function author(){
        return $this->belongsTo(User::class, 'user_id');
    }
}
