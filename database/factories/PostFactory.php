<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

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
            'body' => $this->faker->sentence(20),
        ];
    }
    //comand php artisan tinker > generate fake data
    /* App\Models\Post::factory()->times(200)->create(['user_id'=>1]);  */
}
