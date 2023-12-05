<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all(); // Fetch all users from the database
        $id = 0;

        return view('user', compact('users','id'));
    }
}
