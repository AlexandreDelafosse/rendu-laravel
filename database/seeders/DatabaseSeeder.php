<?php

namespace Database\Seeders;



use App\Models\User;
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

        Category::factory(10)->create();
        User::factory(2)->create();
        Product::factory(100)->create();
        // $this->call(CategoryTableSeeder::class);
    }
}