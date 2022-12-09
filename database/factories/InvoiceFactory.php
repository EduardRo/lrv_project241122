<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Customer;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Invoice>
 */
class InvoiceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $status = $this->faker->randomElement(['B', 'I']);
        return [
            'customer_id'=>Customer::factory(),
            'serie'=>$this->faker->numberBetween(1000, 10000),
            'no'=>$this->faker->numberBetween(1, 100),
            'status'=>$status,
            'billed_date'=>$this->faker->dateTimeThisYear(),
            'paid_date'=>$status=='P'?$this->faker->dateTimeThisDecade(): NULL,



            
        ];
    }
}
