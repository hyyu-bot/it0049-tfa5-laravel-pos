<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function show()
    {
        $user = User::first();

        return view('profile', compact('user'));
    }
}
