<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CardController extends Controller
{
    public function showCard() 
    {
        return view('card')
        ->with('id', '1')
        ->with('title', 'Project 1 card')
        ->with('name', 'Mark Otto')
        ->with('email', 'markotto@gmail.com')
        ->with('workspace_id', '501')
        ->with('user_id', '100')
        ->with('action', 'edit');
    }
}
