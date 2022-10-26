<?php

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

/* Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php'; */

//All projects
Route::get('/', function () {
    return view('projects', [
        'heading' => 'Latest Projects',
        'projects' => Project::all()
    ]);
});

//Single project
Route::get('/projects/{project}', function(Project $project) {

        return view('project', [
            'project' => $project
        ]);

});
