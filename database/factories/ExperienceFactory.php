<?php

namespace Database\Factories;

use App\Models\Experience;
use Illuminate\Database\Eloquent\Factories\Factory;

class ExperienceFactory extends Factory
{
    protected $model = Experience::class;

    public function definition(): array
    {
        return [
            'company' => $this->faker->company(),
            'position' => $this->faker->jobTitle(),
            'started_at' => $this->faker->dateTimeBetween('-5years', '-1month'),
            'stopped_at' => $this->faker->optional()->dateTimeBetween('-4years', '-1month'),
            'description' => $this->faker->paragraphs(2, true),
        ];
    }
}
