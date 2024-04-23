<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function favorites()
    {
        if (auth()->check()) {
            
            $user = auth()->user();
            $favorites = $user->favorites; 

            return view('favorites.index', compact('favorites'));
        } else {
            return redirect()->route('login')->with('error', 'You need to login to view your favorites.');
        }
    }
}
