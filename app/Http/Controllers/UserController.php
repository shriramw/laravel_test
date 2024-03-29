<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function list(Request $request)
    {
        $users = User::where('name', 'Test')->get();
        return view('user.list', ['users' => $users]);
    } 
}
