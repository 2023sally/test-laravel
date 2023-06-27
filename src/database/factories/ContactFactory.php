<?php

namespace Database\Factories;

use App\Models\Contact;
use Illuminate\Database\Eloquent\Factories\Factory;

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
            'last-name' => $this->faker->lastName(),
            'first-name' => $this->faker->firstName(),
            'gender' => $this->faker->randomElement(['男性', '女性']),
            'email' => $this->faker->email(),
            'postcode' => $this->faker->postcode, '-', 3, 0,
            'address' => $this->faker->address(),
            'building_name' => $this->faker->secondaryAddress(),
            'opinion' => $this->faker->Text(120),
        ];
    }
}
