<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Service>
 */
class ServiceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title'=>$this->faker->text(5),
            'description'=>$this->faker->realTextBetween(5,25),
            'unit'=>'buc',
            'price'=>$this->faker->randomFloat(2,100,1000),
        ];
    }
}
