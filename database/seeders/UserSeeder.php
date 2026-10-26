<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        $users = [
            ['username' => 'admin', 'full_name' => 'System Administrator'],
            ['username' => 'manager', 'full_name' => 'Store Manager'],
            ['username' => 'cashier1', 'full_name' => 'Main Cashier'],
            ['username' => 'cashier2', 'full_name' => 'Assistant Cashier'],
            ['username' => 'inventory', 'full_name' => 'Inventory Clerk'],
            ['username' => 'salesrep', 'full_name' => 'Sales Representative'],
            ['username' => 'accountant', 'full_name' => 'Company Accountant'],
        ];

        foreach ($users as $user) {
            User::create($user);
        }
    }
}
