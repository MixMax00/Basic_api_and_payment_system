<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use App\Models\Post;
use App\Models\Comment;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comment>
 */
class CommentFactory extends Factory
{

    protected $model = Comment::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $userId = User::pluck('id')->toArray();
        $postIds = Post::pluck('id')->toArray();
        return [
             "comment" => $this->faker->sentence(10),
             "post_id" =>  $postIds[array_rand($postIds)],
             "user_id" =>  $userId[array_rand($userId)],

        ];
    }
}
