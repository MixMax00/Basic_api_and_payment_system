<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Unit;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Unit>
 */
class UnitFactory extends Factory
{


    protected $model = Unit::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "piece" => $this->faker->text(5),
            "item" => $this->faker->text(10),
        ];
    }
}
