<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{

    protected $model = Post::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {

        $userIds = User::pluck('id')->toArray();
        $categoriesIds = Category::pluck('id')->toArray();

        return [
            "title"       => $this->faker->sentence(5),
            "description" => $this->faker->text(500),
            "category_id" => $categoriesIds[array_rand($categoriesIds)],
            "user_id" => $userIds[array_rand($userIds)]
        ];
    }
}
