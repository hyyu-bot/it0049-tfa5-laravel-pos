<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Customer;

class CustomerSeeder extends Seeder
{
    public function run(): void
    {
        $customers = [
            ['full_name' => 'Juan Dela Cruz', 'email' => 'juan@email.com', 'phone' => '09123456789'],
            ['full_name' => 'Maria Santos', 'email' => 'maria@email.com', 'phone' => '09987654321'],
            ['full_name' => 'Pedro Reyes', 'email' => 'pedro@email.com', 'phone' => '09112233445'],
            ['full_name' => 'Ana Lim', 'email' => 'ana@email.com', 'phone' => '09776655443'],
            ['full_name' => 'Jose Garcia', 'email' => 'jose@email.com', 'phone' => '09554433221'],
            ['full_name' => 'Luzviminda Torres', 'email' => 'luz@email.com', 'phone' => '09332211445'],
            ['full_name' => 'Ricardo Mendoza', 'email' => 'rick@email.com', 'phone' => '09445566778'],
        ];

        foreach ($customers as $customer) {
            Customer::create($customer);
        }
    }
}
