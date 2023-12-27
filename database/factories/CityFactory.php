<?php

namespace Database\Factories;

use App\Models\City;
use Illuminate\Database\Eloquent\Factories\Factory;

class CityFactory extends Factory
{
    protected $model = City::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->city,
            'state_id' => rand(1, 100),
            'state_code' => $this->faker->stateAbbr,
            'country_id' => function () {
                // Puedes ajustar la lógica para obtener un país existente o crear uno nuevo aquí
                return \App\Models\Country::factory()->create()->id;
            },
            'country_code' => $this->faker->countryCode,
            'latitude' => $this->faker->latitude,
            'longitude' => $this->faker->longitude,
            'flag' => 1,
            'wikiDataId' => $this->faker->optional()->text(255),
        ];
    }
}
