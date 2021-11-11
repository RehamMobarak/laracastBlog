<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
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
        // if you don't REFRESH DB you'll need
            // User::truncate();
            // Post::truncate();
            // Category::truncate();

        Post::factory()->create();

      //  $user = User::factory()->create();

        // $family = Category::create([
        //     "name" => "Family",
        //     "slug" => "family",
        // ]);


        // $personal = Category::create([
        //     "name" => "Personal",
        //     "slug" => "personal",
        // ]);


        // $work = Category::create([
        //     "name" => "Work",
        //     "slug" => "work",
        // ]);

        // Post::create([
        //     "user_id" => $user->id,
        //     "category_id" => $family->id,
        //     "slug" => "my-family-post",
        //     "title" => "My family post",
        //     "excerpt" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit",
        //     "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque quia eius deserunt autem, esse dolorem est nisi fugit earum explicabo temporibus tenetur perferendis quibusdam in hic repudiandae corporis odit. Placeat. Placeat mollitia atque ipsum dolorem provident veniam sint enim? Architecto maiores quam aperiam modi tenetur molestias animi illum necessitatibus optio, voluptate asperiorest."
        // ]);

        // Post::create([
        //     "user_id" => $user->id,
        //     "category_id" => $work->id,
        //     "slug" => "my-work-post",
        //     "title" => "My work post",
        //     "excerpt" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit",
        //     "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque quia eius deserunt autem, esse dolorem est nisi fugit earum explicabo temporibus tenetur perferendis quibusdam in hic repudiandae corporis odit. Placeat. Placeat mollitia atque ipsum dolorem provident veniam sint enim? Architecto maiores quam aperiam modi tenetur molestias animi illum necessitatibus optio, voluptate asperiorest."
        // ]);

        // Post::create([
        //     "user_id" => $user->id,
        //     "category_id" => $personal->id,
        //     "slug" => "my-personal-post",
        //     "title" => "My personal post",
        //     "excerpt" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit",
        //     "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque quia eius deserunt autem, esse dolorem est nisi fugit earum explicabo temporibus tenetur perferendis quibusdam in hic repudiandae corporis odit. Placeat. Placeat mollitia atque ipsum dolorem provident veniam sint enim? Architecto maiores quam aperiam modi tenetur molestias animi illum necessitatibus optio, voluptate asperiorest."
        // ]);
    }
}
