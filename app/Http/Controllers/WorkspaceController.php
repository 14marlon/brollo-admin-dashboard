<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WorkspaceController extends Controller
{
    public function showWorkspace() 
    {
        return view('workspace')
        ->with('id', '1')
        ->with('user_id', '100')
        ->with('title', 'first project')
        ->with('action', 'Edit');
    }
}
