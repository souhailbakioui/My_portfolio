<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Basic_setup;

class BasicSetupFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = BasicSetup::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(4),
            'description' => $this->faker->text,
            'keyword' => $this->faker->regexify('[A-Za-z0-9]{400}'),
            'icon' => $this->faker->regexify('[A-Za-z0-9]{400}'),
        ];
    }
}
