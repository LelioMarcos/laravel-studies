<?php

namespace Database\Factories;

use App\Models\Comment;
use App\Models\Story;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class CommentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Comment::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'idUser' => function() {
                return User::find(random_int(1, 10));
            },
            'idHist' => function() {
                return Story::find(random_int(1, 10));
            },
            'corpo' => $this->faker->text()
        ];
    }
}
