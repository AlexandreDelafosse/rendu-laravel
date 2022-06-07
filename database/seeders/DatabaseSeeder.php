<?php

namespace Database\Seeders;



use App\Models\User;
use App\Models\Post;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $categories = Category::factory(10)->create();

        User::factory(10)->create()->each(function ($user) use($categories) {
            Post::factory(rand(1, 3))->create([
                'user_id' => $user->id,
                'category_id' => ($categories->random(1)->first())->id
            ]);
        });

        Product::factory(100)->create();



        // $this->call(CategoryTableSeeder::class);
    }
}