<?php

namespace Database\Factories;

use App\Models\humans;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class HumansFactory extends Factory
{
    protected $model = humans::class;

    public function definition(): array
    {

        return [
            'status' => $this->faker->randomElement(['active', 'inactive']),
            'identification' => $this->faker->unique()->word,
            'identification_type' => $this->faker->word,
            'photo' => $this->faker->imageUrl(),
            'name' => $this->faker->name,
            'middle_name' => $this->faker->lastName,
            'first_surname' => $this->faker->lastName,
            'second_surname' => $this->faker->lastName,
            'blood_group_rh' => $this->faker->randomElement(['A+', 'B+', 'AB+', 'O+', 'A-', 'B-', 'AB-', 'O-']),
            'city_birth_id' => rand(1, 100),
            'birthdate' => $this->faker->date,
            'address' => $this->faker->address,
            'email' => $this->faker->unique()->safeEmail,
            'phone' => $this->faker->phoneNumber,
            'gender' => $this->faker->randomElement(['Male', 'Female']),
        ];
    }
}
