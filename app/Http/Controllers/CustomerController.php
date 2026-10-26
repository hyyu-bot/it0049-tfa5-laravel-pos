<?php

namespace App\Http\Controllers;

class CustomerController extends Controller
{
    public function index()
    {
        $customers = [
            ['id' => 1, 'full_name' => 'Juan Dela Cruz', 'email' => 'juan@email.com', 'phone' => '09123456789'],
            ['id' => 2, 'full_name' => 'Maria Santos', 'email' => 'maria@email.com', 'phone' => '09987654321'],
            ['id' => 3, 'full_name' => 'Pedro Reyes', 'email' => 'pedro@email.com', 'phone' => '09112233445'],
            ['id' => 4, 'full_name' => 'Ana Lim', 'email' => 'ana@email.com', 'phone' => '09776655443'],
            ['id' => 5, 'full_name' => 'Jose Garcia', 'email' => 'jose@email.com', 'phone' => '09554433221'],
            ['id' => 6, 'full_name' => 'Luzviminda Torres', 'email' => 'luz@email.com', 'phone' => '09332211445'],
            ['id' => 7, 'full_name' => 'Ricardo Mendoza', 'email' => 'rick@email.com', 'phone' => '09445566778'],
        ];

        return view('customers.index', compact('customers'));
    }
}
