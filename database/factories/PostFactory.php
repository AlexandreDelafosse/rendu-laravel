<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Post;
use Illuminate\Support\Facades\DB;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{

        /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Post::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(rand(5, 10)),
            'content' => $this->faker->sentences(5, true),
            'image' => 'Berserk.jpg',
            'user_id' => DB::table('users')->get('id')->random(1)->first()->id,
            'category_id' => DB::table('categories')->get('id')->random(1)->first()->id,
        ];
    }
}
