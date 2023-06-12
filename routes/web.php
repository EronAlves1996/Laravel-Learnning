<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;

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

Route::get('/home', function () {
    return 'Welcome to the home page';
});

Route::get('/about', [Controller::class, 'aboutPage']);

Route::get('/isAdmin', function () {
    $name = 'John Doe';
    $age = 30;
    $isAdmin = true;

    return view('isAdmin')
        ->with(['name' => $name, 'age' => $age, 'isAdmin' => $isAdmin]);
});
