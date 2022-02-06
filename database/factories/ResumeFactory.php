<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Resume;

class ResumeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Resume::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'category' => $this->faker->regexify('[A-Za-z0-9]{400}'),
            'title' => $this->faker->sentence(4),
            'year' => $this->faker->regexify('[A-Za-z0-9]{400}'),
            'ogname' => $this->faker->regexify('[A-Za-z0-9]{400}'),
            'workdesc' => $this->faker->regexify('[A-Za-z0-9]{400}'),
            'published_at' => $this->faker->dateTime(),
        ];
    }
}
