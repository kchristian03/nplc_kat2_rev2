<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DebugController extends Controller
{
    public function index()
    {
        return view('debug.home');
    }

    public function user()
    {
        // Get the logged-in user
        $user = Auth::user();
        return view('debug.user', ['user' => $user]);
    }
}
