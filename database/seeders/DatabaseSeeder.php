<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         User::factory(3)->create();

         Category::create([
             "name" => "Web Programming",
             "slug" => "web_programming"
         ]);

         Category::create([
             "name" => "personal",
             "slug" => "personal"
         ]);

        Post::factory(20)->create();
    }
}
