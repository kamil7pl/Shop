<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class DeleteController extends Controller
{
    public function show()
    {
        return view('delete')
        ->with('users', User::get());
    }
}
