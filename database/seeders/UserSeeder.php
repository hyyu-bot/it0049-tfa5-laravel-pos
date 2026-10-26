<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'username' => 'haydenyu',
            'full_name' => 'Hayden Bert Y. Yu',
            'email' => 'haydenyu@student.edu',
        ]);
    }
}
