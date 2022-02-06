<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\personal_setup;

class PersonalSetupFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = PersonalSetup::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'profilepic' => $this->faker->regexify('[A-Za-z0-9]{400}'),
            'name' => $this->faker->name,
            'twitter' => $this->faker->regexify('[A-Za-z0-9]{400}'),
            'facebook' => $this->faker->regexify('[A-Za-z0-9]{400}'),
            'instagram' => $this->faker->regexify('[A-Za-z0-9]{400}'),
            'skype' => $this->faker->regexify('[A-Za-z0-9]{400}'),
            'linkedin' => $this->faker->regexify('[A-Za-z0-9]{400}'),
            'github' => $this->faker->regexify('[A-Za-z0-9]{400}'),
            'homewallpaper' => $this->faker->regexify('[A-Za-z0-9]{400}'),
            'professions' => $this->faker->regexify('[A-Za-z0-9]{400}'),
            'location' => $this->faker->regexify('[A-Za-z0-9]{400}'),
            'mobile' => $this->faker->regexify('[A-Za-z0-9]{400}'),
            'emailid' => $this->faker->regexify('[A-Za-z0-9]{400}'),
        ];
    }
}
