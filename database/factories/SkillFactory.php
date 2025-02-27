<?php

namespace Database\Factories;

use App\Models\Skill;
use Illuminate\Database\Eloquent\Factories\Factory;

class SkillFactory extends Factory
{
    protected $model = Skill::class;

    public function definition(): array
    {
        return [
            'title' => $this->faker->randomElement([
                'HTML', 'HTML5', 'PHP', 'Laravel', 'TypeScript', 'Javascript'
            ])
        ];
    }
}
