<?php

namespace App\Http\Controllers;

class UserController extends Controller
{
    public function index()
    {
        $users = [
            ['id' => 1, 'username' => 'admin', 'full_name' => 'System Administrator', 'role' => 'Administrator'],
            ['id' => 2, 'username' => 'manager', 'full_name' => 'Store Manager', 'role' => 'Store Manager'],
            ['id' => 3, 'username' => 'cashier1', 'full_name' => 'Main Cashier', 'role' => 'Cashier'],
            ['id' => 4, 'username' => 'cashier2', 'full_name' => 'Assistant Cashier', 'role' => 'Cashier'],
            ['id' => 5, 'username' => 'inventory', 'full_name' => 'Inventory Clerk', 'role' => 'Inventory Staff'],
            ['id' => 6, 'username' => 'salesrep', 'full_name' => 'Sales Representative', 'role' => 'Sales Representative'],
            ['id' => 7, 'username' => 'accountant', 'full_name' => 'Company Accountant', 'role' => 'Accountant'],
        ];

        return view('users.index', compact('users'));
    }
}
