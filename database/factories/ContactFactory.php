<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\contact;

class ContactFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Contact::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'cname' => $this->faker->regexify('[A-Za-z0-9]{400}'),
            'cemail' => $this->faker->regexify('[A-Za-z0-9]{400}'),
            'csubject' => $this->faker->regexify('[A-Za-z0-9]{400}'),
            'cmessage' => $this->faker->regexify('[A-Za-z0-9]{400}'),
        ];
    }
}
