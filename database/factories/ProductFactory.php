<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title_product' => $this->faker->name,
            'description' => $this->faker->paragraph,
            'src' => 'Berserkproduct.jpg',
            'stock' => rand(0, 500),
            'prix' => rand(0, 100),
            'category_id' => DB::table('categories')->get('id')->random(1)->first()->id,
        ];
    }
}