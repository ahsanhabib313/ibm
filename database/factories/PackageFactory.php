<?php

namespace Database\Factories;

use App\Models\Package;
use Illuminate\Database\Eloquent\Factories\Factory;

class PackageFactory extends Factory
{
    /**
     * Define the model's default state.
     * 
     *
     * @return array
     */

    protected $model = Package::class;

    public function definition()
    {
        return [
            'title'            => $this->faker->title,
            'group'            => $this->faker->group,
            'number_of_person' => $this->faker->number_of_person,
            'price'            => $this->faker->price,
            'start_date'       => $this->faker->start_date,
            'end_date'         => $this->faker->end_date,
            'description'      => $this->faker->description,
        ];
    }
}
