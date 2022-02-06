<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\aboutus_setup;

class AboutusSetupFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = AboutusSetup::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'shortdesc' => $this->faker->regexify('[A-Za-z0-9]{400}'),
            'heading' => $this->faker->regexify('[A-Za-z0-9]{400}'),
            'subheading' => $this->faker->regexify('[A-Za-z0-9]{400}'),
            'longdesc' => $this->faker->regexify('[A-Za-z0-9]{400}'),
            'website' => $this->faker->regexify('[A-Za-z0-9]{400}'),
            'dob' => $this->faker->regexify('[A-Za-z0-9]{400}'),
            'published_at' => $this->faker->dateTime(),
        ];
    }
}
