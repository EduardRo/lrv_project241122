<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Customer;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Customer>
 */
class CustomerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $type=$this->faker->randomElement(['I','B']);
        $name = $type == 'I' ? $this->fake->name():$this->faker->company();

        return [
            'name'=>$name,
            'email'=>$email,
            
        ];
    }
}
