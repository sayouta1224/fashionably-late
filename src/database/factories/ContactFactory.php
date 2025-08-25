<?php

namespace Database\Factories;

use App\Models\Contact;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class ContactFactory extends Factory
{
    protected $model = Contact::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $gender = $this->faker->numberBetween(1,3);
        $gender_firstName = [1 => 'male', 2 => 'female', 3 => 'other'];


        $prefecture = $this->faker->prefecture();
        $city = $this->faker->city();
        $street = $this->faker->streetAddress();
        $addressWithoutBuilding = "{$prefecture}{$city} {$street}";


        return [
            'category_id' => $this->faker->numberBetween(1,5),
            'first_name' => $this->faker->firstName($gender_firstName[$gender]),
            'last_name' => $this->faker->lastName(),
            'gender' => $gender,
            'email' => $this->faker->safeEmail(),
            'tel' => $this->faker->phoneNumber(),
            'address' => $addressWithoutBuilding,
            'building' => $this->faker->secondaryAddress(),
            'detail' => $this->faker->realText(120)
        ];
    }
}
