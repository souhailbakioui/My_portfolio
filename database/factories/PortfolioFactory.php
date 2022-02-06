<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\portfolio;

class PortfolioFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Portfolio::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'projectname' => $this->faker->regexify('[A-Za-z0-9]{400}'),
            'projectpic' => $this->faker->regexify('[A-Za-z0-9]{400}'),
            'projectlink' => $this->faker->regexify('[A-Za-z0-9]{400}'),
        ];
    }
}
