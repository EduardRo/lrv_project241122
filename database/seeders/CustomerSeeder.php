<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Customer;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Customer::factory()
        ->count(2)
        ->hasInvoice(3)
        ->create();

        Customer::factory()
        ->count(5)
        ->hasInvoice(1)
        ->create();

        Customer::factory()
        ->count(7)
        ->hasInvoice(0)
        ->create();

    }
}
