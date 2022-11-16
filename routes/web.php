<?php

use App\Http\Controllers\Admin\ProjectController as AdminProjectController;
use App\Http\Controllers\User\ProjectController as UserBookController;
use illuminate\Http\Request;
use App\Models\Project;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

 Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php'; 

//All projects
Route::get('/projects', [ProjectController::class, 'index'])->name('projects.index');

//show create Form
Route::get('/projects/create', [ProjectController::class, 'create']);

//store project Data
Route::post('/projects', [ProjectController::class, 'store']);

//show update Form
Route::get('/projects/{project}/edit', [ProjectController::class, 'edit']);

//Update Project data
Route::put('/projects/{project}', [ProjectController::class, 'update']);

//Delete Project 
Route::delete('/projects/{project}', [ProjectController::class, 'destroy']);

//Single project
Route::get('/projects/{project}', [ProjectController::class, 'show']);

