<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\userinfo;

class UserinfoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Userinfo::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'userq' => $this->faker->regexify('[A-Za-z0-9]{400}'),
            'userv' => $this->faker->regexify('[A-Za-z0-9]{400}'),
        ];
    }
}
