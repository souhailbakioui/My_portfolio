<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\admin_users;

class AdminUsersFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = AdminUsers::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'username' => $this->faker->userName,
            'user_id' => $this->faker->regexify('[A-Za-z0-9]{400}'),
            'user_pass' => $this->faker->regexify('[A-Za-z0-9]{400}'),
            'user_access' => $this->faker->word,
        ];
    }
}
