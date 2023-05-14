<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function showTask() 
    {
        return view('task')
        ->with('id', '1')
        ->with('name', 'Mark Otto')
        ->with('workspace_id', '501')
        ->with('card_id', '100')
        ->with('status', 'To Do')
        ->with('action', 'edit');
    }
}
