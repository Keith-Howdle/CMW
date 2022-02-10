<?php

use App\Models\Container;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataTablesController;

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

Route::get('/bhnet', function () {
    return view('bhnet');
});

Route::get('/twrkshp', function () {
    return view('twrkshp', [
        'twrkshp' => Container::all()
    ]);
});


Route::get('yajra-datatables', [DataTablesController::class, 'index']);

