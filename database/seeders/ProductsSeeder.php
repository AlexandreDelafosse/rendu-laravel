<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'title_product' => Str::random(10),
            'description' => Str::random(10),
            'src' => Str::random(10),
            'stock' => Str::random(10),
            'prix' => Str::random(10),
        ]);
    }
}