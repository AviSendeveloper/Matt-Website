<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\data;
use Illuminate\Support\Str;

class DataFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = data::class;

    public function definition()
    {
        return [
            'product_name' => $this->faker->title,
            'details' => $this->faker->text,
        ];
    }
}
