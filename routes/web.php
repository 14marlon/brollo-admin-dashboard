<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\UserController;
use App\Http\Controllers\WorkspaceController;
use App\Http\Controllers\Web\Workspace_userController;
use App\Http\Controllers\Web\CardController;
use App\Http\Controllers\Web\TaskController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/user', function () {
    return view('user');
})->name('user');

Route::get('/workspace', function () {
    return view('workspace');
})->name('workspace');

Route::get('/workspace_user', function () {
    return view('workspace_user');
})->name('workspace_user');

Route::get('/card', function () {
    return view('card');
})->name('card');

Route::get('/task', function () {
    return view('task');
})->name('task');

Route::get('/user',[UserController::class, 'showUser']);
Route::get('/workspace',[WorkspaceController::class, 'showWorkspace']);
Route::get('/workspace_user',[Workspace_userController::class, 'showWorkspaceUser']);
Route::get('/card',[cardController::class, 'showcard']);
Route::get('/task',[TaskController::class, 'showTask']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
