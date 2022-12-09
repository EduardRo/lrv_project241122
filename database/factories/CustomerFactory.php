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
        $name = $type == 'I' ? $this->faker->name():$this->faker->company();

        return [
            'name'=>$name,
            'type'=>$type,
            
            'city'=>$this->faker->city(),
            'department'=>$this->faker->state(),
            'address'=>$this->faker->streetAddress(),
            'email'=>$this->faker->email(),
            'phone'=>$this->faker->phoneNumber(),


            
        ];
    }
}
