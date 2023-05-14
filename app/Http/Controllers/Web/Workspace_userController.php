<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Workspace_userController extends Controller
{
    public function showWorkspaceUser() 
    {
        return view('workspace_user')
        ->with('id', '1')
        ->with('name', 'Mark Otto')
        ->with('email', 'markotto@gmail.com')
        ->with('workspace_id', '501')
        ->with('user_id', '100')
        ->with('action', 'edit');
    }
}
