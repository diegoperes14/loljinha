<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    UserController,
    HomeController,
    ProfileImageController
};

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

Route::get('/users', [UserController::class, 'index'])->name('users.index');
Route::get('users/create', [userController::class, 'create'])->name('users.create');
Route::post('users', [UserController::class, 'store'])->name('users.store');
Route::get('/users/{id}', [UserController::class, 'show'])->name('users.show');

Route::get('/home', [HomeController::class, 'home'])->name('home.show');

//rotas de profile_image
Route::get('upload-image', [ProfileImageController::class, 'index']);
Route::post('save', [ProfileImageController::class, 'save']);

Route::get('/', function () {
    return view('welcome');
});
