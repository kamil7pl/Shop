<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Mail\newOrder;
use App\Models\User;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    public function index()
    {
        $user = User::findOrFail(12);
        Mail::to('kamil7.pl@gmail.com')->send(new newOrder($user));
    }
}
