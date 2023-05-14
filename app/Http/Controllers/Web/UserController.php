<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function showUser() 
    {
        return view('user')
        ->with('id', '1')
        ->with('name', 'Mark Otto')
        ->with('email', 'markotto@gmail.com')
        ->with('photo', 'Photo')
        ->with('action', 'Edit');
    }
}
