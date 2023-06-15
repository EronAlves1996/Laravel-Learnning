<?php

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
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

Route::prefix('/landing-page')->group(function () {
    Route::get('/', function () {
        return view('page.index');
    });

    Route::get('/search', function (Request $request) {
        $data = ['José', 'João', 'Nome qualquer', 'etc', 'Vai se foder'];

        $query = $request->query('busca');

        $filtered = array_filter($data, function ($d) use ($query) {
            return str_contains($d, $query);
        });

        return view('page.result')->with('filtered', $filtered);
    });
});
