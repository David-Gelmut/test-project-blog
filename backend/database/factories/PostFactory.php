<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title'=>$this->faker->name(),
            'description'=>$this->faker->text(),
            'preview'=>$this->faker->text(50),
            'prev_image'=>$this->faker->image('public/storage/posts',400,400,null,false)
        ];
    }
}
