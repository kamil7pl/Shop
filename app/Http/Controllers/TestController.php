<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class TestController extends Controller
{
    public function show()
    {
        return view('test')
        ->with('users', User::get());
    }
}