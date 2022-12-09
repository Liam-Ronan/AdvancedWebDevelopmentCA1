<?php

use app\Models\Project;
use illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\User\CreatorController as UserCreatorController;
use App\Http\Controllers\admin\CreatorController as AdminCreatorController;

use App\Http\Controllers\User\ProjectController as UserProjectController;
use App\Http\Controllers\Admin\ProjectController as AdminProjectController;

use App\Http\Controllers\Admin\DeveloperController as AdminDeveloperController;
use App\Http\Controllers\User\DeveloperController as UserDeveloperController;

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

require __DIR__ . '/auth.php';

/* Admin routes */
Route::resource('admin/projects', AdminProjectController::class)->middleware(['auth'])->names('admin.projects');

Route::resource('admin/creators', AdminCreatorController::class)->middleware(['auth'])->names('admin.creators');

Route::resource('admin/developers', AdminDeveloperController::class)->middleware(['auth'])->names('admin.developers');

/* User routes*/
Route::resource('user/projects', UserProjectController::class)->names('user.projects');

Route::resource('user/creators', UserCreatorController::class)->names('user.creators');

Route::resource('user/developers', UserDeveloperController::class)->names('user.developers');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home.index');


